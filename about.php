<?php

include 'components/connect.php';

session_start();
// Si el usuario tiene una sesión activa, se obtiene su id, de lo contrario, se establece en una cadena vacía
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
   <title>Sobre nosotros</title>

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
   <h3>Sobre nosotros</h3>
   <p><a href="home.php">Inicio</a> <span> / Sobre nosotros</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>¿Por qué elegirnos?</h3>
         <p>Somos una pizzería artesanal que lleva más de 20 años ofreciendo las mejores pizzas de la ciudad. Utilizamos ingredientes frescos y de alta calidad para crear sabores únicos que hacen que nuestros clientes nos elijan una y otra vez. Nuestra misión es ofrecer la mejor experiencia gastronómica italiana en la comodidad de tu casa. </p><p>¡Haz tu pedido ahora y prueba nuestras deliciosas pizzas!
         <a href="menu.php" class="btn">Nuestro Menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">pasos simples</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>elige tu pedido</h3>
         <p>Elige entre nuestra variedad de pizzas, pastas, combos y bebidas. Tenemos el plato adecuado para cualquier paladar exigente.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>entrega rápida</h3>
         <p>Con nuestra entrega rápida y confiable, nunca tendrás que esperar demasiado para satisfacer tus antojos de pizza caliente y fresca.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>disfruta la comida</h3>
         <p>Haz tu pedido hoy y disfruta de una experiencia culinaria italiana en la comodidad de tu casa.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">OPINIONES DE NUESTROS CLIENTES</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>"La pizza de esta pizzería es la mejor que he probado, siempre me deja con ganas de más"</p>
            <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            </div>
            <h3>Santiago Ruiz</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>"Excelente servicio al cliente, siempre están dispuestos a ayudar y hacer que mi experiencia sea mejor"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ana María Vega</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>"La entrega siempre es rápida y la pizza llega caliente y fresca, ¡no puedo pedir más, la atencion es maravillosa!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Diego Flores</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>"Me encanta la variedad de opciones que tienen en el menú, siempre encuentro algo nuevo para probar"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Sofía Díaz</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>"Las porciones son generosas y la relación calidad-precio es excelente, ¡volveré a ordenar aquí sin duda!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Carlos Mendoza</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <p>"El queso y los ingredientes son de alta calidad, se nota que se preocupan por hacer pizzas deliciosas".</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Isabella Torres</h3>
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