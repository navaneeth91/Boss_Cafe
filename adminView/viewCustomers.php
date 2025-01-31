<div >
  <h2>All Users</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">id</th>
        <th class="text-center">Username </th>
        <th class="text-center">Email</th>
        <th class="text-center">Password</th>
        <th class="text-center">User_type</th>
        <th class="text-center">Edit</th>
        <th class="text-center">Delete</th>
   
      </tr>
    </thead>
    
    <?php
      @include"config.php";
      $conn = mysqli_connect('localhost','root','','accounts');


      $sql="SELECT * from user_form";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
      
    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row["name"]?></td>
      <td><?php echo $row["email"]?></td>
      <td><?php echo $row["password"]?></td>
      <td><?php echo $row["user_type"]?></td>
      <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a></td>
      <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
      
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>


  