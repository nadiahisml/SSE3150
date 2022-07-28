<?php
include './config/dbconnect.php';
$query="SELECT * FROM registerseminar";
$result=mysqli_query($conn,$query);
?>