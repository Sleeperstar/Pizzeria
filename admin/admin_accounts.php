<?php

include '../components/connect.php';

session_start();

// Se obtiene el ID del administrador actual de la sesión.
$admin_id = $_SESSION['admin_id'];

// Si no existe el ID del administrador en la sesión, se redirige al usuario a la página de inicio de sesión del administrador.
if(!isset($admin_id)){
   header('location:admin_login.php');
}

// Si se ha recibido un parámetro GET llamado "delete"...
if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   // Se prepara una consulta para eliminar al administrador que tenga el ID recibido como parámetro.
   $delete_admin = $conn->prepare("DELETE FROM `admin` WHERE id = ?");
   
   // Se ejecuta la consulta con el ID del administrador a eliminar.
   $delete_admin->execute([$delete_id]);
   
   // Se redirige al usuario a la página de cuentas de administradores.
   header('location:admin_accounts.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cuentas de administrador</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php' ?>

<!-- admins accounts section starts  -->

<section class="accounts">

   <h1 class="heading">Cuentas de administrador</h1>

   <div class="box-container">

   <div class="box">
      <p>Registrar nuevo administrador</p>
      <a href="register_admin.php" class="option-btn">Registrar</a>
   </div>

   <?php
      $select_account = $conn->prepare("SELECT * FROM `admin`");
      $select_account->execute();
      if($select_account->rowCount() > 0){
         while($fetch_accounts = $select_account->fetch(PDO::FETCH_ASSOC)){  
   ?>
   <div class="box">
      <p> ID admin : <span><?= $fetch_accounts['id']; ?></span> </p>
      <p> Usuario : <span><?= $fetch_accounts['name']; ?></span> </p>
      <div class="flex-btn">
         <a href="admin_accounts.php?delete=<?= $fetch_accounts['id']; ?>" class="delete-btn" onclick="return confirm('¿Eliminar esta cuenta?');">Eliminar</a>
         <?php
            if($fetch_accounts['id'] == $admin_id){
               echo '<a href="update_profile.php" class="option-btn">Actualizar</a>';
            }
         ?>
      </div>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">no hay cuentas disponibles</p>';
   }
   ?>

   </div>

</section>

<!-- admins accounts section ends -->




















<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>

</body>
</html>