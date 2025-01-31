<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="shortcut icon" href="./Home image/123.png" type="image/x-icon">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Signature Cuisine | Admin</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style12.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hi, <span>Admin</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="index1.php" class="btn">Admin</a>
      
   </div>

</div>

</body>
</html>