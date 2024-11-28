<?php
session_start();


if (!isset($_SESSION["username"]) || !isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit(); 
}

$username = $_SESSION["username"];
$userID = $_SESSION["user_id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    .dropdown-menu .dropdown-item:hover {
      background-color: transparent;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-white" href="skin.php">Skin</a></li>
            <li><a class="dropdown-item text-white" href="hair.php">Hair</a></li>
            <li><a class="dropdown-item text-white" href="combo.php">Super Saver Combo</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="concern.php">Consultancy</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="logout.php"><?php echo $username ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="add_to_cart.php"><i class="fas fa-shopping-cart"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

