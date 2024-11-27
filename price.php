<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
            *{
              font-family: 'Roboto', sans-serif;
            }
            img {
    display: block; 
    margin: 0 auto; 
    width: 50%; 
    height: 30%; 
}
.card-text{
    text-align:justify;
}
.card{
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.4); 
}
marquee{
    font-size: 24px;
     color: #272343; 
     
}
h3{
   color: #272343;
}
@media (max-width: 992px) {
            
            img{
                width:100%;
            }
        }   </style>
</head>
<body>
    <?php
     include("header.php");
    ?>
     <marquee behavior="scroll" direction="left">Pricing</marquee><br><br>
    <center><h3>Hair Care</h3></center>
    <img src="./images/hairnew.png" alt="image" loading='lazy'>
    <div class="container">
  <div class="row">
    <div class="col">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">3 Step Hair Care Kit</h5>
          <p class="card-text">&#8594; (3 products per box) Rs.999 Includes Customised Oil, Shampoo & Serum = Rs. 999/-</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">4 Step Hair Care Kit</h5>
          <p class="card-text">&#8594; Includes Customised Oil, Shampoo, Serum & Conditioner = Rs. 1399/- Includes No-Frizz Hair Conditioner worth ₹499 at ₹399</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">5 Step Complete Hair Care Kit</h5>
          <p class="card-text">&#8594; Includes Customised Oil, Shampoo, Serum, Conditioner & Hair Pack = Rs. 1499/- 
            <!-- Includes No-Frizz Hair Conditioner & Root Strengthening Hair Pack worth ₹1298 at ₹499</p> -->
        </div>
      </div>
    </div>
  </div>
</div><br><br><br><br>


<center><h3>Skin Care</h3></center>
    <img src="./images/skinnew.png" alt="image" loading='lazy'>
    <div class="container">
  <div class="row">
    <div class="col">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">3 Step Hair Care Kit</h5>
          <p class="card-text">&#8594; (3 products per box) Includes Customised Cleanser, Serum & Moisturizer= Rs. 999/-</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">4 Step Hair Care Kit</h5>
          <p class="card-text">&#8594; Includes Customised Cleanser, Serum, Moisturizer & Face Mask= Rs.1399/-
<!-- Rejat Brightening Clay Mask- Made with Masoor, Peppermint & Kaolin, it is a natural facemask packed with antioxidant properties that help reduce dark patches and brighten skin tone.</p> -->
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">5 Step Complete Hair Care Kit</h5>
          <p class="card-text">&#8594; Includes Customised Cleanser, Serum, Moisturizer, Face Mask & Toner= Rs.1499/-</p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
<?php
 include("footer.php");
?>
</html>