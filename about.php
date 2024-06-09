<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f7f7f7;
        }
        .newcontainer {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px;
        }
         #h3{
            text-align: center;
            color: #272343;
         }
        .newcontent {
            max-width: 600px; 
            padding: 20px;
            text-align: justify;
            color: #2d334a;
            line-height: 1.6;
        }
        .h3{
           color:#f25f4c;
           font-weight:bold;
        }

        .container {
            background-color: #fef6e4;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 800px;
        }

        .content {
            line-height: 1.6;
            text-align: justify;
            color: #2d334a;
        }

        #h3 {
            text-align: center;
            color: #f25f4c;
            margin-bottom: 20px;
        }
        @media screen and (max-width: 992px) {
            .container {
                flex-direction: column;
                align-items: flex-start;
            }
            .newcontainer {
                flex-direction: column;
                align-items: flex-start;
            }
            img {
              
              width:100%;
            }
        }
    </style>
</head>
<body>
    <?php require("header.php")?><br>

    <div class="container" data-aos="fade-up">
        <p class="h3" id="h3">The Vedix Story</p>
        <div class="content">
            According to Ayurveda, every person is born with a set of characteristics called their Prakruti. Prakruti consists of Tri Dosha (3 Doshas) namely, Vata, Pitta, and Kapha, according to the Tridosha Theory.

            Vata represents the workings of Air and Ether energy, Pitta represents the functions of Fire energy, and Kapha represents the operations of Water and Earth energy. The mechanism of these 5 energies regulates, directs, controls, and manages all the functions in one’s body.
        </div>
    </div>


    
    <div class="newcontainer">
        <img src="./images/greasy-scalp-hydration-kit_480x480-removebg-preview.png" alt=""data-aos="fade-up"
     data-aos-duration="3000">
        <div class="newcontent" data-aos="fade-right">
            <!-- <p class="h3">What Are Doshas?</p> -->
            While every skin and hair type is different and has varied concerns to address, products with generic formulations have not been satisfactory. This motivated the founders to explore Ayurveda, which brings in (dosha-based) and holistic approaches to address various skin and hair issues. Their journey to understand why most products do not work on every consumer and how Ayurveda can cater most effective solutions without side effects led to the inception of Vedix, the first and only Ayurvedic brand in India.
        </div>
    </div>


     
    <div class="newcontainer">
        <div class="newcontent" data-aos="fade-right">
            <p class="h3">Our Values</p>
            Vedix takes pride in offering customised Ayurvedic products that are made of 100% natural ingredients, hand-picked from premium sources. Our products are gluten-free, soy-free, chemical-free, paraben-free, and cruelty-free. The regimens are highly safe with no added artificial colors, fragrances, and preservatives. Vedix products are as pure and fresh as mother nature.
        </div>
        <img src="./images/ayurvedic_ingredients.png" alt=""data-aos="fade-up"
     data-aos-duration="3000">
    </div>


      
    <div class="newcontainer">
        <img src="./images/ayurbodytypes.png" alt=""data-aos="fade-up"
     data-aos-duration="3000">
        <div class="newcontent" data-aos="fade-right">
            <p class="h3">How Vedix Works?</p>
            Vedix determines the unique needs of an individual based on the tridosha concept of Ayurveda. Vedix Ayurvedic questionnaires assess the condition of your hair, skin, and overall health based on your diet, physical and emotional attributes, lifestyle, and other significant factors that affect the Ayurvedic doshas in your body.

It creates personal Ayurvedic profiles of your skin, hair, and health. These profiles indicate your specific dosha imbalances and suggest Ayurvedic regimens with herbal ingredients customised to address your unique concerns. The regimen kits are delivered every month while Vedix team keeps tracking how the regimen is working for customers. This is done so that the products can be optimized regularly as per the evolving needs of your skin, hair, and health.
        </div>
    </div>

    <script>
        AOS.init();
    </script>
</body>
<?php
include("footer.php")
?>
</html>
