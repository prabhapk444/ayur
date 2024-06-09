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
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>

        *{
            font-family: 'Roboto', sans-serif;
        }
   .video-container {
            position: relative;
            overflow: hidden;
            padding-bottom: 56.25%;
            margin: 20px 0;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .rating {
            display: inline-block;
            unicode-bidi: bidi-override;
            direction: rtl;
        }
        .rating > input {
            display: none;
        }
        .rating > label {
            float: right;
            cursor: pointer;
            color: grey;
        }
        .rating > label:before {
            content: '\2605';
            margin-right: 5px;
            font-size: 24px;
        }
        .rating > input:checked ~ label,
        .rating > input:checked ~ label ~ label {
            color: orange;
        }

        .container form {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            width: 50%;
            margin: 0 auto; 
            border-radius: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.4); 
        }

        .container form label {
            display: block;
            margin-bottom: 10px;
        }

        .container form input[type="text"],
        .container form input[type="email"],
        .container form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .container form button {
            padding: 10px 20px;
            background-color: #ffd803;
            color:#272343;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
          
        img {
    display: block; 
    margin: 0 auto; 
    width: 50%; 
    height: auto; 

}.image-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 20px;
    justify-content: center;
    align-items: center;
}

.image-container {
    text-align: center;
    position: relative; 
}

.image-container img {
    max-width: 100%;
    height: auto;
}

.arrow {
    position: absolute;
    top: 50%;
    left: calc(100% + 10px);
    transform: translateY(-50%);
    font-size: 80px;
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


        @media (max-width: 992px) {
            .container form {
                width: 100%; 
            }
            img{
                width:100%;
            }
            .image-grid {
        grid-template-rows: repeat(auto-fit, minmax(150px, 1fr));
    }
        }
        .reviews {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        gap: 20px;
    }

    .review-card {
        width: 400px; 
        /* background-colo  r: #f8f8f8; */
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .review-card img {
        border-radius: 50%; 
        width: 100px; 
        height: 100px; 
        margin-bottom: 10px;
    }

    .review-name {
        text-align:left;
        font-size: 16px;
        margin-bottom: 5px;
    }

    .review-command {
        font-size: 14px;
        color: #666;
        margin-bottom: 10px;
    }

    .star-ratings {
        color: #ffd803;
        font-size: 20px;
    }
    </style>
</head>
<body>
  
    <center><h3>User Reviews</h3></center>
    <div class="video-container">
        <iframe src="./videos/Vedix Customised Ayurveda_ Unlock Your Hair_s Full Potential.mp4" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="review img">
 <img src="./images/Code review.gif" alt="image" srcset="">
    </div>

    <div class="image-grid">
    <div class="image-container">
        <center><h3>Before</h3></center>
        <img src="./images/before.avif" alt="Before">
        <span class="arrow">→</span> 
    </div>
    <div class="image-container">
        <center><h3>After Using Ayurvedic Skin Product</h3></center>
        <img src="./images/after.avif" alt="After">
    </div>
</div>
<br><br>

<div class="newimage">
    <center><h3> Before and After Using Ayurvedic Hair Product</h3></center>
    <img src="./images/hair.jpg" alt="">
</div>
<br><br><br>


    <center><h3>Review Form</h3></center>
    <div class="container">
    <form action="" method="post" autocomplete="off" enctype="multipart/form-data">

        <label for="name">Full Name</label>
        <input type="text" name="name" required  readonly value="<?php echo $_SESSION['username']; ?>">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required readonly value="<?php echo $_SESSION['email']; ?>">
        <label for="image">Profile Image</label><br>
        <input type="file" name="image" id="image"><br>
        <label for="before_image">Before Ayurveda Image</label><br>
<input type="file" name="before_image" id="before_image"><br>

<label for="after_image">After Ayurveda Image</label><br>
<input type="file" name="after_image" id="after_image"><br>

        <label for="command">Command</label><br>
        <textarea name="command" id="command" cols="30" rows="10"></textarea>
        <label for="Ratings">Ratings</label>
        <div class="rating">
            <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 stars"></label>
            <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 stars"></label>
            <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 stars"></label>
            <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 stars"></label>
            <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
        </div>
        <button type="submit">Submit</button>
    </form>
</div><br><br>

<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadsPath = "./uploads/";
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $command = mysqli_real_escape_string($conn, $_POST['command']);
    $ratings = mysqli_real_escape_string($conn, $_POST['rating']);
    $before_image = $_FILES['before_image']['name'];
    $temp_before_image = $_FILES['before_image']['tmp_name'];
    move_uploaded_file($temp_before_image, $uploadsPath . $before_image);

    $after_image = $_FILES['after_image']['name'];
    $temp_after_image = $_FILES['after_image']['tmp_name'];
    move_uploaded_file($temp_after_image, $uploadsPath . $after_image);
    
    
    $image = $_FILES['image']['name'];
    $temp_image = $_FILES['image']['tmp_name'];
   
    move_uploaded_file($temp_image, $uploadsPath . $image);

    $sql = "INSERT INTO user_reviews (name, email, image, command, ratings, before_image, after_image) VALUES ('$name', '$email', '$image', '$command', '$ratings', '$before_image', '$after_image')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Your review has been successfully submitted.',
                });
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>
<?php
include("db.php");
$selectQuery = "SELECT name, command, image, ratings,before_image,after_image FROM user_reviews";
$result = $conn->query($selectQuery);
if ($result === false) {
    echo "Error retrieving data: " . $conn->error;
} else {
    if ($result->num_rows > 0) {
        echo '<div class="reviews shadow">';
        while ($row = $result->fetch_assoc()) {
            echo '<div class="review-card">';
            echo '<h3 class="review-name">' . $row["name"] . '</h3>';
            echo '<img src="./uploads/' . basename($row["image"]) . '" alt="User Image">';
            echo '<h3 class="review-name">Before</h3>';
            echo '<img src="./uploads/' . basename($row["before_image"]) . '" alt="User Image">';
            echo '<h3 class="review-name">After using Ayureda</h3>';
            echo '<img src="./uploads/' . basename($row["after_image"]) . '" alt="User Image">';
            echo '<p class="review-command">' . $row["command"] . '</p>';
            echo '<div class="star-ratings">';
            for ($i = 0; $i < $row["ratings"]; $i++) {
                echo '<span class="star">&#9733;</span>'; 
            }
            echo '</div>';
            echo '</div>'; 
        } 
        echo '</div>'; 
    } else {
        echo "No reviews found.";
    }
}
?>


    <script>      
document.addEventListener('DOMContentLoaded', function () {
    let stars = document.querySelectorAll('.rating input');
    stars.forEach(function (star) {
        star.addEventListener('change', function () {
            removeClassFromStars('rated');
            let current = this;
            while (current) {
                current.classList.add('rated');
                current = current.previousElementSibling;
            }
        });
    });

    function removeClassFromStars(className) {
        stars.forEach(function (star) {
            star.classList.remove(className);
        });
    }
});

    </script>
</body>
<?php
include("footer.php");
?>
</html>
