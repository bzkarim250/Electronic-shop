<?php
   include("connection.php");
   
   $r = "SELECT * FROM product WHERE product_id =".$_GET['product_id'];
   
   $dx = mysqli_query($conn,$r);
   if($dx){
	  //header(location:stoct.php);
   }
   if($d = mysqli_fetch_array($dx)){
	   ?>
	   <form action="" method="post">
		  <input type="hidden" name ="id" value="<?php echo $d['id'];?>" placeholder="Enter the product name"/>
		  <br/>
         <input type="text" name ="pname" value="<?php echo $d['pname'];?>" placeholder="Enter the product name"/>
		  <br/> 		  
			<input type="number" name ="price" value="<?php echo $d['pprice'];?>" value placeholder="Enter the price"/>
		   <br/> 
			<input type="submit" name ="update" value="Update"/>
			<input type="submit" name ="retrieve" value="Retrieve"/>
		</form> 
	   
	   <?php  
	     if(isset($_POST['update'])){
			 $pname = $_POST['pname'];
			 $price = $_POST['price'];
			 echo $w = "UPDATE product SET pname='$pname', pprice=$price
			 WHERE id=".$_POST['id'];
			 
			 $r = mysqli_query($conn,$w);
			 if(!$r){
				 echo "error ";
			 }else{
				 echo "Updated successfully";
			 }
			 
		 }
   }
?>