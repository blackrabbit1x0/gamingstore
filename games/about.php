<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">Home</a> <span> / About</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>We offer an extensive selection of the latest digital games, a user-friendly experience, top-notch security, and hassle-free checkout, ensuring you have a reliable and convenient gaming destination.</p>
         <a href="games.php" class="btn">Our Games</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Choose Games</h3>
         <p>Select your favorite games from our extensive catalog with ease, and discover a world of endless gaming possibilities.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>Checkout</h3>
         <p>Complete your purchase securely and swiftly, ensuring a seamless transition from selection to ownership of your chosen games.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Enjoy the Game</h3>
         <p>Dive into immersive gaming experiences and embark on epic adventures as you make the most of your newly acquired game keys.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">customer's reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/shroud.jpeg" alt="">
            <p>This platform is a game-changer! The selection of games is amazing, and the checkout process is a breeze. I couldn't be happier with my purchases.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Shroud</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pokimane.jpg" alt="">
            <p>I've been using this site for a while now, and it's become my go-to place for game keys. The customer support is fantastic, and the prices are competitive.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Pokimane</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/KAI.jpg" alt="">
            <p>The security here is top-notch, and that's a big deal for me. I trust this site with my personal information and game keys. Highly recommended!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Kai Cenat</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/valk.png" alt="">
            <p>The user interface is so intuitive; finding and buying games is a pleasure. Plus, they often have great discounts on popular titles! Everyone should use it!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Valyrae</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/ishow.webp" alt="">
            <p>This site has made my gaming life so much easier. I can't imagine going back to physical copies now. Thanks for the great service! WOOF WOOF WOOF!!!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ishowspeed</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/vkim.jpg" alt="">
            <p>I had a small issue with a purchase, but their customer support team was quick to resolve it. They really care about their customers' satisfaction.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Vkimm</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>