<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>

  <!--font awesome cdn link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!--swiper css link-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

  <!--custom css file link-->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">

  <?php @include 'header.php';?>

  <section class="home">
    
   <div class="swiper home-slider">

    <div class="swiper-wrapper">

     <div class="swiper-slide slide" style="background:url(images/home-slide1.jpg) no-repeat">
     <div class="content">
      <h3>plan your wedding</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat corrupti accusantium quisquam vero ipsa? Modi iusto sunt voluptates accusamus fuga.</p>
      <a href="about.php" class="btn">discover more</a>
     </div>

     <div class="swiper-slide slide" style="background:url(images/home-slide2.jpg) no-repeat">
     <div class="content">
      <h3>plan your wedding</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat corrupti accusantium quisquam vero ipsa? Modi iusto sunt voluptates accusamus fuga.</p>
      <a href="about.php" class="btn">discover more</a>
     </div>

     <div class="swiper-slide slide" style="background:url(images/home-slide3.jpg) no-repeat">
     <div class="content">
      <h3>plan your wedding</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat corrupti accusantium quisquam vero ipsa? Modi iusto sunt voluptates accusamus fuga.</p>
      <a href="about.php" class="btn">discover more</a>
     </div>

     </div>

    </div>

    <div class="swiper-pagination"></div>

   </div>
  </section>


  <?php @include 'footer.php';?>

  </div>











<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!--custom js file link-->
  <script src="js/script.js"></script>
</body>
</html>