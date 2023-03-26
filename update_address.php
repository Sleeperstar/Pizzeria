<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:home.php');
};

if(isset($_POST['submit'])){

   $address = $_POST['district'] .', '. $_POST['street_name'] . ' ' . $_POST['street_number'] . ', Piso ' . $_POST['floor'] . ', Ref. ' . $_POST['reference'];
   $address = filter_var($address, FILTER_SANITIZE_STRING);

   $update_address = $conn->prepare("UPDATE `users` set address = ? WHERE id = ?");
   $update_address->execute([$address, $user_id]);

   $message[] = '¡Dirección guardada!';

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Actualizar dirección</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php' ?>

<section class="form-container">

   <form action="" method="post">
      <h3>Tu dirección</h3>
      <input type="text" class="box" placeholder="Nombre del distrito" required maxlength="50" name="district">
      <input type="text" class="box" placeholder="Nombre de la calle" required maxlength="50" name="street_name">
      <input type="number" class="box" placeholder="Número de calle" required max="99999" min="1" maxlength="5" name="street_number">
      <input type="number" class="box" placeholder="Número de piso" required max="99" min="1" maxlength="2" name="floor">
      <input type="text" class="box" placeholder="Referencia" required maxlength="50" name="reference">
      <input type="submit" value="Guardar dirección" name="submit" class="btn">
   </form>

</section>

<?php include 'components/footer.php' ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
