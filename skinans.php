<?php
session_start(); 

$name = $_SESSION['username'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    // $name=$_POST['name'];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $concern = $_POST["concern"];
    $describe = $_POST["describe"];
    $active = $_POST["active"];
    $type = $_POST["type"];
    $skinfeel = $_POST["skinfeel"];
    $dehydrated = $_POST["dehydrated"];
    $sunscreen = $_POST["sunscreen"];
    $physical = $_POST["physical"];
    $sleeping = $_POST["sleeping"];
    $bowel = $_POST["bowel"];
    $social = $_POST["social"];
    $treatment = $_POST["treatment"];
    $body = $_POST["body"];
    $sweat = $_POST["sweat"];
    $appetite = $_POST["appetite"]; 
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
    .hii{
        font-family: 'Times New Roman', Times, serif;
        font-size:20px;
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

.reviews {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.review-card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.4);
    padding: 20px;
}

.review-name {
    font-size: 20px;
    font-weight: bold;
    color: #272343;
    margin-bottom: 10px;
}

.review-command {

    color: #666;
    margin-bottom: 10px;
}

.review-content {
    color: #272343;
    line-height: 1.5;
}
.star {
        color:#ffd803; 
    }
                
    .price {
    display: block; 
    margin: 0 auto; 
    width: 50%; 
    height: 30%; 
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
   font-weight:bold;
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

        .amount h1 {
            font-size: 24px;
            color:#272343;
            font-weight: bold;
            margin-bottom: 10px;
        }
.amount li{
    text-align:left;
}
        .amount p {
            color:#272343;
            font-size: 16px;
            margin-bottom: 20px;
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
<body>
<h4>Hii       <?php echo $name?></h4><br>

<div class="quns2">
<img src="./images/ques new.png" alt="my" srcset="" class="doc">
</div>

<p>This is Dr. Zeel Gandhi, Expert Ayurvedic Formulator at Ayurvedix. Thank you for completing the Vedix Skin Profile Quiz. I’ll be taking you through your Ayurvedic Skin analysis.

As per Ayurvedic Tridosha Theory,

Skin fall is caused due to an elevated state of doshas (internal body mechanisms) in your body. 
The three doshas are Vata (Air & Ether), Pitta (Fire) and Kapha (Water and Earth).

The simple meaning of dosha is ‘defect’, but in Ayurvedic context, a dosha simply defines the weakness or vulnerability of the particular nature of a person.

In other words, 

it maps out ‘what’s most likely to go wrong’ with a person, and the treatment that should follow.

Your dosha profile is shown below.</p>

<center>
<h3><?php print $name; ?> <br><br>Current  Hair Type</h3>
<table class="centered-table" data-aos="fade-up"
     data-aos-duration="2000">
    <thead>
        <tr>
            <th>Skintype</th>
            <th>Skinconcern</th>
        </tr>
    </thead>
    <tbody>
       <tr>
        <td>Thin</td>
        <td>Tan</td>
       </tr>
    </tbody>
</table>

<p>As Thin is the issue you would like to tackle first, our Ayurvedic experts recommend a 3 step regimen of Cleanser, Moisturizer & Face Serum to control Acne and help rejuvenate your skin for a healthy and raidant look.</p>


<table class="centered-table" data-aos="fade-up"
     data-aos-duration="2000">
    <thead>
        <tr>
            <th>Product</th>
            <th>Goal</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Cleanser</td>
            <td>
                <ul>
                    <li>Gently Removes Dirt & Build Up</li>
                    <li>Removes Dead Skin</li>
                    <li>Clears Pores & Excess Oil</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Serum</td>
            <td>
                <ul>
                    <li>Actively Targets Problem Areas</li>
                    <li>Helps Repair Skin Barrier</li>
                    <li>Improves Skin Tone & Texture</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Moisturizer</td>
            <td>
                <ul>
                    <li>Keeps The Skin Hydrated</li>
                    <li>Acts As A Protective Barrier</li>
                    <li>Maintains Ideal Moisture Levels</li>
                </ul>
            </td>
        </tr>
    </tbody>
</table><br><br>

<?php
    include("db.php");

    $selectQuery = "SELECT product_name, category, price, quantity, availablequantity, description, image, product_id FROM products WHERE category ='skin' ORDER BY RAND() LIMIT 2";
    $result = $conn->query($selectQuery);

    if ($result === false) {
        echo "Error retrieving data: " . $conn->error;
    } else {
        if ($result->num_rows > 0) {
            echo '<div class="row justify-content-center">';
            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-lg-4 col-md-4 col-sm-8 mb-4">';
                echo '<div class="card h-100 shadow">';
                echo '<img src="./uploads/' . basename($row["image"]) . '" class="card-img-top" alt="' . $row["product_name"] . '">';
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
<br><br>



<center><h3> Awarded By The Best & Trusted By 15,00,000 Modern Indians Like You!</h3></center>
<div class="container"  data-aos="fade-up" data-aos-duration="3000">
  <div class="row">
    <div class="col">
    <img src="./images/brandbest_award.avif" alt="" srcset="">
    <p class="award">Economic Times Award Best Brand</p>
    </div>
    <div class="col">
    <img src="./images/brandfem_award.avif" alt="" srcset="">
      <p class="award">Femina Power Brand  2022-23</p>
    </div>
    <div class="col">
    <img src="./images/brandgrazia.avif" alt="" srcset="">
    <p class="award">Grazia Award Most Loved Brand</p>
    </div>
    <div class="col">
    <img src="./images/cosmobeauty.avif" alt="" srcset="">
    <p class="award">Cosmopolitan Award Best Product</p>
    </div>
    <div class="col">
    <img src="./images/entrepreneur_award.avif" alt="" srcset="">
    <p class="award">Best Ayurvedic Startup Entrepreneur Award</p>
    </div>
  </div>
</div><br><br>





<center>
<h3>Poly Herbalism - The Secret Behind Vedix’s High Efficacy And Guaranteed Results! </h3>
</center><br><br>

<p data-aos="zoom-in-right">Ayurveda believes strongly in the concept of Poly Herbalism. It ensures that your skin issues are dealt with comprehensively, treating their root cause.

Your customised Vedix skin products are rich in over 20 natural herbs which help provide holistic care to your Skin. Be it acne, pigmentation, wrinkles, tanning or anything else, your unique formulations help solve it all!

"Vedix uses a group of herbs as opposed to one single herb so as to create the perfect formulation for your skin with no side effects" says Dr. Zeel Gandhi.</p>

<img src="./images/zeel.png" alt="my" srcset="" class="doc"><br>
<center>Dr.Zeel Gandhi
B.A.M.S.
Expert Ayurvedic Formulator</center><br><br>

<p data-aos="zoom-in-right">
Various herbs are combined in a perfect ratio to meet your specific skin concerns. This combination brings about greater efficacy and gives you benefits which are not accessible from single herb formulations. 

The diverse actions of herbs in a specially designed formula ensures that the primary cause of your skin issues are taken care of and your skin glows healthier everyday!
</p><br><br>

 <center> <h3>100% Ayurvedic Premium Quality Products With Ingredients Picked & Extracted Exclusively For YOU!<h3></center>
<div class="newcontainer">
        <img src="./images/skin_prod_Steps.webp" alt=""data-aos="fade-up"
     data-aos-duration="3000" class="new">
        <div class="newcontent" data-aos="fade-right">
            <p class="text-justify" data-aos="zoom-in-right">When it comes to skin care, there are no compromises. And why should there be any? After all, you love your skin and we know it!

We know that you’re extra careful while choosing your skin care and don’t want to damage it by using products with low quality ingredients. 

This is why we make sure your Skin gets the best treatment that it deserves!

Every single step - from filling up the questionnaire to understanding your skin concerns to getting your Vedix customised box ready for delivery - is taken great care of.

And don’t worry...while we take care of every single step in your skin care journey, we do not leave the ingredients behind.

Our Vedix products are not generic formulations with a group of ingredients which are used by thousands of people. At Vedix, each and every herb is chosen to go into your product after a thorough analysis of your answers in the Vedix questionnaire.

So, when you order your Vedix box, you can be sure that every ingredient present in your oil is picked just for you!


And that’s not all!

Not only is each ingredient handpicked for you, but we also ensure the quality and safety of our ingredients by following this unique 3 step process:</p>
           
        </div>
    </div><br>
    <div class="unic">
        <h2 class="unic-heading text-center" data-aos="zoom-in-right">Step 1: Herb Extraction</h2>
        <p class="unic-paragraph">All the herbs for your Vedix products are handpicked and only the best part of the herb which is full of goodness is used in the products. Parts like the leaves, roots, seeds and sometimes the whole plant are used according to whatever suits the best for your ayurvedic skin profile!</p>

        <h2 class="unic-heading text-center">Step 2: Distillation</h2>
        <p class="unic-paragraph" data-aos="zoom-in-right">Vedix ensures pure, precise and effective skin care solutions by adopting a unique and modern method of distillation of herbs. This means that only the useful and the nutrient-rich part of the herb is used in the oil. Distilling also makes sure that the final extract is free of toxins like lead & mercury and other skin damaging compounds.</p>

        <h2 class="unic-heading text-center">Step 3: Quality Certification</h2>
        <p class="unic-paragraph" data-aos="zoom-in-right">After the herb is extracted, it doesn’t directly make its way into the products. Each ingredient we use goes through a thorough quality check and certification process. All our products are certified by the Department of AYUSH (Ayurveda, Yoga & Naturopathy, Unani, Siddha and Homoeopathy).In brief, when you use any Vedix product, you can be sure that it is made with premium quality ingredients picked just for you, has gone through appropriate quality checks and is absolutely safe!</p>
    </div> <br><br>

    <center>
   <h3> What Makes Ayurvedix Unique?<h3>
    </center><br><br>

    <div class="vedix-ayur">
        <h2 class="ayur-heading">Ayurvedix: India’s First Customised Ayurvedic Skincare Brand</h2>
        <p class="ayur-paragraph" data-aos="zoom-in-right">Ayurvedix is India’s first customised Ayurvedic skincare brand made from 100% natural ingredients. This is a skincare brand that is made in India celebrating the rich knowledge and heritage of Ayurveda.</p>

        <h3 class="ayur-heading">Generic Products vs Vedix Customised Ayurveda</h3>
        <p class="ayur-paragraph" data-aos="zoom-in-right">Skin type differs from person to person and so do the skin concerns. These generic products may not work or sometimes work but also show side effects too. More often than not, these products end up causing more damage than good.</p>

        <h3 class="ayur-heading">What Do Other Brands Do?</h3>
        <ul class="ayur-paragraph" data-aos="zoom-in-right">
            <li>Produce generic and weak formulations, mass-produced for millions of people</li>
            <li>Don’t address the root cause of your issue</li>
            <li>Often contain harmful chemical ingredients that can have side effects</li>
        </ul>

        <p class="ayur-paragraph" data-aos="zoom-in-right">Ayurvedix products are 100% natural, Ayurvedic, and exclusively customized for every individual skin type based on a thorough understanding of your skin type, texture, and your lifestyle and not just your skin issue. Interestingly, Vedix uses a targeted approach to deal with specific skin concerns and is highly effective in providing long-term results without any chemicals involved.
        Customization is what makes Vedix unique, powerful, and effective for your skin’s unique needs!
        </p>
    </div>

<center><h3>Make Every Rupee You Invest In Your Skin Care Count With Vedix!</h3></center>

<div class="vedix-content">
        <p class="amount" data-aos="zoom-in-right">We at Vedix understand the disappointment you face when every product that you try in the hope of fixing your skin, fails.</p>
        <p class="amount"data-aos="zoom-in-right">Every Indian woman on an average changes her skin products at least 5-7 times before finding the right one. And sometimes, even after trying out various products, it can be difficult to find something that works in the long run.</p>

        <p class="amount">Vedix aims to solve this issue by customising the skin care solutions just for your needs. We spent over 2 years perfecting our customised products as well as the Vedix Dosha Analysis Questionnaire. With thousands of inputs received by hundreds of original testers, we ensured the complete accuracy, effectiveness and safety of our product.</p>

        <p class="amount">In our 7000+ hours of research and testing, we've noticed this truth: Quality Skin Care Is Almost Always Unaffordable</p>

        <p class="amount">A Skin care regimen from any other "luxury" or "big name" Ayurvedic brand:</p>
        <ul class="amount">
            <li>Costs at least Rs.5000/- a month</li>
            <li>Doesn't guarantee any results</li>
            <li>Doesn't address the root cause of skin issues</li>
        </ul>

        <p class="amount">Vedix differs from these brands as it takes into account your Ayurvedic profile and skin’s needs to create your very own customised skin care regimen!</p>

        <p class="amount"><strong>But that's not all.</strong></p>

        <p class="amount"><strong>Special Introductory Offer - Get Vedix For As Low As Rs. 999/- Per Month!</strong></p>
    </div>  <br><br>

<img src="./images/vedix.webp" alt="" srcset="" class="vedix">

<br><br>

<ul class="amount" data-aos="zoom-in-right">
            <li>100% Ayurvedic Customised For You</li>
            <li>3 Product Skin Care Solution For Radiant Skin</li>
            <li>Formulated By Ayurvedic Experts</li>
        </ul>


        <br><br>

        <!-- <center><a href="skin.php" class="btn btn-warning">buy now </a></center> -->
<br><br>
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


