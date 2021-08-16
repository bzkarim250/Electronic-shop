<?php
include 'connection.php';

?>
<?php 
//insert
if(isset($_POST['submit']))
{    
     //$email = $_POST['email'];
     $message=$_POST['messages'];

     $sql = "INSERT INTO contact_us (messages)
     VALUES ('$message')";
     if (mysqli_query($conn, $sql)) {
       // echo "Your account has been created successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
      //closing connection
     mysqli_close($conn);
    }


?>
<html>
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
<body style="background-color: white;">
    <div class="topnav">
    <nav style="font-size: xx-large;">
        <ul class="text-alg" style="background-color: rgb(14, 59, 80);">
            <input type="text" placeholder="Search...">
            <a href="Home.php">Home</a>
            <a  href="product.php">Products</a>
            <a  href="#">Profile</a>
            <a href="register.php">Sign_Up</a>
                     <a href="Login.php">Login</a>
                
    </ul>
    </nav>
</div>
<div class="login" style="border-radius: 100px;display: block;">
    <form class="frm" action="sms.php" method="POST">
        <br/> </br>
        Full Names: <input type="text" name="name">
        <br/> </br>
        Message: <textarea name="messages"style="width:240px;height:100px;border-radius:12px" ></textarea>
        <input class="subm" style="height: 12%;width: 15%;" type="submit" name="submit" value="SEND"onclick="msg()"onmouseover="mousover1(this)" onmouseout="mousout1(this)" >
</div>
</form>
</div>

<div class="footer-basic">
    <footer>
        <div class="social "><a href="https://www.instagram.com/abdulkarim_bz/"><i class="icon ion-social-instagram"></i></a>
            <a href="https://www.linkedin.com/in/bazambanza-abdulkarim-a801b1187/"><i class="icon ion-social-linkedin"></i></a>
            <a href="https://twitter.com/bzkarim4"><i class="icon ion-social-twitter"></i></a>
            <a href="https://www.facebook.com/bazambanza.abdulkarimu"><i class="icon ion-social-facebook"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="home.php">Home</a></li>
            <li class="list-inline-item"><a href="product.php">Products</a></li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li class="list-inline-item">Contact:+250780514840</li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">UNIQUE ELC SHOP &copy 2021 </p>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>