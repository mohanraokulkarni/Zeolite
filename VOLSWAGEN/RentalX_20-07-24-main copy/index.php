<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Volkswagen</title>
  </head>
  <body>
    <header>
      <nav>
        <div class="nav__header">
          <div class="nav__logo">
            <a href="#">
              <img src="C:/xampp/htdocs/VOLSWAGEN/RentalX_20-07-24-main copy/assets/logo.png" alt="Volkswagen Logo" class="logo"/>Volkswagen</a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#rent">Services</a></li>
          <li><a href="#service">Deals</a></li>
          <li><a href="#reviews">Review</a></li>
          <li><a href="#footer">Contact</a></li>
          <li class="nav__links__btn">
            <a href="file:///Users/harshitavg/Downloads/RentalX_20-07-24-main/signup.html"><button class="btn">Sign Up</button></a>
          </li>
          <li class="nav__links__btn">
            <a href="file:///Users/harshitavg/Downloads/RentalX_20-07-24-main/login.html"><button class="btn">Sign In</button></a>
          </li>
        </ul>
        
      </nav>
      <div class="section__container header__container" id="home">
        <div class="header__image">
          <img src="C:/Users/Pavan Desai/Downloads/VOLSWAGEN/RentalX_20-07-24-main copy/car.gif" alt="header" />
        </div>
        <div class="header__content">
          <h1>Hello User!!</h1>
          <p>
            Predictive Maintainance a new pathway towards savings!!
          </p>
        </div>
      </div>
    </header>

    <section style="padding: 150px;" class="section__container steps__container"  id="rent">
      <p class="section__subheader">Know the benefits</p>
      <h2 class="section__header">Facilities offered</h2>
      <div class="steps__grid">
        <div class="steps__card">
        <a href="service.html">
          <span><i class="ri-service-fill"></i></span>
          <h4><a href="service.html">Service history</a></h4>
          <p>
            Know the history of your last car service
          </p>
        </a>
        </div>
        <div class="steps__card">
        <a href="pickup.html">
          <span><i class="ri-calendar-check-fill"></i></span>
          <h4><a href="pickup.html">Pick-up date</a></h4>
          <p>
            Specify the date and time you wish to choose for the next maintainance service for your car
          </p>
        </a>
        </div>
        <div class="steps__card">
          <span><i class="ri-wallet-3-fill"></i></span>
          <h4>Know your savings</h4>
          <p>
            Know how much you saved by using predictive maintainance
          </p>
        </div>
      </div>
    </section>

    <!-- New Section: Recent Notification -->
    <?php
// Database connection
$mysqli = new mysqli('localhost', 'root', '', 'volkswagen');

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch the most recent notification
$query = "SELECT notification FROM notify ORDER BY notification DESC LIMIT 1"; // Fetch the most recent notification
$result = $mysqli->query($query);

$notification = "No new notifications available."; // Default message
if ($result && $row = $result->fetch_assoc()) {
    $notification = $row['notification']; // Retrieve the notification
}

$mysqli->close();
?>

<h2 style="text-align:center;" class="section__header">Notification</h2>
<p style="text-align:center; margin-bottom: 2rem;" class="section__subheader">Get you all the alert messages here</p>
<section style="background-color: #000000; padding: 120px 20px; text-align: center; font-family: Arial, sans-serif; border: 2px solid #ffffff; border-radius: 80px; max-width: 90%; margin: 0 auto">
  
  <!-- Recent Notification Panel -->
  <div id="recent-notification" style="margin: 20px auto; max-width: 1000px; background-color: #1a1a1a; font-weight:800; font-family: serif; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <p style="color: #ffffff; font-size: 2rem;"><?php echo htmlspecialchars($notification); ?></p>
  </div>

  <button onclick="showPreviousNotifications()" class="btn btn__secondary" style="margin-top: 100px; margin-bottom: .5rem; padding: 16px 32px; font-size: 16px;">Show Previous Notifications</button>
</section>

<script>
  function showPreviousNotifications() {
    // Redirect to previous notifications page or display modal
    window.location.href = '/notifications';
  }
