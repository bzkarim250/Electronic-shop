<?php
   include("connection.php");
   
   $r = "DELETE FROM users WHERE id =".$_GET['id'];
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
	   echo "Failed ".mysqli_error($conn);
   }else{
	   header('location:registered.php');
   }
       
   
?>