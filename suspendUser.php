<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM user_details where user_id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"User Suspended";
    }
    else{
        echo"Not able to suspend";
    }
    
?>