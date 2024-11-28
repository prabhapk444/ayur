

<?php
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Products</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        *{
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>
    <?php include("header.php"); ?>
    <br><br>
    <center><h3>Hair Products</h3></center>
    <?php
    include("db.php");

    $selectQuery = "SELECT product_name, category, price, quantity, availablequantity, description, image, product_id FROM products WHERE category ='hair'";
    $result = $conn->query($selectQuery);

    if ($result === false) {
        echo "Error retrieving data: " . $conn->error;
    } else {
        if ($result->num_rows > 0) {
            echo '<div class="row">';
            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-lg-4 col-md-4 col-sm-8 mb-4">';
                echo '<div class="card shadow">';
                echo '<img src="./uploads/' . basename($row["image"]) . '" class="card-img-top" alt="' . $row["product_name"] . '" loading="lazy">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title product-name">' . $row["product_name"] . '</h5>';
                echo '<p class="card-text"><strong>Category:</strong> ' . $row["category"] . '</p>';
                echo '<p class="card-text"><strong>Price:</strong> ₹' . $row["price"] . '</p>';
                echo '<p class="card-text"><strong>Quantity:</strong> ' . $row["quantity"] . '</p>';
                echo '<p class="card-text"><strong>Description:</strong> ' . $row["description"] . '</p>';
                echo '<button class="btn btn-warning view_prod" data-id="' . $row['product_id'] . '"><i class="fa fa-eye"></i> View</button>';
                echo '<form method="post" action="add_to_cart.php" class="mt-3">';
                echo '<input type="hidden" name="product_id" value="' . $row['product_id'] . '">';
                echo '<input type="hidden" name="product_name" value="' . $row['product_name'] . '">';
                echo '<input type="hidden" name="price" value="' . $row['price'] . '">';
                echo 'Quantity:<input type="number" class="form-control" name="quantity" value="1" min="1">';
                echo '<button type="submit" class="btn btn-warning mt-3" name="add_to_cart">Add to Cart</button>';
                echo '</form>';
                echo '</div>';
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

    <script>
    $(document).ready(function() {
        $('.view_prod').click(function() {
            var productId = $(this).data('id');
            var productName = $(this).closest('.card-body').find('.product-name').text();
            Swal.fire({
                title: productName,
                html: '<p><strong>Product ID:</strong> ' + productId + '</p>',
                icon: 'info',
                confirmButtonText: 'Close'
            });
        });
    });
    </script>

    <?php include("footer.php"); ?>
</body>
</html>
