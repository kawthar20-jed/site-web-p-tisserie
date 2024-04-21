<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

  <!-- home section -->

  <section class="home" id="home">

<div class="swiper home-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background: url('images/acceuil patisserie.jpg') no-repeat;">
            <div class="content">
                <h3>notre sélection de pâtisseries savoureuses</h3>
                <a href="shop.php" class="btn">patisserie</a>
            </div>
        </div>

        <div class="swiper-slide slide" style="background: url(images/acceuil\ gateau\ marocain.jpg) no-repeat;">
            <div class="content">
                <h3>Les délices de la pâtisserie marocaine</h3>
                <a href="shop.php" class="btn">Patisserie Marocaine</a>
            </div>
        </div>

        <div class="swiper-slide slide" style="background: url(images/acceuil\ glaces.jpg) no-repeat;">
            <div class="content">
                <h3>Fraîcheur glacée : Nos délicieuses créations glacées</h3>
                <a href="shop.php" class="btn">Glacier</a>
            </div>
        </div>
        <div class="swiper-slide slide" style="background: url(images/acceuil\ boulangerie.jpg) no-repeat;">
            <div class="content">
                <h3>Boulangerie authentique</h3>
                <a href="shop.php" class="btn">Boulangerie</a>
            </div>
        </div>

    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>


</div>

</section>

<!-- home section -->



<section class="home-products">

   <h1 class="heading">Nouveaux produits</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>MAD</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="Ajouter au panier" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">Aucun produit n\'a encore été ajouté !</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
   centeredSlides:true,
   navigation: {
       nextEl: ".swiper-button-next",
       prevEl: ".swiper-button-prev"
   },
   grabCursor:true,
});


 
var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>
 <!-- swiper -->
 <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

 <!-- lightgallery -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

 <!-- custom js -->
 <script src="js/script.js"></script>

 <script>
    lightGallery(document.querySelector('.gallery .gallery-container'));
 </script>
</body>
</html>