<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faqs</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href= 
"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> 
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
        }

        img {
            max-width: 100%;
            height: auto;
            margin-right: 20px;
            border-radius: 8px;
        }
        .button {
  border-radius: 8px;
  height: 40px;
  border: none;
  background: #ffcc00;
 
  color: #333;

  padding: 15px;
  box-shadow: 0 0.7065919983928324px 0.7065919983928324px -0.625px #00000026,
    0 1.8065619053231785px 1.8065619053231785px -1.25px #00000025,
    0 3.6217592146567767px 3.6217592146567767px -1.875px #00000023,
    0 6.8655999097303715px 6.8655999097303715px -2.5px #00000020,
    0 13.646761411524492px 13.646761411524492px -3.125px #0000001b,
    0 30px 30px -3.75px #0000000d;
  font-weight: bold;
  font-family: Montserrat;
  cursor: pointer;
  display: flex;
  align-items: center;
  transition: 150ms ease-in-out;
}

.button:active {
  scale: 0.95;
  background: #333;

  color: #ffd803;

  box-shadow: rgba(0, 0, 0, 0.26) 0px 0.637473px 1.14745px -1.125px,
    rgba(0, 0, 0, 0.24) 0px 1.93094px 3.4757px -2.25px,
    rgba(0, 0, 0, 0.192) 0px 5.10423px 9.18761px -3.375px,
    rgba(0, 0, 0, 0.03) 0px 16px 28.8px -4.5px;
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
        }
    </style>
</head>
<body>
    <?php
    include("header.php");
    ?>
     <div class="container" data-aos="fade-up" data-aos-duration="3000">
        <div class="content" data-aos="fade-right">
            <p class="h3">FAQ'S</p>
            <p>We understand you may have a lot more questions regarding Vedix, how customisation and root cause-focused Ayurveda works, and how it can benefit you.

That is why we have made things easier for you. Here are a set of questions. Type your related concern in the search box below and see how Vedix can help you.

Once you’re ready to try Vedix, simply click the “Know Your Hair” or “Know Your Skin” button on this page, and start your own Customised Ayurveda journey!.</p>
<button class="button" id="hair">Know Your Hair</button><br><br>    <button class="button" id ="skin">Know Your Skin</button>



        </div>
        <img src="./images/faqbanner.png" alt="">
    </div><br><br>
      

    
<div class="container" data-aos="fade-up" data-aos-duration="3000">
  <div class="row row-cols-auto">
    <div class="col"><button type="button" id="order"  class="btn btn-warning"> How To Order</button></div>
    <div class="col"><button type="button" id="hairproducts" class="btn btn-warning">Hair Products</button></div>
    <div class="col"><button type="button" id="skinproducts" class="btn btn-warning">Skin Products</button></div>
    <div class="col"><button type="button" id="hairconcern" class="btn btn-warning">Hair Concerns</button></div>
    <div class="col"><button type="button" id="vqu"class="btn btn-warning">VPQ</button></div>
    <div class="col"><button type="button" id="planoffers"class="btn btn-warning">Plan Offers</button></div>
    <div class="col"><button type="button" id="return" class="btn btn-warning">Returns</button></div>
    <div class="col"><button type="button"id="aboutvedix" class="btn btn-warning">About Ayurvedix</button></div>
  </div>
</div>


<center><h2>Orders</h2></center>
 <section id="orders">

 <div class="accordion accordion-flush" id="accordionFlushExample" data-aos="fade-up" data-aos-duration="3000">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      Where Can I Buy Vedix Products? Are They Available In Stores?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="text-align:justify;">Ayurevedix is an online only brand available on our official site www.ayurvedix.com & select premium online retailers.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      How To Place An Order?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"style="text-align:justify;">Thank you for choosing Ayurvedix. You can now buy our products by following the below mentioned steps:
<br>
Step 1: Get free Hair/Wellness/Skin analysis by taking the Ayurvedix Questionnaire. <br>

Step 2: Know your elevated doshas. <br>

Step 3: Order your Vedix Customised regimen.  <br>

Step 4: Get your products delivered at your doorstep.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      Is Vedix Available In My City?
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="text-align:justify;">Ayurvedix is available across India and is home delivered for free. If you are unsure of courier delivery to your pincode, you can try placing an order and check the same by entering your pincode on the checkout page.</div>
    </div>
  </div>
