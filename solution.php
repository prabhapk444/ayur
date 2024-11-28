<?php
session_start();

$name=$_SESSION['username'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $name = isset($_POST['name']) ? $_POST['name'] : '';
    $bodyFrame = isset($_POST['Body']) ? $_POST['Body'] : '';
    $sweat = isset($_POST['APPETITE']) ? $_POST['APPETITE'] : '';
    $hairVolume = isset($_POST['HAIR VOLUME']) ? $_POST['HAIR VOLUME'] : '';
    $hairType = isset($_POST['HAIR TYPE']) ? $_POST['HAIR TYPE'] : '';
    $skinType = isset($_POST['type']) ? $_POST['type'] : '';
    $hairTexture = isset($_POST['HAIR TEXTURE']) ? $_POST['HAIR TEXTURE'] : '';
    // echo $hairTexture;
    $scalpTexture = isset($_POST['SCALP TEXTURE']) ? $_POST['SCALP TEXTURE'] : '';
//   echo $scalpTexture;
    $dandruff = isset($_POST['DANDRUFF']) ? $_POST['DANDRUFF'] : '';
    $secondaryHairIssue = isset($_POST['SECONDARY HAIR ISSUE']) ? $_POST['SECONDARY HAIR ISSUE'] : '';

    $physicalActivity = isset($_POST['physical']) ? $_POST['physical'] : '';
    $sleepingHabits = isset($_POST['sleeping']) ? $_POST['sleeping'] : '';
    $bowelMovements = isset($_POST['bowel']) ? $_POST['bowel'] : '';
    $socialSkills = isset($_POST['social']) ? $_POST['social'] : '';
    $hairTreatment = isset($_POST['treatment']) ? $_POST['treatment'] : '';

    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solution</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
      h2{
        font-family: 'Roboto', sans-serif;
      }
        *{
            font-family: 'Roboto', sans-serif;
        }
     p{
        text-align:justify;
        color:#272343;
  
         margin:5px;
         line-height: 1.6; 
    font-size: 16px;
    padding: 10px;
     }  
     h3{
        color:#272343;
        font-weight:bold;   
       
     }
     .centered-table {
    margin: 0 auto;
    border: 2px solid red;
    border-collapse: collapse;
}

.centered-table th, .centered-table td {
    border: 1px solid red;
    padding: 8px 12px;
    text-align: justify;
}

.container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px;
            gap:30px;
        }
        @media screen and (max-width: 992px) {
  .container {
    flex-direction: column;
    align-items: flex-start;
  }
  .container .row .col p {
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: bold;
    color: #2d334a; 
    text-align: center;
    margin-top: 10px;
  }
  .price{
    width:100%;
  }
  .hair{
    width:100%;
  }
  .doc{
    width:100%;
  }
  .newcontainer {
                flex-direction: column;
                align-items: flex-start;
            }
            .new{
              width:100%;
            }
            .vedix{
              width:100%;
            }
}

  .product-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.4);
    padding: 20px;
    max-width: 600px;
    margin: 0 auto;
}

