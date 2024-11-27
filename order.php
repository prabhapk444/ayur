

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        * {
            font-family: 'Roboto', sans-serif;
            box-sizing: border-box;
        }

        body {
            background-color: #fffffe;
            margin: 0;
            padding: 0;
        }

        h3 {
            text-align: center;
            color: #272343;
            margin-top: 20px; 
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center; 
            margin-top: 20px; 
        }

        .form {
            max-width: 540px;
            width: 100%;
            padding: 20px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            transition: background-color 0.5s ease-in-out, border 0.5s ease-in-out;
            border: 2px solid white;
        }

        .label {
            color: #2b2c34;
            margin-bottom: 4px;
            font-weight: bold;
            text-align: left;
            display: block; 
        }

        .input {
            padding: 10px;
            margin-bottom: 20px;
            width: 100%;
            font-size: 1rem;
            color: #4a5568;
            outline: none;
            border: 1px solid transparent;
            border-radius: 4px;
            transition: all 0.2s ease-in-out;
        }

        .input:focus {
            background-color: #fff;
            box-shadow: 0 0 0 2px #cbd5e0;
        }

        .input:valid {
            border: 1px solid green;
        }

        .input:invalid {
            border: 1px solid rgba(14, 14, 14, 0.205);
        }

        .submit {
            background-color: #ffd803;
            color: #272343;
            border: none;
            border-radius: 4px;
            padding: 8px 16px;
            font-size: 1rem;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
        }

        .form p {
            color: #2b2c34;
            margin-top: 10px;
            font-weight: bold;
        }

        @media screen and (max-width: 768px) {
            .container {
                flex-direction: column; 
                align-items: center; 
            }

            .form {
                max-width: 90%; 
            }
        }
    </style>
</head>
<body>
    <?php require("header.php");?><br>
    <?php
include("db.php");

$name = $_SESSION['username'];

$userQuery = "SELECT email, address FROM register WHERE username = ? LIMIT 1"; 
$stmt = $conn->prepare($userQuery);
$stmt->bind_param("s", $name); 
$stmt->execute();
$stmt->bind_result($userEmail, $userAddress);

if ($stmt->fetch()) {
    $_SESSION['email'] = $userEmail;
    $_SESSION['address'] = $userAddress;
}

$stmt->close();

?>

    <h3>Fill the Form To Confirm Your Order</h3>

    <div class="container">


        <form class="form" method="post" action="" id="orderForm">
            <label for="username" class="label">Username</label>
            <input type="text" id="username" name="username" required class="input" readonly value="<?php echo $_SESSION['username']; ?>">

            <label for="product" class="label">You Ordered Product</label>
            <?php  
            $productName = isset($_POST["productName"]) ? $_POST["productName"] : "No Product Selected";
            echo '<input type="text" readonly value="' . $productName . '" class="input" name="product">';

            $deliveryDate = date('Y-m-d', strtotime('+4 days')); 
            $deliveryTime = date('H:i A', strtotime('+3 days'));
            ?>

            <label for="email" class="label">Email</label>
            <input type="email" id="email" name="email" required class="input" readonly value="<?php echo $_SESSION['email']; ?>">


            <label for="number" class="label">Mobile Number</label>
            <input type="number" name="number" id="number" required class="input">

            <label for="city" class="label">City</label>
            <input type="text" name="city" id="city" required class="input">

            <label for="address" class="label">Address</label>
            <input type="text" name="address" id="address" required class="input" readonly value="<?php echo $_SESSION['address']; ?>">

            <label for="confirmaddress" class="label">Confirm Address</label>
            <input type="text" name="confirmaddress" id="confirmaddress" required class="input" readonly value="<?php echo $_SESSION['address']; ?>">

            <label for="pincode" class="label">Pincode</label>
            <input type="number" id="pincode" name="pincode" required class="input">

            <label for="delivery" class="label">Delivery Date and Time</label>
<input type="text" id="delivery" name="delivery" readonly value="<?php echo $deliveryDate . ' at ' . $deliveryTime; ?>" class="input">

<p><strong>Total Amount:</strong> ₹<?php echo $_POST['totalAmount']; ?></p>
<input type="hidden" name="totalAmount" value="<?php echo $_POST['totalAmount']; ?>">

            <label for="payment">Payment Method</label>
            <select name="payment" id="paymentMethod">
    <option value=""></option>
    <option value="cash">Cash On Delivery</option>
    <option value="online">Online Payment</option>
</select><br><br><div id="onlinePayment" style="display: none;">
    <label><input type="radio" name="onlinePaymentMethod" value="debitCard"> Debit Card Number</label><br>
    <input type="text" name="debitCard" id="debitCard" style="display: none;"><br><br>

    <label><input type="radio" name="onlinePaymentMethod" value="creditCard"> Credit Card Number</label><br>
    <input type="text" name="creditCard" id="creditCard" style="display: none;"><br><br>

    <label><input type="radio" name="onlinePaymentMethod" value="gpay"> G Pay</label><br>
    <input type="text" name="gpay" id="gpay" style="display: none;"><br><br>

    <label for="additionalInfo">Enter the Number</label><br>
        <input type="text" name="additionalInfo"><br><br>
</div>



            <input type="submit" class="submit" value="Confirm Order">
        </form>
    </div><br>
    <script>
    $(document).ready(function() {
        $('#paymentMethod').change(function() {
            var selectedPaymentMethod = $(this).val();
            if (selectedPaymentMethod == 'online') {
                $('#onlinePayment').show();
            } else {
                $('#onlinePayment').hide();
            }
        });

        $('#orderForm').submit(function(event) {
            event.preventDefault(); 
            let formData = new FormData(this);
            $.ajax({
                url: 'process_order.php',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    Swal.fire({
                        title: 'Order Placed!',
                        text: 'Your order has been successfully placed.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'home.php';
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });
    });
</script>


    <?php include("footer.php"); ?>
</body>
</html>
