<?php
   include("connection.php");
   
   $r = "DELETE FROM product WHERE product_id=".$_GET['product_id'];
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
	   echo "Failed ".mysqli_error($conn);
   }else{
	   header('location:stock.php');
   }
       
   
?>