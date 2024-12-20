<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>

* {
            font-family: 'Roboto', sans-serif;
        }
    .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
    
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
        }

       
        label {
            font-weight: bold;
        }

       
        input[type="text"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

    
        button[type="submit"] {
            background-color: #ffc107;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #ff9800;
        }
    </style>
</head>
<body>
    <center><h3>Add products</h3></center>
    <div class="container mt-5 h-100">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group mb-2">
                <label for="product_name">Product Name:</label>
                <input type="text" class="form-control" id="product_name" name="product_name" required>
            </div>
            
            <div class="form-group mb-2">
                <label for="category">Category:</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="skin">Skin</option>
                    <option value="hair">Hair</option>
                    <option value="combo">combo</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
           <div class="form-group mb-2">
    <label for="price">Price:</label>
    <div class="input-group">
        <input type="number" class="form-control" id="price" value="1.00" name="price" step="0.01" required>
    </div>
</div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
            <div class="form-group mb-2">
                <label for="availability">Availability:</label>
                <input type="number" class="form-control" id="availability" name="availability" required>
            </div>
            <div class="form-group mb-2">
                <label for="image">Product Image:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-warning">Submit</button>
        </form>
    </div>
    <?php

include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST["product_name"];
    $category = $_POST["category"];
    $description = $_POST["description"];
    $price =  $_POST["price"]; 
    $quantity = $_POST["quantity"];
    $availability = $_POST["availability"];

 
    $rootPath = $_SERVER['DOCUMENT_ROOT'];

  
    $uploadsPath = $rootPath . "/ayur/uploads/";

    if (!is_dir($uploadsPath)) {
        mkdir($uploadsPath, 0755, true);
    }

 
    $targetFile = $uploadsPath . basename($_FILES["image"]["name"]);

    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

    $sql = "INSERT INTO products (product_name, category, description, price, quantity, availablequantity, image)
            VALUES (?, ?, ?,?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssss",$productName, $category,$description, $price, $quantity, $availability, $targetFile);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "Product added successfully!";
    } else {
        echo "Error adding product: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>


      

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
