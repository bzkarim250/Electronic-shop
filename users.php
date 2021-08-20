<?php
include 'connection.php';

?>
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
<?php 
        $page = isset($_GET['page']) ?$_GET['page'] : "home";
        include $page.'.php';
        ?>