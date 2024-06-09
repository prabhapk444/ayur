<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Roboto', sans-serif;
        }
        .container {
    display: flex;
    justify-content: center;
    gap:90px;
  
    
}


        body {
            background-color:#fffffe;
            
        }

       h1{
        text-align:center;
       }
    
       
       
@media screen and (max-width: 992px) {
  .container {
    display:flex;
    flex-direction:column;
    margin-left:20px;
    width:80%;
  }
     img{
        width:100%;
          
     }
     .iframe{
        width:200%;
     }
    
}



    </style>
</head>
<body>
<body>
<?php

  require_once("header.php")
?>


     <h1>Contact us</h1>

    <div class="container">
    <img src="./images/contact.gif" alt="can" class="image"> 
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31485.298339750265!2d77.52137434684404!3d9.450982133711843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b06e9d8f59cf28d%3A0x1728f3f83acb8a34!2sAL-SHIFA%20AYUSH%20HOSPITAL%20%26%20Kottakkal%20Arya%20vaidya%20sala%20-Rajapalayam!5e0!3m2!1sen!2sin!4v1710521896236!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</body>
<?php

include("footer.php");
?>
      
       

    <script>
        setInterval(function() {
            document.querySelectorAll('.form').forEach(function(form) {
                form.style.borderColor = getRandomColor();
            });
        }, 2000);

        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        function submitForm(event) {
        event.preventDefault();

       
        var fullname = document.getElementById('username').value;
        var email = document.getElementById('email').value;
        var address = document.getElementById('address').value;

        if (fullname && email && address) {
           
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Thanks for your support!',
            });

           
        } else {
            
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please fill in all fields!',
            });
           
        }
        

    }

    </script>
    <script>
  AOS.init();
</script>

</body>
</html>
