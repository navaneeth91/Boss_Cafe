<?php

@include 'config.php';

session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="shortcut icon" href="./Home image/Logo.png" type="image/x-icon">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Boss cafe  | User </title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style12.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hi, <span>User</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1><br><br><br><br>
      <h6>If you wish to logout proceed with the below button</h6><br>
     
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>