<?php
require 'db.php';

require '././PHPMailer/src/Exception.php';
require '././PHPMailer/src/PHPMailer.php';
require '././PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();
if (!isset($_SESSION['user_id'])) {
    http_response_code(401); 
    exit;
}

$user_id = $_SESSION['user_id'];
$username = $_POST['username'];
$product = $_POST['product'];
$email = $_POST['email'];
$number = $_POST['number'];
$city = $_POST['city'];
$address = $_POST['address'];
$confirmaddress = $_POST['confirmaddress'];
$pincode = $_POST['pincode'];
$delivery = $_POST['delivery'];
$total_amount = $_POST['totalAmount'];
$payment_method = $_POST['payment'];


$conn->begin_transaction();

try {
    
    $sql = "INSERT INTO orders (username, product, email, number, city, address, confirmaddress, pincode, delivery, total_amount, payment_method)
            VALUES ('$username', '$product', '$email', '$number', '$city', '$address', '$confirmaddress', '$pincode', '$delivery', '$total_amount', '$payment_method')";

    if ($conn->query($sql) === TRUE) {
        $getProductDetailsSql = "SELECT product_id, quantity FROM cart WHERE user_id = ?";
        $stmt = $conn->prepare($getProductDetailsSql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $product_id = $row['product_id'];
            $quantity = $row['quantity'];
            $updateProductSql = "UPDATE products SET quantity = quantity - ? WHERE product_id = ?";
            $updateStmt = $conn->prepare($updateProductSql);
            $updateStmt->bind_param("ii", $quantity, $product_id);
            if (!$updateStmt->execute()) {
                throw new Exception("Error updating product quantity.");
            }
        }

        $stmt->close();
        $deleteCartSql = "DELETE FROM cart WHERE user_id = ?";
        $stmt = $conn->prepare($deleteCartSql);
        $stmt->bind_param("i", $user_id);
        if (!$stmt->execute()) {
            throw new Exception("Error deleting cart items.");
        }
        $stmt->close();
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'karanprabha22668@gmail.com';
        $mail->Password = 'wyug jamk kuco mwin'; 
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('karanprabha22668@gmail.com', 'Admin');
        $mail->addAddress($email, $user_id);
        $mail->addReplyTo('karanprabha22668@gmail.com', 'Information');

        $mail->isHTML(true);
        $mail->Subject = 'Order Confirmation';
        $mail->Body = "<div style='font-family: Arial, sans-serif; color: #333;'>
        <p>Dear User (ID: $user_id),</p>
        <p>Your order has been confirmed.</p>
        <p><strong>Product:</strong> $product</p>
        <p><strong>Total Amount:</strong> ₹ " . number_format($total_amount, 2) . "</p>
        <p><strong>Payment Method:</strong> $payment_method</p>
        <p><strong>Delivery Date:</strong> $delivery</p>
      </div>";

        $mail->send();
        $conn->commit();
        http_response_code(200);
    } else {
        throw new Exception("Error inserting the order.");
    }
} catch (Exception $e) {
    $conn->rollback();
    http_response_code(500); 
    echo "Error: " . $e->getMessage();
}

$conn->close();
?>
