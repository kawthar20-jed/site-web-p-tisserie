<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<header class="header">

   <section class="flex">

      <a href="../admin/dashboard.php" class="logo">Admin<span>PatisserieHIK</span></a>

      <nav class="navbar">
         <a href="../admin/dashboard.php">Acceuil</a>
         <a href="../admin/products.php">Produits</a>
         <a href="../admin/placed_orders.php">Commandes</a>
         <a href="../admin/admin_accounts.php">Administrateurs</a>
         <a href="../admin/users_accounts.php">Utilisateurs</a>
         <a href="../admin/messages.php">Messages</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `admins` WHERE id = ?");
            $select_profile->execute([$admin_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile['name']; ?></p>
         <a href="../admin/update_profile.php" class="btn">Modifier un profile</a>
         <div class="flex-btn">
            <a href="../admin/register_admin.php" class="option-btn">Créer un compte </a>
            <a href="../admin/admin_login.php" class="option-btn">Se Connecter</a>
         </div>
         <a href="../components/admin_logout.php" class="delete-btn" onclick="return confirm('Voulez vous se deconnecter du site?');">Se deconnecter</a> 
      </div>

   </section>

</header>