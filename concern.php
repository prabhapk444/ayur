<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultancy</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      *{
        font-family: 'Roboto', sans-serif;
      }
  .img {
    text-align: center; 
    margin-bottom: 20px;
  }

  .img img {
    max-width: 100%; 
    height: auto;
    border-radius: 10px; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
  }
</style>

    
</head>
<body>
    <?php
    include("header.php");
    ?><br><br>


<center>
  <h3>Ayurvedic skin and Hair Analysis Test</h3>
</center>
<br><br>

<div class="img">
  <img src="./images/ayurhome.jpg" alt="" srcset="">
</div><br><br>




<div class="container">
  <div class="row">
    <div class="col">
   <center><button type="button" class="btn btn-warning" id="skin">Know Your Skin</button></center> 
    </div>
    <div class="col">
    <center><button type="button" class="btn btn-warning" id="hair">Know Your Hair</button></center>
    </div>
    <div class="col">
     
    </div>
  </div>
</div>
<img src="" alt="" srcset="">
<script>
    document.getElementById('hair').addEventListener('click', function() {
    
       window.location.href = './new/vedix.com/pages/vpq.html';
   });

   document.getElementById('skin').addEventListener('click', function() {
      
      window.location.href = 'knowskin.php';
  });
</script>
<!-- <img src="" alt="" srcset=""> -->
</body><br><br>
<?php
include("footer.php")
?>
</html>