</script>


    <section class="section__container service__container" id="service">
      <div class="service__image">
        <img src="C:/Users/Pavan Desai/Downloads/VOLSWAGEN/RentalX_20-07-24-main copy/carrr1.png" alt="service" />
      </div>
      <div class="service__content">
        <p class="section__subheader">DEALS</p>
        <h2 class="section__header">
          Feel the best experience with our deals
        </h2>
        <ul class="service__list">
          <li>
            <span><i class="ri-price-tag-3-fill"></i></span>
            <div>
              <h4>Deals for every budget</h4>
              <p>
                From economy cars to luxury vehicles, we have something for
                everyone, ensuring you get the best value for your money.
              </p>
            </div>
          </li>
          <li>
            <span><i class="ri-wallet-fill"></i></span>
            <div>
              <h4>Best price guarantee</h4>
              <p>
                We ensure you get competitive rates in the market, so you can
                book with confidence knowing you're getting the best deal.
              </p>
            </div>
          </li>
          <li>
            <span><i class="ri-customer-service-fill"></i></span>
            <div>
              <h4>Support 24/7</h4>
              <p>
                Our dedicated team is available 24/7 to assist you with any
                questions or concerns, ensuring a smooth rental experience.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <section class="section__container experience__container" id="ride">
      <p class="section__subheader">CUSTOMER EXPERIENCE</p>
      <h2 class="section__header">
        We are ensuring the best customer experience
      </h2>
      <div class="experience__content">
        <div class="experience__card">
          <span><i class="ri-price-tag-3-fill"></i></span>
          <h4>Competitive pricing</h4>
        </div>
        <div class="experience__card">
          <span><i class="ri-money-rupee-circle-fill"></i></span>
          <h4>Easier Price On Your Budget</h4>
        </div>
        <div class="experience__card">
          <span><i class="ri-bank-card-fill"></i></span>
          <h4>Most Felxible Payment Plans</h4>
        </div>
        <div class="experience__card">
          <span><i class="ri-award-fill"></i></span>
          <h4>The Best Extended Auto Warranties</h4>
        </div>
        <div class="experience__card">
          <span><i class="ri-customer-service-2-fill"></i></span>
          <h4>Roadside Assistance 24/7</h4>
        </div>
        <div class="experience__card">
          <span><i class="ri-car-fill"></i></span>
          <h4>Your Choice Of Mechanic</h4>
        </div>
        <img src="assets/experience.png" alt="experience" />
      </div>
    </section>
    <section class="section__container reviews__container" id="reviews">
      <p class="section__subheader">CUSTOMER REVIEWS</p>
      <h2 class="section__header">What our customers say</h2>
      <div class="reviews__grid">
        <div class="review__card">
          <p class="review__text">
            "Volkswagen has redefined reliability for me. The predictive maintenance feature saved me both time and money!"
          </p>
          <h4 class="review__author">- Rohan Mehta</h4>
          <span class="review__rating">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-line"></i>
          </span>
        </div>
        <div class="review__card">
          <p class="review__text">
            "I love the flexibility Volkswagen offers. Booking services has never been easier. Highly recommend it!"
          </p>
          <h4 class="review__author">- Anjali Verma</h4>
          <span class="review__rating">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
          </span>
        </div>
        <div class="review__card">
          <p class="review__text">
            "Amazing customer support and fantastic deals. I'm impressed with their attention to detail."
          </p>
          <h4 class="review__author">- Arjun Shetty</h4>
          <span class="review__rating">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-half-line"></i>
            <i class="ri-star-line"></i>
          </span>
        </div>
      </div>
    </section>
    <footer class="footer"id="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="footer__logo">
            <a href="#" class="logo">
              <img src="C:/Users/Pavan Desai/Downloads/VOLSWAGEN/RentalX_20-07-24-main copy/assets/logo.png" alt="Volkswagen Logo" />
              <span><h4>Volkswagen</h4></span>
            </a>
          </div>
          <p>
            Discover the ultimate driving experience with Volkswagen. Stay updated with our latest models, offers, and services. Drive innovation with confidence!
          </p>
          <ul class="footer__socials">
            <li><a href="https://www.facebook.com/volkswagen/"><i class="ri-facebook-fill"></i></a></li>
            <li><a href="https://x.com/volkswagenindia?lang=en"><i class="ri-twitter-fill"></i></a></li>
            <li><a href="https://www.linkedin.com/company/volkswagen-group/"><i class="ri-linkedin-fill"></i></a></li>
            <li><a href="https://www.instagram.com/volkswagen/"><i class="ri-instagram-line"></i></a></li>
            <li><a href="https://www.youtube.com/myvolkswagen"><i class="ri-youtube-fill"></i></a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Explore</h4>
          <ul class="footer__links">
            <li><a href="#home">Home</a></li>
          <li><a href="#rent">Services</a></li>
          <li><a href="#service">Deals</a></li>
          <li><a href="#reviews">Review</a></li>
          <li><a href="#footer">Contact</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Popular Models</h4>
          <ul class="footer__links">
            <li><a href="https://www.volkswagen.co.in/en/models/virtus-sport.html">Volkswagen Virtus</a></li>
            <li><a href="https://www.cardekho.com/carmodels/Volkswagen/Volkswagen_Passat">Volkswagen Passat</a></li>
            <li><a href="https://www.volkswagen.co.in/en/models/taigun-sport.html">Volkswagen Tiguan</a></li>
            <li><a href="https://en.wikipedia.org/wiki/Volkswagen_Golf">Volkswagen Golf</a></li>
            <li><a href="https://en.wikipedia.org/wiki/Volkswagen_Arteon">Volkswagen Arteon</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Contact</h4>
          <ul class="footer__links">
            <li>
              <a href="#">
                <span><i class="ri-phone-fill"></i></span> +49 800 123 4567
              </a>
            </li>
            <li>
              <a href="#">
                <span><i class="ri-map-pin-fill"></i></span> Wolfsburg, Germany
              </a>
            </li>
            <li>
              <a href="#">
                <span><i class="ri-mail-fill"></i></span> support@volkswagen.com
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="section__container footer__bar">
        <h4>Volkswagen</h4>
        <p>Copyright © Team Zepto. All rights reserved.</p>
        <ul class="footer__socials">
          <li>
           <ul class="footer__socials">
          <li>
            <a href="https://www.facebook.com/volkswagen/"><i class="ri-facebook-fill"></i></a>
          </li>
          <li>
            <a href="https://x.com/volkswagenindia?lang=en"><i class="ri-twitter-fill"></i></a>
          </li>
          <li>
            <a href="https://www.volkswagen-group.com/en"><i class="ri-google-fill"></i></a>
          </li>
        </ul>      </div>
    </footer>        
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
  </body>
</html>