</div>
 </section>

     <center><h2>Hair Products</h2></center>
<section id ="hairproducts" data-aos="fade-up" data-aos-duration="3000">
<div class="accordion" id="accordionExa">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOn">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      Are AyurVedix Products Tested On Animals?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="text-align:justify;">
      AyurVedix products are not tested on animals and are animal cruelty-free. They are 100% organic with no sulfates and parabens.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTw">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      Can AyurVedix Treat Other Medical Conditions Like Psoriasis, PCOD And Thyroid?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="text-align:justify">
      AyurVedix Vedix can help curb hair fall due to PCOS/PCOD, psoriasis and thyroid only to some extent. Since these are internal problems, an external application of oils and serums cannot fully solve the issue. We strongly recommend you take medical help too.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThr">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Do AyurVedix Products Have Side Effects?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="text-align:justify;">
      AyurVedix products are Customised based on your hair analysis. Hence, the possibility of having an adverse-effect are rare. Our products use 100% natural ingredients that further reduce the risk of any side-effects. However, some people can be allergic to natural products. If any irritation occurs, please discontinue the usage and get in touch with us.
      </div>
    </div>
  </div>
</div>
</section>
 <center><h2>Skin Products</h2></center>
<section id ="skinproducts" data-aos="fade-up" data-aos-duration="3000">
<div class="accordion" id="skinaccordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="skinheadingones">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      Can Pregnant Women Use AyurVedix?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="text-align:justify;">
      No, we do not recommend the usage of AyurVedix products by pregnant women, nursing mothers and women planning pregnancy. Also, women on contraceptive pills should not use AyurVedix products.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="skinheadingtwos">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      Do AyurVedix Products Have Side Effects?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="text-align:justify">
      AyurVedix  products are customised based on your Dosha analysis. Hence, the possibility of having an adverse-effect is rare. Our products use 100% natural ingredients that further reduce the risk of any side-effects. However, some people can be allergic to natural products. If any irritation occurs, please discontinue usage and get in touch with us.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="skinheadingThrees">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Do Vedix Products Have Side Effects?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body" style="text-align:justify;">
      AyurVedix products are Customised based on your hair analysis. Hence, the possibility of having an adverse-effect are rare. Our products use 100% natural ingredients that further reduce the risk of any side-effects. However, some people can be allergic to natural products. If any irritation occurs, please discontinue the usage and get in touch with us.
      </div>
    </div>
  </div>
</div>
</section>

<center><h2>hairconcern</h2></center>
<section id ="hairconcern" data-aos="fade-up" data-aos-duration="3000">
<div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panels-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
      How Much HairFall Is Normal?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body" style="text-align:justify;">
      According to hair experts around the world, it’s normal to lose anywhere from 50 to 100 strands of hair per day. It also tends to fluctuate according to changes in your lifestyle, diet and other factors.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panels-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
      Can AyurVedix Increase The Volume Of My Hair?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body" style="text-align:justify;">
      AyurVedix aims at nourishing the hair roots and scalp with its high quality ingredients, thereby improving the overall condition of your hair. It also helps in reducing hair damage, hair breakage and helps in making your hair stronger and healthier.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panels-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
      Does It Work On Bald Areas/Alopecia?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body" style="text-align:justify;">
      AyurVedix hair growth regimen has herbs that are known to treat alopecia induced baldness. However, the herbs will only work on the follicles that are still alive on the scalp bed.
      </div>
    </div>
  </div>
</div>
</section>

<center><h2>VPQ</h2></center>
<section id ="vqu" data-aos="fade-up" data-aos-duration="3000">
<div class="accordion" id="vpqaccordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="vpqpanelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
      What Is AyurVedix Questionnaire?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body" style="text-align:justify;">
      The Vedix Dosha Analysis Questionnaire (VDAQ) is a set of questions that asks fundamental questions about your health, lifestyle, preferences and more to map your doshas and their elevated states. Vedix customises the products according to the inputs given.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="vpqpanelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
      How Accurate Is The AyurVedix Questionnaire?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body" style="text-align:justify;">
      The questionnaire has been prepared and verified by certified Ayurvedic doctors that adds to the accuracy of our questionnai
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="vpqpanelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
      Is The AyurVedix Questionnaire Available In Languages Other Than English?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body" style="text-align:justify;">
      The Vedix Dosha Analysis Questionnaire (VDAQ) is only available in English.
      </div>
    </div>
  </div>