.product-image img {
    width: 100%;
    max-width: 300px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.product-title {
    color: #272343;
    font-size: 24px;
    margin-bottom: 10px;
    text-align: center;
}

.product-description {
    color:#272343;
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 20px;
    text-align: justify; 
}

.product-features {
    list-style-type: none;
    padding: 0;
    margin-bottom: 20px;
    text-align: left; 
}

.product-features li {
    color: #272343;
    margin-bottom: 10px;
}

.product-info {
    color:#272343;
    font-size: 14px;
    margin-bottom: 5px;
    text-align: left;
}

.product-how-it-works {
    color: #272343;
    font-size: 18px;
    margin-bottom: 10px;
    text-align: left;
}

.product-steps {
    list-style-type: decimal;
    padding-left: 20px;
    margin-bottom: 20px;
    text-align:left;
}

.product-steps li {
    color: #272343;
    margin-bottom: 5px;
} .reviews {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        gap: 20px;
    }

    .review-card {
        width: 200px; /* Adjust as needed */
        background-color: #f8f8f8;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .review-card img {
        border-radius: 50%; /* Make images round */
        width: 100px; /* Adjust size as needed */
        height: 100px; /* Adjust size as needed */
        margin-bottom: 10px;
    }

    .review-name {
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
.card-text{
    text-align:justify;
    color:#272343;
}
.card{
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.4); 
}
marquee{
    font-size: 24px;
     color: #272343; 
     text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}
h3{
   color: #272343;
}

        .newcontainer {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px;
        }
.new{
  display:block;
  margin:0 auto;
}
.vedix{
  display:block;
  margin:0 auto;
}
.hair{
    display:block;
  margin:0 auto;
}


.unic-heading {
            font-size: 24px;
            color: #272343;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .unic-paragraph {
            font-size: 16px;
            color: #272343;
            line-height: 1.5;
            justify-content:justify;
            margin-bottom: 30px;
        }
        .ayur-heading {
            font-size: 24px;
            color: #272343;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .ayur-paragraph {
            font-size: 16px;
            color: #272343;
            line-height: 1.5;
            margin-bottom: 20px;
        }
        .ayur-paragraph li{
            text-align:left;
        }
        .amount {
            color: #333;
            line-height: 1.6;

        }
        .amount li{
            text-align:left;
        }

        .amount h1 {
            font-size: 24px;
            color:#272343;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .amount p {
            color:#272343;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .hair {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
  }

  .hair p {
    margin-bottom: 15px;
    line-height: 1.5;
  }

  .hair .highlight {
    background-color: #ffc107;
    padding: 5px 10px;
    border-radius: 5px;
    font-weight: bold;
  }
  
    .quns2 {
     border: 2px solid pink; 
    max-width: 80%;  
    padding: 10px; 
    margin-left:150px;
}

.doc {
    max-width: 90%; 
    height: auto;
    display: block; 
}
h4{
    text-align:center;
    color:#272343;
    font-family: 'Roboto', sans-serif;
    font-size:25px;
    font-weight:bold;

}
    </style>
</head>
<body><br>
     <h4>Hii       <?php echo $name?></h4><br>
<div class="quns2">
<img src="./images/ques2 new.png" alt="my" srcset="" class="doc" loading='lazy'>
</div>
<p data-aos="zoom-out-right">This is Dr. Zeel Gandhi, Expert Ayurvedic Formulator at Vedix. Thank you for completing the Vedix Hair Profile Quiz. I’ll be taking you through your Ayurvedic hair analysis.

As per Ayurvedic Tridosha Theory, hair fall is caused due to an elevated state of doshas (internal body mechanisms) in your body. The three doshas are Vata (Air & Ether), Pitta (Fire) and Kapha (Water and Earth).

The simple meaning of dosha is ‘defect’, but in Ayurvedic context, a dosha simply defines the weakness or vulnerability of the particular nature of a person.

In other words, it maps out ‘what’s most likely to go wrong’ with a person, and the treatment that should follow.

Your dosha profile is shown below..</p>

<center>
<h3><?php print $name; ?>         Current  Hair Type</h3> <br>
<table class="centered-table">
    <thead>
        <tr>
            <th>Hairtype</th>
            <th>Hairconcern</th>
            <th>Scalp Type</th>
        </tr>
    </thead>
    <tbody>
       <tr>
        <td>Rough and dry</td>
        <td>Hairfall</td>
        <td>Oily</td>
       </tr>
    </tbody>
</table>


<p>As  Rough and Dry is the issue you would like to tackle first, our Ayurvedic experts recommend a 3 step regimen of Cleanser, Moisturizer & Face Serum to control Acne and help rejuvenate your skin for a healthy and raidant look.</p>


<table class="centered-table">
    <thead>
        <tr>
            <th>Product</th>
            <th>Goal</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Oil</td>
            <td>
                <ul>
                    <li>Pacifies Your Disturbed Doshas With Herbal Extracts</li>
                    <li>Promotes Hair Growth</li>
                    <li>Lubricates Your Hair And Nourishes Your Scalp</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Serum</td>
            <td>
                <ul>
                    <li>Stimulates Your Hair Follicles To Promote Hair Growth</li>
                    <li>Strengthens Hair Roots And Arrests Your Hair Fall</li>
                    <li>Repairs Your Damaged Roots With Herb Extracts</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Shampoo</td>
            <td>
                <ul>
                    <li>Gently Cleanses Your Scalp</li>
                    <li>Removes Dirt, Grime, Pollution And Toxins From Your Scalp</li>
                    <li>Free From SLES And Parabens</li>
                </ul>
            </td>
        </tr>
    </tbody>
</table><br><br>

<?php
    include("db.php");

    $selectQuery = "SELECT product_name, category, price, quantity, availablequantity, description, image, product_id FROM products WHERE category ='hair' ORDER BY RAND() LIMIT 2";
    $result = $conn->query($selectQuery);

    if ($result === false) {
        echo "Error retrieving data: " . $conn->error;
    } else {
        if ($result->num_rows > 0) {
            echo '<div class="row justify-content-center">';
            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-lg-4 col-md-4 col-sm-8 mb-4">';
                echo '<div class="card h-100 shadow">';
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
                echo '<div class="input-group">';
                echo '<span class="input-group-text">Quantity</span>';
                echo '<input type="number" class="form-control" name="quantity" value="1" min="1">';
                echo '</div>';
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

<!-- <center><a class="btn btn-warning" href="hair.php">Buy now</a></center><br><br> -->


<!-- <center><a href="hair.php" class="btn btn-warning">Buy now</a></center><br><br> -->

<center><h3 data-aos="fade-left"> Awarded By The Best & Trusted By 15,00,000 Modern Indians Like You!</h3></center>
<div class="container"  data-aos="fade-up" data-aos-duration="3000">
  <div class="row">
    <div class="col">
    <img src="./images/brandbest_award.avif" alt="" srcset="" loading='lazy'>
    <p class="award">Economic Times Award Best Brand</p>
    </div>
    <div class="col">
    <img src="./images/brandfem_award.avif" alt="" srcset="" loading='lazy'>
      <p class="award">Femina Power Brand  2022-23</p>
    </div>
    <div class="col">
    <img src="./images/brandgrazia.avif" alt="" srcset="" loading='lazy'>
    <p class="award">Grazia Award Most Loved Brand</p>
    </div>
    <div class="col">
    <img src="./images/cosmobeauty.avif" alt="" srcset="" loading='lazy'>
    <p class="award">Cosmopolitan Award Best Product</p>
    </div>
    <div class="col">
    <img src="./images/entrepreneur_award.avif" alt="" srcset="" loading='lazy'>
    <p class="award">Best Ayurvedic Startup Entrepreneur Award</p>
    </div>
  </div>
</div><br><br>


<center>
<h3 data-aos="fade-left">Ayurvedix Is The World’s No.1 Customised Ayurvedic Skin Care With 1.5+ Million Users! </h3>
</center> <br><br>
<?php
include("db.php");
$selectQuery = "SELECT name, command, image, ratings FROM user_reviews";
$result = $conn->query($selectQuery);
if ($result === false) {
    echo "Error retrieving data: " . $conn->error;
} else {
    if ($result->num_rows > 0) {
        echo '<div class="reviews">';
        while ($row = $result->fetch_assoc()) {
            echo '<div class="review-card">';
            echo '<img src="./uploads/' . basename($row["image"]) . '" alt="User Image" loading="lazy">';
            echo '<h3 class="review-name">' . $row["name"] . '</h3>';
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
?><br><br>



<center>
<h3 data-aos="fade-left">Poly Herbalism - The Secret Behind Vedix’s High Efficacy And Guaranteed Results! </h3>
</center><br><br>

<p data-aos="zoom-out-right">Ayurveda believes strongly in the concept of Poly Herbalism. It ensures that your hair issues are dealt with comprehensively, treating their root cause.

Your customised Vedix products are rich in over 40 natural herbs which help provide holistic care to your hair. Be it hair fall, dandruff, split ends, oily hair or anything else, your unique formulations help solve it all!

"Vedix uses a group of herbs as opposed to one single herb so as to create the perfect formulation for your hair with no side effects" says Dr. Sridevi Gaddam, B.A.M.S:</p>

<img src="./images/sridevi.png" alt="my" srcset="" class="doc" loading='lazy'><br>
<center>Dr. Sridevi Gaddam, B.A.M.S:</center><br><br>

<p data-aos="zoom-out-right">
Various herbs are combined in a perfect ratio to meet your specific skin concerns. This combination brings about greater efficacy and gives you benefits which are not accessible from single herb formulations. 

The diverse actions of herbs in a specially designed formula ensures that the primary cause of your skin issues are taken care of and your skin glows healthier everyday!
</p><br><br>

 <center> <h3 data-aos="fade-left">100% Ayurvedic Premium Quality Products With Ingredients Picked & Extracted Exclusively For YOU!<h3></center>
<div class="newcontainer">
        <img src="./images/skin_prod_Steps.webp" alt=""data-aos="fade-up"
     data-aos-duration="3000" class="new" loading='lazy'>
        <div class="newcontent" data-aos="fade-right">
            <p class="text-justify" data-aos="zoom-out-right">When it comes to hair care, there are no compromises. And why should there be any? Afterall, you love your hair and we know it!

We know that you’re extra careful while choosing your hair care and don’t want to damage your hair by using products with low quality ingredients. 

This is why we make sure your hair gets the best treatment that it deserves!

Every single step - from filling up the questionnaire to understanding your hair concerns to getting your Vedix customised box ready for delivery - is taken great care of.

And don’t worry...while we take care of every single step in your hair care journey, we do not leave the ingredients behind.

Our Vedix products are not generic formulations with a group of ingredients which are used by thousands of people. At Vedix, each and every herb is chosen to go into your product after a thorough analysis of your answers in the Vedix questionnaire.

So, when you order your Vedix box, you can be sure that every ingredient present in your oil is picked just for you!


And that’s not all!

Not only is each ingredient handpicked for you, but we also ensure the quality and safety of our ingredients by following this unique 3 step process:</p>
           
        </div>
    </div><br>
    <div class="unic">
        <h2 class="unic-heading text-center">Step 1: Herb Extraction</h2>
        <p class="unic-paragraph" data-aos="zoom-out-right">All the herbs for your Vedix products are handpicked and only the best part of the herb which is full of goodness is used in the products. Parts like the leaves, roots, seeds and sometimes the whole plant are used according to whatever suits the best for your ayurvedic hair profile!</p>

        <h2 class="unic-heading text-center">Step 2: Distillation</h2>
        <p class="unic-paragraph" data-aos="zoom-out-right">Vedix ensures pure, precise and effective hair fall solutions by adopting a unique and modern method of distillation of herbs.This means that only the useful and the nutrient-rich part of the herb is used in the oil. Distilling also makes sure that the final extract is free of toxins like lead & mercury and other hair damaging compounds.</p>

        <h2 class="unic-heading text-center">Step 3: Quality Certification</h2>
        <p class="unic-paragraph" data-aos="zoom-out-right">After the herb is extracted, it doesn’t directly make its way into the products. Each ingredient we use goes through a thorough quality check and certification process. All our products are certified by the Department of AYUSH (Ayurveda, Yoga & Naturopathy, Unani, Siddha and Homoeopathy).

In brief, when you use any Vedix product, you can be sure that it is made with premium quality ingredients picked just for you, has gone through appropriate quality checks and is absolutely safe!</p>
    </div> <br><br>

    <center>
   <h3 data-aos="fade-left"> What Makes Ayurvedix Unique?<h3>
    </center><br><br>

    <div class="vedix-ayur">
        <!-- <h2 class="ayur-heading">Ayurvedix: India’s First Customised Ayurvedic Skincare Brand</h2> -->
        <p class="ayur-paragraph" data-aos="zoom-out-right">Unlike generic anti-hairfall and hair growth formulations, Vedix begins with you.

That’s why our expertly designed Vedix Questionnaire helps pinpoint your problem areas, letting us pick just the right herbs and ingredients for your problem.

By tackling the distressed doshas behind the symptoms of your hair problems, Vedix addresses the root cause of your hair issues.</p>

        <h3 class="ayur-heading">Generic Products vs Vedix Customised Ayurveda</h3>
        <p class="ayur-paragraph" data-aos="zoom-out-right">Skin type differs from person to person and so do the skin concerns. These generic products may not work or sometimes work but also show side effects too. More often than not, these products end up causing more damage than good.</p>

        <h3 class="ayur-heading">What Do Other Brands Do?</h3>
        <ul class="ayur-paragraph" data-aos="zoom-out-right">
            <li>Produce generic and weak formulations, mass produced for millions of people</li>
            <li>Don’t address the root cause of your issue</li>
            <li>Often contain harmful chemical ingredients that can have side effects</li>
        </ul>

        <p class="ayur-paragraph" data-aos="zoom-out-right">At Vedix, we begin by building your current Ayurvedic profile. Your Ayurvedic profile is based on your body characteristics and lifestyle habits. This information is crucial in understanding the imbalance in your body humors, ie, doshas.

Based on your Ayurvedic profile, Vedix customises your hair care products by carefully selecting the right herbal extracts and ingredients that are 100% natural and safe.

Your products thus uniquely work on balancing your distressed doshas, and nourishing your scalp with the essential Ayurvedic nutrients required to strengthen your hair roots and stop hair fall.

Thus, Vedix addresses the root cause behind your unwanted hair problems.

Customisation is what makes Vedix completely unique, powerful and effective for your hair’s unique needs!
        </p>
    </div>

<center><h3 data-aos="fade-left">Make Every Rupee You Invest In Your Skin Care Count With Vedix!</h3></center>

<div class="vedix-content">
        <p class="amount" data-aos="zoom-out-right">We at Vedix understand the disappointment you face when every product that you try in the hope of fixing your hair, fails.</p>
        <p class="amount">Every Indian woman on an average changes her hair products at least 7 times before finding the right one. And sometimes, even after trying out various products, it can be difficult to find something that works in the long run.</p>

        <p class="amount" data-aos="zoom-out-right">Vedix aims to solve this issue by customising the hair care solutions just for your hair. We spent over 2 years perfecting our customised products as well as the Vedix Dosha Analysis Questionnaire. With thousands of inputs received by hundreds of original testers, we ensured the complete accuracy, effectiveness and safety of our product.</p>

        <p class="amount" data-aos="zoom-out-right">In our 7000+ hours of research and testing, we've noticed this truth: Quality Hair Care Is Almost Always Unaffordable</p>

        <p class="amount" data-aos="zoom-out-right">A hair care regimen from any other "luxury" or "big name" Ayurvedic brand:</p>
        <ul class="amount">
            <li>Costs at least Rs.5000/- a month</li>
            <li>Doesn't guarantee any results</li>
            <li>Doesn't address the root cause of skin issues</li>
        </ul>

        <p class="amount" data-aos="zoom-out-right">Vedix differs from these brands as it takes into account your Ayurvedic profile and hair’s needs to create your very own customised hair care regimen!

But that's not all.</p>

        <p class="amount" data-aos="zoom-out-right"><strong>But that's not all.</strong></p>

        <p class="amount" data-aos="zoom-out-right"><strong>Special Introductory Offer - Get Vedix For As Low As Rs. 999/- Per Month!</strong></p>
    </div>  <br><br>

<img src="./images/vedix.webp" alt="" srcset="" class="vedix">

<br><br>

<ul class="amount" data-aos="zoom-out-right">
            <li>100% Ayurvedic Customised For You</li>
            <li>3 Product Skin Care Solution For Radiant Skin</li>
            <li>Formulated By Ayurvedic Experts</li>
            <li>30 Day MoneyBack Guarantee</li>
        </ul>


        <br><br>

        <center><a href="skin.php" class="btn btn-warning">buy now </a></center>
<br><br>

<center><h3 data-aos="fade-left">Enjoy 3X Thicker Hair With The Vedix Happy Hair Offer! [Get Freebies Worth Upto Rs.799!]</h3></center>

<div class="hair">
  <p data-aos="zoom-out-right">To make your Vedix experience even better, we go above and beyond to ensure a positive change in your hair and in your life.</p>

  <p data-aos="zoom-out-right">To enhance your hair revolution journey, we are offering you our best selling Saha Bhringraj Booster Oil worth Rs.299 absolutely FREE!</p>

  <p data-aos="zoom-out-right">Add the booster oil to your Vedix Oil to ensure concentrated action on your scalp & roots for healthier, thicker, and healthier hair growth.</p>

  <p data-aos="zoom-out-right">Vedix Saha Bhringraj Booster Oil For Thicker Hair With 75% Bhringraj & 25% Sesame- The Bhringraj stimulates longer and thicker hair growth and makes roots strong. It is also made with pure sesame extracts that makes hair extra smooth & shiny.</p>

  <img src="./images/hairfreebie_799.webp" alt="Hair Freebie" class="hair" loading='lazy'>

  <p><span class="highlight" data-aos="zoom-out-right">Add booster to oil & shake well to mix.</span> Apply & gently massage scalp and hair, leave it on for 2 hours before washing.</p>

  <p data-aos="zoom-out-right">For long term improvement in your hair, it's necessary to have the right products & to understand the underlying reasons which cause such issues.</p>

  <p data-aos="zoom-out-right">Vedix Prakriti Booklet aims to do exactly that. A must have for anyone who wants to live a healthy lifestyle. This books helps you understand the role of ayurveda in your life and can it help to improve not just your hair but also your overall health</p>

  <p data-aos="zoom-out-right">Get this booklet worth Rs.499 absolutely free with your order!</p>

  <p data-aos="zoom-out-right">(The digital copy of your booklet will be delivered to your inbox right after you place the order.)</p>

  <p data-aos="zoom-out-right">HURRY! Your <span class="highlight">Happy Hair Offer With Vedix</span> Ends Soon!</p>
</div>
<script>
  AOS.init();
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
</body>
</html>



