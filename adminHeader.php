<?php
   session_start();
   @include'config.php';

?>
       
 <!-- nav -->
 <nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color:rgb(86, 15, 15);">
    
    <a class="navbar-brand ml-5" href="index1.php">
        <img src="./Home image/Logo.png " width="120" height="80" alt="Boss cafe">
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
