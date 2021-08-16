<?php
include 'connection.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <link rel="stylesheet" href="social.css">
    <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="gridhome.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="footter.css">
    <script src="https://kit.fontawesome.com/07796c0bdb.js" crossorigin="anonymous"></script>
    <script src="loop.js" ></script>
    <script src="index.js"></script>
<title>
</title>
</head>
    <link rel="stylesheet" href="dash.css" /> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 class="h">ADMINISTRATOR  DASHBOARD </h1>
<div class=" grd-container">
        <div  class="grd-item1 ddsply" style="position:fixed;">
    <input type="button" name="users" value="USERS" onclick="location.href='user.php'">
    <input type="button" name="order" value="ORDERS">
    <input type="button" name="product" value="STOCK">
    <input type="button" name="sales" value="SALES">
    <input type="button" name="messages" value="MESSAGES">
    <input type="button" name="messages" value="LOG-OUT">
</div>
    <div class="grd-item"  style="padding-left:200px">
       
    <?php
$sql='SELECT id,fname,lname,email,sex,age,created_at FROM  users';

//$sql= mysql_query("SELECT id,fname,lname,email,sex,age,created_at FROM  users", $conn);
//query for result
$result=mysqli_query($conn,$sql);
//query to fetch results
$dsply=mysqli_fetch_all($result,MYSQLI_ASSOC);
//print_r($login);

 foreach($dsply as $dsply) { //the 1st login is for table name 
    
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
    
 } 
?>




</div>
</div>
    
</body>
</html>