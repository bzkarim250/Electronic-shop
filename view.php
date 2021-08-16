<?php
   include("connection.php");
   
   $r = "SELECT * FROM users WHERE id =".$_GET['id'];
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
	   echo "Failed";
   }
   else{
       header('location:Registered.php');
   }
   while($d = mysqli_fetch_array($dx)){
	   echo "user id: ".$d["id"]."<br/>";
	   echo "user fname: ".$d["fname"]."<br/>";
	   echo "user lname: ".$d["lname"]."<br/>";
   }
   
?>