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
   
<?php include 'components/user_header.php'; ?>

<!--partie about debut-->

<section class="about">

   <div class="row">

      <div class="image">
      <video src="images/_import_60c5a80a5be632.41308245.mov" controls>
      </video>
      </div>

      <div class="content">
         <h3>pourquoi nous choisir?</h3>
         <p>Chez HIK, nous croyons que la pâtisserie est un art et une science. Nous nous efforçons de trouver un équilibre parfait entre les saveurs, les textures et les présentations pour créer des desserts qui ravissent tous les sens.</p>
      </div>

   </div>

</section>

<!--partie about end-->


<!--partie review debut-->

<section class="reviews">
   
   <h1 class="heading">Les Avis Des Clients</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/téléchargement (1).jpg" alt="">
         <p>La glace à la barbe à papa est une expérience gustative unique et amusante. Sa texture légère et crémeuse combinée à sa saveur sucrée rappelle le goût et la texture de la barbe à papa.
                         Cette glace est parfaite pour les personnes qui aiment les saveurs sucrées et les desserts ludiques.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Karim mh</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/téléchargement.jpg" alt="">
         <p>La glace au miel de Provence est une expérience gustative délicieusement douce et florale.Le miel de Provence est renommé pour sa saveur unique et subtile, 
                        et il ajoute une touche exquise à cette glace crémeuse.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mohamed malik</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/images (1).jpg" alt="">
         <p>Les cornes de gazelle sont non seulement délicieuses, mais elles sont également magnifiques,La texture croustillante de la pâte se marie parfaitement avec la douceur de la garniture,
                         créant une explosion de saveurs en bouche.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>The traveller</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/gettyimages-605380757-612x612.jpg" alt="">
         <p>le chocolate oreo cake!! un gâteau moelleux et fondant qui est incroyablement savoureux et satisfaisant.Les biscuits Oreo ajoutent une touche croquante à chaque bouchée,
                         tandis que le glaçage crémeux ajoute une douceur subtile.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>salim oum</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/02a174e5cdad012ab1bfc6a5a263ad67.jpg" alt="">
         <p>Les fekkas aux amandes, ces tout petits biscuits , sont une véritable explosion de saveurs en miniature. Leur taille réduite les rend encore plus mignons et irrésistibles.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Salwa kasmi</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/images.jpg" alt="">
         <p>Les briwates aux amandes, laissez-moi vous dire, ce sont des pâtisseries  vraiment délicieuses, vous savez ! Quand vous les dégustez, c'est tout un festin pour les papilles, je vous le dis ! Imaginez une pâte feuilletée légère et croustillante, et à l'intérieur, une généreuse farce aux amandes.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>haytham XD</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<!--partie review end-->







<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>