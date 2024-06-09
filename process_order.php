<?php
require 'db.php'; 

require '././PHPMailer/src/Exception.php';
require '././PHPMailer/src/PHPMailer.php';
require '././PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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

$sql = "INSERT INTO orders (username, product, email, number, city, address, confirmaddress, pincode, delivery, total_amount, payment_method)
        VALUES ('$username', '$product', '$email', '$number', '$city', '$address', '$confirmaddress', '$pincode', '$delivery', '$total_amount', '$payment_method')";

if ($conn->query($sql) === TRUE) {
   
    $mail = new PHPMailer(true);

    try {
        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'karanprabha22668@gmail.com'; 
        $mail->Password = 'hrmq uoyw zory obcg'; 
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('karanprabha22668@gmail.com', 'Admin');
        $mail->addAddress($email, $username); 
        $mail->addReplyTo('karanprabha22668@gmail.com', 'Information');


        $mail->isHTML(true); 
        $mail->Subject = 'Order Confirmation';
        $mail->Body = "<div style='font-family: Arial, sans-serif; color: #333;'>
        <p>Dear $username,</p>
        <p>Your order has been confirmed.</p>
        <p><strong>Product:</strong> $product</p>
        <p><strong>Total Amount:</strong> ₹ " . number_format($total_amount, 2) . "</p>
        <p><strong>Payment Method:</strong> $payment_method</p>
        <p><strong>Delivery Data:</strong> $delivery</p>
      </div>";


        $mail->send();
        http_response_code(200); 
    } catch (Exception $e) {
        http_response_code(500); 
    }
} else {
    http_response_code(500); 
}

$conn->close();
?>