</div>
</section>

<center><h2>Plan Offers</h2></center>
<section id ="planoffers" data-aos="fade-up" data-aos-duration="3000">
<div class="accordion accordion-flush" id="accordionFlushExample">
  <!-- <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      What Is The Benefit Of Getting a AyurVedix Tatva Membership
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="text-align:justify;">
     The Vedix Tatva Membership offers you exclusive access to deals and offers along with assured discounts on all your purchases on the site.

    </div>
  </div> -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      What Is The Cost Of AyurVedix Tatva Membership?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="text-align:justify;">The AyurVedix Tatva Membership is worth Rs.699, but you can get it @ FLAT 50% off by paying Rs.399/- only.
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      Can AyurVedix Products Be Purchased Individually?
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="text-align:justify;">As the custom products - oil, shampoo, and serum are interdependent we suggest using all 3 products to gain maximum benefits.

However, if you want to buy single products, you can do so from our official site http://www.ayurvedix.com & select premium online retailers.</div>
    </div>
  </div>
</div>
</section>

<center><h2>Returns</h2></center>
<section id ="return" data-aos="fade-up" data-aos-duration="3000">
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      Can I Cancel My Order Anytime?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="text-align:justify;">Yes, you can. AyurVedix’s 100% Satisfaction Guarantee ensures that you can cancel anytime for a 100% refund. No Questions Asked. Please get in touch with us at support@vedix.com, or on our WhatsApp number +91 40714 34363 (9am-6pm, Mon-Sat)</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      What Is The Guarantee Period?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="text-align:justify;">We at AyurVedix love to help you with healthy hair, skin and wellness. However, if your customised products are not meeting your expectations, we will, within 30 days of receiving your order, give you 100% of your money back. </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      What Is Vedix Fair Use Policy
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="text-align:justify;">We believe in the satisfaction of our users. However, in the interest of fairness, AyurVedix Fair Use Policy applies that except in the case of trial plan, any refund claimed after 30 days will be made available only for remaining plan duration. Products used in the first month will not be refunded in such a case.</div>
    </div>
  </div>
</div>
</section>

<center><h2>About Ayurvedix</h2></center>
<section id ="aboutvedix" data-aos="fade-up" data-aos-duration="3000">
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      How Is Vedix Different From Other Ayurvedix Products In The Market?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="text-align:justify;">Unlike other brands that give generic solutions, AyurVedix offers customised Ayurvedic solutions. We customise the products according to your elevated doshas and specific hair/skin/health concerns.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      How Does Customisation Work In AyurVedix?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="text-align:justify;">Your inputs in the AyurVedix Questionnaire helps us define the elevated states of your doshas. Based on the information provided in the questionnaire, three products are suggested. These products contain herbs that pacify your elevated doshas, helps arrest hair fall, promotes healthy skin and boosts your </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      What Is Customisation?
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body" style="text-align:justify;">You are unique and so should be your wellness regimen. Most of the products you buy often fail to solve your concerns. This is because these products fail to address the root cause of your issues.</div>
    </div>
  </div>
</div>
</section>


    <script>
        AOS.init();
        document.getElementById('hair').addEventListener('click', function() {
       
        window.location.href = 'knowhair.php';
    });

    document.getElementById('skin').addEventListener('click', function() {
       
       window.location.href = 'knowskin.php';
   });

   
   document.getElementById('order').addEventListener('click', function() {
       
       window.location.href = '#orders';
   });

   document.getElementById('hairproducts').addEventListener('click', function() {
       
       window.location.href = '#hairproducts';
   });

   docment.getElementById('skinproducts').addEventListener('click', function(){
      window.location.href = '#skinproducts';
   });

   document.getElementById('hairconcern').addEventListener('click', function() {
       
       window.location.href = '#hairconcern';
   });


   document.getElementById('vpq').addEventListener('click', function() {
       
       window.location.href = '#vqu';
   });

   document.getElementById('planoffers').addEventListener('click', function() {
       
       window.location.href = '#planoffers';
   });

   document.getElementById('return').addEventListener('click', function() {
       
       window.location.href = '#return';
   });

   document.getElementById('aboutvedix').addEventListener('click', function() {
       
       window.location.href = '#aboutvedix';
   });


    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
<?php
    include("footer.php");
    
    ?>
</html>