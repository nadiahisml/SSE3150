<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $user_name= $_POST['user_name'];
        $user_email= $_POST['user_email'];
    

         $insert = mysqli_query($conn,"INSERT INTO user_details
         (user_name, user_email) VALUES ('$user_name','$user_email')");

         
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../adminPage.php?user=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../adminPage.php?user=success");
         }
     
    }
        
?>