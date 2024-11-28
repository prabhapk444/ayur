<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
            color:#272343;
            font-weight:bold;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-right: 20px;
            border-radius: 8px;
        }

        
.newcontainer {
    width: 80%;
    margin: 0 auto;
    padding: 20px; 
}


.step {
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px; 
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); 
}


.step-number {
    font-size: 24px;
    font-weight: bold; 
    color: #333;
}


.step-title {
    font-size: 18px; 
    font-weight: bold; 
    color: #333;
    margin-bottom: 10px; 
}


.step-description {
    font-size: 16px;
    color: #666; 
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
        


        @media screen and (max-width: 992px) {
            .container {
                flex-direction: column;
                align-items: flex-start;
            }
            img {
                margin-right: 0;
                margin-bottom: 20px;
            }
            #carouselExample .carousel-item img {
                height: 200px; 
                width: auto;  
                 margin: 0 auto; 
  }
        }
        .container .row .col p {
    font-family: Arial, sans-serif;
    font-size: 16px;
    font-weight: bold;
    color: #2d334a; 
    text-align: center;
    margin-top: 10px;
  }
      
    </style>
</head>
<body>
    <?php require("header.php")?>
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/bestsellers_1200x.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./images/hair-shampoo_1200x.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./images/hair-oils-banner_1200x.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./images/face-oils_1200x.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <div class="container">
        <img src="./images/homeayu.png" alt=""data-aos="fade-up"
     data-aos-duration="3000">
        <div class="content" data-aos="fade-up">
            <p class="h3">What Are Doshas?</p>
            According to Ayurveda every person is born with a set of characteristics called as their Prakruti.

            Prakruti consists of Tri Dosha (3 Doshas) namely, Vata, Pitta, and Kapha, according to the Tridosha Theory.

            Vata represents the workings of Air and Ether energy, Pitta represents the functions of Fire energy, and Kapha represents the operations of Water and Earth energy. The mechanism of these 5 energies regulate, direct, control, and manage all the functions in one’s body.
        </div>
    </div>


    
    <div class="container" data-aos="fade-up" data-aos-duration="3000">
        <div class="content" data-aos="fade-up">
            <p class="h3">What Are Doshas?</p>
            <p>According to Ayurveda, every person is born with a set of characteristics called their Prakruti. Prakruti consists of Tri Dosha (3 Doshas) namely, Vata, Pitta, and Kapha, according to the Tridosha Theory. Vata represents the workings of Air and Ether energy, Pitta represents the functions of Fire energy, and Kapha represents the operations of Water and Earth energy. The mechanism of these 5 energies regulates, directs, controls, and manages all the functions in one’s body.</p>
        </div>
        <img src="./images/prabal_home-removebg-preview.png" alt="">
    </div>

    <p class="h3 text-center">Vedix’s 3-step Solution To Your Concern</p>
    <div class="newcontainer" data-aos="fade-up">
        <div class="step">
            <div class="step-number">01</div>
            <div class="step-content">
                <div class="step-title">Take The Vedix Dosha Assessment Questionnaire</div>
                <div class="step-description">
                    Answer simple questions about your hair, skin, and wellness to help us assess your Unique Dosha Profile.
                </div>
            </div>
        </div>

       
        <div class="step">
            <div class="step-number">02</div>
            <div class="step-content">
                <div class="step-title">Get An Ayurvedic Doctor-Approved Dosha Analysis</div>
                <div class="step-description">
                    The Vedix certified team of Ayurvedic doctors ensures that the ingredients that go into your custom regimen match your inputs given in the Vedix Dosha Assessment Questionnaire.
                </div>
            </div>
        </div>
        <div class="step">
            <div class="step-number">03</div>
            <div class="step-content">
                <div class="step-title">Order Your Custom Vedix Box</div>
                <div class="step-description">
                    Choose a hair care kit that suits you and book your customized Vedix solution!
                </div>
            </div>
        </div>
    </div>


   <center>
      <h3>Awards & Accolades</h3>
   </center>


   <div class="container"  data-aos="fade-up" data-aos-duration="3000">
  <div class="row">
    <div class="col">
    <img src="./images/brandbest_award.avif" alt="" srcset="">
    <p>Economic Times Award
Best Brand</p>
    </div>
    <div class="col">
    <img src="./images/brandfem_award.avif" alt="" srcset="">
      <p>Femina Power Brand  2022-23</p>
    </div>
    <div class="col">
    <img src="./images/brandgrazia.avif" alt="" srcset="">
    <p>Grazia Award
Most Loved Brand</p>
    </div>
    <div class="col">
    <img src="./images/cosmobeauty.avif" alt="" srcset="">
    <p>Cosmopolitan Award
Best Product</p>
    </div>
    <div class="col">
    <img src="./images/entrepreneur_award.avif" alt="" srcset="">
    <p>Best Ayurvedic Startup
Entrepreneur Award</p>
    </div>
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
