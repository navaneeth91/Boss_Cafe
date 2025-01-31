<!Doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" ,initial-scale="1" />
    <link rel="shortcut icon" href="./Home image/123.png" type="image/x-icon">
    <title>Signature Cuisine | Staff</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!--Custom css file-->
    <link rel="stylesheet" href="staff.css">

    <!-- Link Swiper's CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" /> -->
</head>
<nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color:rgb(86, 15, 15);">
    
    <a class="navbar-brand ml-5" href="staff.php">
        <img src="./Home image/456.png " width="120" height="80" alt="Signaturecruisine">
        <img src="./assets/images/logo1.png" width="150" height="80" alt="">
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    
    <div class="user-cart">  
        <?php           
        if(isset($_SESSION['user_id'])){
          ?>
          <a href="" style="text-decoration:none;">
            <a href="logout.php"><i class="fa fa-user mr-5" style="font-size:30px; color:black;" aria-hidden="true"></i></a>
         </a>
          <?php
        } else {
            ?>
            <a href="logout.php" style="text-decoration:none;">
                    <i class="fa fa-sign-in mr-5" style="font-size:30px; color:rgb(232, 194, 194);" aria-hidden="true"></i>
            </a>

            <?php
        } ?>
    </div>  
</nav>



        
            <center><h1> Reservation Details </h1></center>
        
 
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">id</th>
        <th class="text-center">date_time</th>
        <th class="text-center">fullname</th>
        <th class="text-center">phonenumber</th>
        <th class="text-center">people</th>  
        <th class="text-center"></th>
   
      </tr>
    </thead>
    <?php
      @include"config.php";
$conn = mysqli_connect('localhost','root','','restaurant');

      $sql="SELECT * from reservation";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>

    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['date_time']?></td>
      <td><?php echo $row["fullname"]?></td>
      <td><?php echo $row["phonenumber"]?></td>
      <td><?php echo $row["people"]?></td>
     
      
      <div class="delete"><td><a href="deletereservation.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td></div>
      
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>