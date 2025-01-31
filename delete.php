<?php
include("config.php");
if(isset($_GET['id'])){
    $delete=$_GET['id'];
    echo$delete;
    $sql="delete from user_form where id=$delete";
    echo$sql;
    $result=mysqli_query($conn,$sql);
    if ($result)
    {
        header("Location:index1.php");
    }
    else{
        echo"Error: ".$sql."<br>".mysqli_error($conn);
    }

}

?>