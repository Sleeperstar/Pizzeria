<?php

include '../components/connect.php';

session_start();

// Se obtiene el id del administrador que ha iniciado sesión.
$admin_id = $_SESSION['admin_id'];

// Si no hay un id de administrador, se redirige al administrador a la página de inicio de sesión.
if(!isset($admin_id)){
   header('location:admin_login.php');
}

// Si se ha recibido una solicitud para eliminar un usuario.
if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_users = $conn->prepare("DELETE FROM `users` WHERE id = ?");
   $delete_users->execute([$delete_id]);
   $delete_order = $conn->prepare("DELETE FROM `orders` WHERE user_id = ?");
   $delete_order->execute([$delete_id]);
   $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
   $delete_cart->execute([$delete_id]);
   header('location:users_accounts.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cuentas de usuario</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php' ?>

<!-- user accounts section starts  -->

<section class="accounts">

   <h1 class="heading">Cuentas de usuario</h1>

   <div class="box-container">

   <?php
      $select_account = $conn->prepare("SELECT * FROM `users`");
      $select_account->execute();
      if($select_account->rowCount() > 0){
         while($fetch_accounts = $select_account->fetch(PDO::FETCH_ASSOC)){  
   ?>
   <div class="box">
      <p> ID de usuario: <span><?= $fetch_accounts['id']; ?></span> </p>
      <p> Nombre de usuario: <span><?= $fetch_accounts['name']; ?></span> </p>
      <a href="users_accounts.php?delete=<?= $fetch_accounts['id']; ?>" class="delete-btn" onclick="return confirm('¿Borrar esta cuenta?');">Eliminar</a>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">No hay cuentas disponibles</p>';
   }
   ?>

   </div>

</section>

<!-- user accounts section ends -->







<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>

</body>
</html>