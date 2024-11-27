<?php
include("db.php");

session_start();

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Reviews</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        * {
            font-family: 'Roboto', sans-serif;
            box-sizing: border-box;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .container h3 {
            margin-bottom: 20px;
        }
        .container form {
            display: flex;
            flex-direction: column;
        }
        .container form label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        .container form input,
        .container form textarea {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }
        .container form button {
            background-color: #ffd803;
            color: #272343;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .container form button:hover {
            background-color: #e0c300;
        }
        .rating {
            display: inline-block;
            unicode-bidi: bidi-override;
            direction: rtl;
            margin-bottom: 10px;
            position: relative;
        }
        .rating > input {
            display: none;
        }
        .rating > label {
            float: right;
            cursor: pointer;
            color: #ccc;
            font-size: 40px;
            transition: color 0.3s ease, transform 0.3s ease;
        }
        .rating > label::before {
            content: '★';
        }
        .rating label:hover,
        .rating label:hover ~ label {
            color: #f4b400; 
            transform: scale(1.1);
            transition: transform 0.3s ease, color 0.3s ease; 
        }
        .rating input:checked + label,
        .rating input:checked + label ~ label {
            color: #ffd803;
            animation: bounce 0.5s ease-in-out; 
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }
        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 0.7;
            }
            50% {
                transform: scale(1.2);
                opacity: 1;
            }
            100% {
                transform: scale(1);
                opacity: 0.7;
            }
        }
        .rating label:hover::before,
        .rating input:checked + label:hover::before,
        .rating input:checked + label:hover ~ label::before {
            animation: pulse 0.5s ease-in-out infinite;
        }
        .reviews {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
            margin-top: 20px;
        }
        .review-card {
            width: 300px;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            text-align: center;
        }
        .review-card img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            margin-bottom: 10px;
        }
        .review-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .review-command {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
        }
        .star-ratings {
            color: #ffd803;
            font-size: 20px;
        }
        .image-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 20px;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        .image-container {
            text-align: center;
            position: relative;
        }
        .image-container img {
            width: 300px; 
            height: 200px; 
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        }
        .arrow {
            position: absolute;
            top: 50%;
            left: calc(100% + 10px);
            transform: translateY(-50%);
            font-size: 40px;
            color: #333;
            animation: floatArrow 2s ease-in-out infinite alternate;
        }
        @keyframes floatArrow {
            from {
                transform: translateY(-50%) translateY(0);
            }
            to {
                transform: translateY(-50%) translateY(-10px);
            }
        }
        @media (max-width: 768px) {
            .container {
                width: 100%;
            }
            .image-container img {
                width: 100%; 
                height: auto; 
            }
        }
    </style>
</head>
<body>

    <center><h3>User Reviews</h3></center>
    <div class="image-grid">
        <div class="image-container">
            <center><h3>Before</h3></center>
            <img src="./images/before.avif" alt="Before" loading="lazy">
            <span class="arrow">→</span>
        </div>
        <div class="image-container">
            <center><h3>After Using Ayurvedic Skin Product</h3></center>
            <img src="./images/after.avif" alt="After" loading="lazy">
        </div>
    </div>

    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="name">Full Name</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($_SESSION['username']); ?>" readonly>
            
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" readonly>
            
            <label for="image">Profile Image</label>
            <input type="file" name="image" id="image">
            
            <label for="before_image">Before Ayurveda Image</label>
            <input type="file" name="before_image" id="before_image">
            
            <label for="after_image">After Ayurveda Image</label>
            <input type="file" name="after_image" id="after_image">
            
            <label for="command">Command</label>
            <textarea name="command" id="command" cols="30" rows="10"></textarea>
            
            <label for="rating">Ratings</label>
            <div class="rating">
                <input type="radio" id="star5" name="rating" value="5"><label for="star5" title="5 stars"></label>
                <input type="radio" id="star4" name="rating" value="4"><label for="star4" title="4 stars"></label>
                <input type="radio" id="star3" name="rating" value="3"><label for="star3" title="3 stars"></label>
                <input type="radio" id="star2" name="rating" value="2"><label for="star2" title="2 stars"></label>
                <input type="radio" id="star1" name="rating" value="1"><label for="star1" title="1 star"></label>
            </div>
            <button type="submit">Submit</button>
        </form><br>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uploadsPath = './uploads/';
        if (!is_dir($uploadsPath)) {
            mkdir($uploadsPath, 0777, true);
        }

        $username = $_SESSION['username'];
        $email = $_SESSION['email'];
        $image = $_FILES['image']['name'];
        $beforeImage = $_FILES['before_image']['name'];
        $afterImage = $_FILES['after_image']['name'];
        $command = htmlspecialchars($_POST['command']);
        $rating = $_POST['rating'];

        if ($image) {
            move_uploaded_file($_FILES['image']['tmp_name'], $uploadsPath . $image);
        }
        if ($beforeImage) {
            move_uploaded_file($_FILES['before_image']['tmp_name'], $uploadsPath . $beforeImage);
        }
        if ($afterImage) {
            move_uploaded_file($_FILES['after_image']['tmp_name'], $uploadsPath . $afterImage);
        }

        $insertReview = "INSERT INTO reviews (name, email, profile_image, before_image, after_image, command, rating) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insertReview);
        $stmt->bind_param("ssssssi", $username, $email, $image, $beforeImage, $afterImage, $command, $rating);
        if ($stmt->execute()) {
            echo "<script>Swal.fire('Success!', 'Review submitted successfully!', 'success');</script>";
        } else {
            echo "<script>Swal.fire('Error!', 'Something went wrong. Please try again.', 'error');</script>";
        }
        $stmt->close();
    }
    ?>

</body>
</html>
