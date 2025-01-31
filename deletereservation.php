<?php
include("db.php");
if(isset($_GET['id'])){
    $delete=$_GET['id'];
    echo$delete;
    $sql="delete from reservation where id=$delete";
    echo$sql;
    $result=mysqli_query($conn,$sql);
    if ($result)
    {
        header("Location:staff.php");
    }
    else{
        echo"Error: ".$sql."<br>".mysqli_error($conn);
    }

}

?>