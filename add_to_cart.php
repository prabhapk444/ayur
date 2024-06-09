<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
     <style>    
     *{
        font-family: 'Roboto', sans-serif;
     }
     
.container {
    text-align: center; 
}
.container img {
    width: 50%;
    height: auto; 
}

     
.product-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr; 
    grid-template-rows: auto;
    grid-gap: 20px; 
}

.product-card {
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
}

.product-details {
    padding: 20px;
}

.product-details h5 {
    margin-top: 0;
    margin-bottom: 10px;
    font-size: 1.2rem;
}

.product-details p {
    margin: 5px 0;
}

.product-details strong {
    font-weight: bold;
}

.product-image {
    width: 100%;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
}
@media only screen and (max-width: 992px) {
    .product-grid {
        display: flex;
        flex-wrap: wrap;
    }

    .product-card {
        width: 100%;
        box-sizing: border-box;
    }

    .product-details h5 {
        font-size: 1rem; 
    }

    .product-details p {
        margin: 3px 0; 
        font-size: 0.9rem;
    }
}



     </style>
</head>
<body>
   <?php
   include("header.php");
   ?>
<center>
    <h2>Product List</h2>
</center>

<div class="container">
    <img src="./images/Add to Cart.gif" alt="alt">
    </div>



   
<?php
include("db.php");



$sql = "SELECT id FROM register";


$result = $conn->query($sql);
if ($result === false) {
    echo "Error: " . $conn->error;
} else {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
        }
    } else {
        echo "No rows found.";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) {

    $product_id = (int)$_POST['product_id']; 
    $query = "SELECT price, product_name FROM products WHERE product_id = $product_id";
    
    $result = $conn->query($query);
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $product_name = $row['product_name'];
        $username = $_SESSION['username'];
        $user_id=$_SESSION['user_id'];
        
        $price = (float)preg_replace("/[^0-9.]/", "", $row['price']);
        $quantity = (int)$_POST['quantity']; 
        $amount = $quantity * $price;
    
      
        $formatted_amount = "₹" . number_format($amount, 2);
    
        echo "<script>
            Swal.fire({
                title: 'Sale Completed',
                text: 'Your sale has been successfully processed!',
                icon: 'success',
                confirmButtonText: 'OK',
                html: `You added ${product_name} to your cart for ${formatted_amount} total products for ${quantity}.`,
            });
        </script>";
    
      
        $insertPaymentQuery = "INSERT INTO payment (product_id,user_id,name, quantity, rate, amount, state) 
                               VALUES ('$product_id','$user_id','$username', $quantity, $price, '$formatted_amount', 'success')";
        $paymentResult = $conn->query($insertPaymentQuery);
    
        if ($paymentResult) {
        } else {
            echo "Error recording payment: " . $conn->error;
        }
    } else {
        echo "No product found for the given ID.";
    }
    
} else {
    echo "Invalid request.";
}


include("db.php");

if (!is_numeric($product_id) || !is_numeric($quantity) || !is_numeric($id)) {
    echo "Invalid input parameters.";
    exit; 
}


$sql = "SELECT price FROM products WHERE product_id = $product_id";
$res = $conn->query($sql);

if ($res && $res->num_rows > 0) {
    $row = $res->fetch_assoc();
    $price = $row['price']; 

  
    $checkQuery = "SELECT * FROM cart WHERE user_id = '$id' AND product_id = $product_id AND status = 1";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult && $checkResult->num_rows > 0) {
    
        $updateQuery = "UPDATE cart SET quantity = quantity + $quantity, amount = amount + ($quantity * $price) WHERE user_id = '$id' AND product_id = $product_id AND status = 1";
        $updateResult = $conn->query($updateQuery);

        if (!$updateResult) {
            echo "Error updating cart: " . $conn->error . "<br>";
        }


        $updateProductQuery = "UPDATE products SET quantity = quantity - $quantity WHERE product_id = $product_id";
        $productUpdateResult = $conn->query($updateProductQuery);

        if (!$productUpdateResult) {
            echo "Error updating products table: " . $conn->error . "<br>";
        }
    } else {
      
        $amount = $quantity * $price;
        $insertQuery = "INSERT INTO cart (user_id, product_id, quantity, amount, status) VALUES ('$id', $product_id, $quantity, $amount, 1)";
        $insertResult = $conn->query($insertQuery);

        if (!$insertResult) {
            echo "Error inserting new item into cart: " . $conn->error . "<br>";
        }
    }
} else {
    echo "Product not found.";
}


$conn->close();
?>


<?php
include("db.php");

$name = $_SESSION['username'];

$selectQuery = "
    SELECT
        c.cart_id,
        p.category,
        c.amount,
        r.Username AS user_name,
        p.product_id,
        p.image,
        p.product_name AS product_name,
        c.quantity AS quantity,
        p.price AS price,  
        p.description
    FROM
        cart c
    JOIN
        register r ON c.user_id = r.id
    JOIN
        products p ON c.product_id = p.product_id
    WHERE
        c.user_id = '$id' AND c.status = 1;";
$result = $conn->query($selectQuery);

if ($result === false) {
    echo "Error retrieving data: " . $conn->error;
} else {
    if ($result->num_rows > 0) {
        echo '<div class="product-grid">';
        while ($row = $result->fetch_assoc()) {
            echo '<div class="product-card">';
            echo '<div class="product-details">';
            echo '<form action="order.php" method="post">';
            echo '<img src="./uploads/' . basename($row["image"]) . '" alt="' . $row["product_name"] . '" class="product-image">';
            echo '<h5>'  . $row["product_name"] . '</h5>';
            echo '<p><strong>Category:</strong> ' . $row["category"] . '</p>';
            echo '<p><strong>Price:</strong> ₹' . $row["price"] . ' </p>';
            echo '<p><strong>Quantity:</strong> ' . $row["quantity"] . '</p>';
            echo '<p><strong>Total amount:</strong>₹<strong><span name="totalAmount">' . $row["amount"] . '</span></strong></p>';
            echo '<p><strong>Description:</strong> ' . $row["description"] . '</p>';
            echo '<input type="hidden" name="productId" value="' . $row['product_id'] . '">';
            echo '<input type="hidden" name="productName" value="' . $row['product_name'] . '">';
            echo '<input type="hidden" name="totalAmount" value="' . $row['amount'] . '">';
            echo '<button type="submit" class="btn btn-warning">Order Now</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo "No records found in the products table.";
    }
}

$conn->close(); 
?>


 
<br><br>


<?php
include("footer.php");
?>

</body>
</html>
