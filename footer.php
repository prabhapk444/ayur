<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>*{
    font-family: 'Roboto', sans-serif;
  }
    body {
      margin: 0;
     
    }

    footer {
      background-color: #0f0e17;
      color: #ecf0f1;
      padding: 30px 0;
    }

    .footer-container {
      display: flex;
      justify-content: space-between;
      max-width: 1200px;
      margin: 0 auto;
    }

    .footer-column {
      flex: 1;
      padding: 0 15px;
    }

    .footer-column h5 {
      font-size: 1.5em;
      margin-bottom: 15px;
      border-bottom: 2px solid #ecf0f1;
      padding-bottom: 10px;
      color: #3498db;
    }

    .footer-column ul {
      list-style: none;
      padding: 0;
    }

    .footer-column li {
      margin-bottom: 15px;
    }

    .footer-column a {
      text-decoration: none;
      color: #ecf0f1;
      display: flex;
      align-items: center;
      transition: color 0.3s;
    }

    .footer-column a i {
      margin-right: 10px;
      font-size: 1.2em;
    }

    .footer-column a:hover {
      color: #3498db;
    }

    .footer-column:last-child {
      border-right: none;
    }

    .footer-column p {
      margin-bottom: 15px;
    }

    .footer-column address {
      font-style: normal;
      line-height: 1.5;
      margin-bottom: 10px;
    }

    .social-icons {
      display: flex;
      align-items: center;
    }

    .social-icons a {
      margin-right: 15px;
      color: #ecf0f1;
      text-decoration: none;
      font-size: 1.5em;
      transition: color 0.3s;
    }

    .social-icons a:hover {
      color: #3498db;
    }

    .phone-icon {
      margin-right: 10px;
    }

    .copyright {
      margin-top: 30px;
      text-align: center;
      padding: 15px 0;
      font-size: 1.2em;
    }

    .copyright a {
      color: #ecf0f1;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

    .copyright a:hover {
      color: #3498db;
    }

    @media (max-width: 992px) {
      .footer-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .footer-column {
        width: 100%;
        margin-bottom: 30px;
        border-right: none;
      }

      .footer-column:last-child {
        margin-bottom: 0;
      }
    }
  </style>
</head>

<body>

  <footer>
    <div class="footer-container">
      <div class="footer-column">
        <h5>Quick Links</h5>
        <ul>
          <li><a href="https://vedix.com/blogs/articles"><i class="fas fa-book fa-fw fa-sm"></i>Blog</a></li>
          <li><a href="contact.php"><i class="fas fa-user-edit fa-fw fa-sm"></i>Contact us</a></li>
        </ul>
      </div>

      <div class="footer-column">
        <h5>Useful Links</h5>
        <ul>
          <li><a href="price.php"><i class="fas fa-shipping-fast fa-fw fa-sm"></i>Pricing</a></li>
          <li><a href="science.php"><i class="fas fa-backspace fa-fw fa-sm"></i>Science</a></li>
          <li><a href="vedix.php"><i class="far fa-file-alt fa-fw fa-sm"></i>Why Ayurvedic</a></li>
          <li><a href="review.php"><i class="far fa-file-alt fa-fw fa-sm"></i>Reviews</a></li>
          <li><a href="Faqs.php"><i class="far fa-file-alt fa-fw fa-sm"></i>Faqs</a></li>
        </ul>
      </div>

      <div class="footer-column">
        <h5>Social media</h5>
        <div class="social-icons">
          <a href="https://www.facebook.com/vedixofficial"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/vedixofficial?igsh=MXVkc3hzMXZtcDM2ZA=="><i class="fab fa-instagram"></i></a>
          <a href="https://youtube.com/@VedixOfficial?si=5TeeHvmQLej9uhEZ"><i class="fab fa-youtube"></i></a>
          <a href="wp.php"><i class="fab fa-whatsapp"></i></a>

        </div>
      </div>

      <div class="footer-column">
        <h5>Address</h5>
        <p>For assistance in purchasing, checking order status, or joining our newsletter, feel free to contact us at:</p>
        <address>
        #195, PAC Ramasamy Raja Salai, Thoppupatti, Rajapalayam, Tamil Nadu 626117   <br><br>
          <i class="fas fa-phone phone-icon"></i> +91 9798162510 <br>
          <i class="fas fa-phone phone-icon"></i> +91 7623019101 <br>
        </address>
      </div>
    </div>

    <div class="copyright">
      © 2024 Copyright:
      <a href="home.php" style="text-decoration: none;">Ayurvedic</a>
    </div>
  </footer>

</body>

</html>
