<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuvedic</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body{
             color:#fffffe;
        }
        * {
            font-family: 'Roboto', sans-serif;
        }
        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px;
            gap:30px;
        }
         #h3{
            text-align: center;
            color: #272343;
         }
        .content {
            max-width: 600px; 
            padding: 20px;
            text-align: justify;
            color: #2d334a;
        }
        .h3{
            color:#f25f4c;
            font-weight:bold;
        }
        #h2{ 
            text-align: center;
            color: #272343;
            font-size:1.9em;
        }
        #h4{ 
            text-align: center;
            color: #272343;
            font-size:1.0em;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-right: 20px;
            border-radius: 8px;
        }
        #imge{
            max-width:20%;
            height:20%;
            margin-right: 20px;
            border-radius: 8px;
        }

        @media screen and (max-width: 992px) {
  .container {
    flex-direction: column;
    align-items: flex-start;
  }

  img {
    max-width: 100%;
    height: auto;
  }

  #imge {
    max-width: 100%;
    height: auto;
  }
}


        
     
        
    </style>
</head>
<body>
    <?php
    include("header.php");
    ?>
 <div class="container">
        <div class="content" data-aos="fade-up">
            <p class="h3">Customised Ayurvedic Solutions</p>
            Ayurvedic is India’s 1st customised ayurvedic solution. At Ayurvedic, we strongly believe in taking ayurveda back to its original roots.

The science behind Vedix is backed by Parkruti - a fundamental Ayurvedic concept of balance and harmony used to assess the inherent disposition individuals are born with. Prakruti is shaped by the governing forces of all life, or the Doshas.

In Ayurveda individuals are viewed as microcosms of nature based on how synchronised the individual’s doshas are. The imbalance state of Doshas can lead to a weakened immune system that manifests itself in the form of hair or skin diseases.The main Doshas are Vata Pitta, Kapha and they represent the 5 elements of Nature - Air, Fire, Earth, Water & Ether in various proportions

At Vedix every product begins with a thorough examination of your body and its humors. Ayurvedic Algorithm is built to evaluate your Doshas based on a detailed Ayurvedic questionnaire

So, you can be sure of the fact that every product from Vedix is customised and formulated with the right ingredients to solve your issues!
        </div>
        <img src="./images/whyvedix_banner.png" alt=""data-aos="fade-up"
     data-aos-duration="3000" loading="lazy">
    </div>

    <div class="container">
    <img src="./images/why_unique_d.png" alt=""data-aos="fade-up"
     data-aos-duration="3000" loading="lazy">
        <div class="content" data-aos="fade-up">
            <p class="h3">Every Ayurvedic Product Is As Unique As Your Needs</p>
            If you are one of the millions of people who use generic products that are made for millions of people out there, then there is something you should know before it’s too late. It’s the fact that the products are made for everyone else out there but, not for your unique needs, are doing more bad than good. The benefits you render from generic products seldom last.

The ideal approach is to understand the root cause of an issue and pacify the factors that are elevating the issue. That is exactly what you get at Vedix.

When we analyse your Unique Dosha Profile*, we assess the elevated states of each dosha in your body. Based on this, we combine a set of herbs, which can specifically help address your issues.

It’s simple really, you are unique and Vedix makes customised products that are unique to you.
        </div>
    </div>

       <p id="h2">Formulated By Experts With Over 25 Years Of Experience</p>
       <p id="h4">With a combined Ayurvedic expertise of 20 years, our team of Ayurvedic doctors have spent over 25000 hours into the research and developing Vedix.</p>
         

       <div class="container">
    <img src="./images/sridevi.png" alt=""data-aos="fade-up" data-aos-duration="3000" loading="lazy">
        <div class="content" data-aos="fade-up">
            <p class="h3">Dr. Sridevi Gaddam, B.A.M.S:</p>
            Dr. Sridevi gaddam is an an award-winning ayurvedic practitioner with over 20 years of clinical expertise. She mastered the art of formulations and panchakarma from some of the most respected gurus of ayurveda in kerala. She is the brains behind Vedix, as well as the lead formulator.
        </div>
    </div><br><br>

    <div class="container">
    <img src="./images/zeel.png" alt=""data-aos="fade-up"data-aos-duration="3000" id="imge" loading="lazy">
        <div class="content" data-aos="fade-up">
            <p class="h3">Dr. Zeel Gandhi, B.A.M.S.</p>
            Dr. Gandhi is our in-house expert for internal medicine, Panchakarma therapies, Yoga and Ayurvedic nutrition. Having graduated as a top ranker from Dr. D.Y.Patil College of Ayurveda and Research Centre, Navi Mumbai, she now leads the product formulations at Ayurvedic.
        </div>
    </div>
    <script>
        AOS.init();
    </script>
</body>
<?php
include("footer.php");
?>
</html>