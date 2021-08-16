<?php
include 'connection.php';

?>




<?php
include 'connection.php';

?>
<?php
$sql='SELECT product_id,serial_no,product_name,brand,category,price,manufacturer,filename FROM  product';

//$sql= mysql_query("SELECT id,fname,lname,email,sex,age,created_at FROM  users", $conn);
//query for result
$result=mysqli_query($conn,$sql);
//query to fetch results
$dsply=mysqli_fetch_all($result,MYSQLI_ASSOC);
//print_r($login);

/* foreach($dsply as $dsply) { //the 1st login is for table name 
    
echo htmlspecialchars($dsply['id']); //login is that varialble used to fetch data 
echo "<br>";
 echo htmlspecialchars($dsply['fname']); 
 echo "<br>";
 echo htmlspecialchars($dsply['lname']); 
 echo "<br>";
 echo htmlspecialchars($dsply['email']); 
 echo "<br>";
 echo htmlspecialchars($dsply['sex']); 
 echo "<br>";
 echo htmlspecialchars($dsply['age']); 
 echo "<br>";
 echo htmlspecialchars($dsply['created_at']);
    
 }  */
?>

<?php include("topnav.php"); ?>
        <div class="grd-container">

        <?php foreach($dsply as $dsply): ?> 
        <div class="grd-item"> <img src="<?php echo htmlspecialchars($dsply['filename'])?>" > <br/>
        <p> <b>Specifications</b><br/>
        <?php echo htmlspecialchars($dsply['product_name'])?> <br>
        <b> Price: <?php echo htmlspecialchars($dsply['price'])?> RWF </b>
        </p>
        <a href="payment.php?id=<?php echo $dsply['product_id']?>" onmouseover="mousover1(this)" onmouseout="mousout1(this)">BUY</a>
        </div>                
     <?php endforeach; ?>
</div>
        </div>
        
</body>
</html>