<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM adminname where admin_id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Admin Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>