<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $admin = $_POST['admin'];
       
         $insert = mysqli_query($conn,"INSERT INTO adminname
         (admin_name) VALUES ('$admin')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../adminpage.php?admin=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../adminpage.php?admin=success");
         }
     
    }
        
?>