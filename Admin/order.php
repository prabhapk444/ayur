<?php
    include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        * {
            font-family: 'Roboto', sans-serif;
            background-color: #fffffe;
        }

        @media only screen and (max-width: 600px) {
            th, td {
                display: block;
                width: 100%;
            }
        }
    </style>
</head>
<body>

<?php
    $selectQuery = "SELECT * FROM orders";
    $result = $conn->query($selectQuery);

    if ($result === false) {
        echo "Error retrieving data: " . $conn->error;
    } else {
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>S.No</th><th>Username</th><th>Product</th><th>Email</th><th>Number</th><th>Total Amount</th><th>Payment Method</th></tr>";
            
            $serial = 1;
            
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $serial . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['product'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['number'] . "</td>";
                echo "<td>₹" . $row['total_amount'] . "</td>";
                echo "<td>" . $row['payment_method'] . "</td>";
                echo "</tr>";
                $serial++; 
            }
        } else {
            echo "<tr><td colspan='7'>No orders found</td></tr>";
        }
    }

    $conn->close();
?>

</body>
</html>
