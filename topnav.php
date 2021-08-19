<html>
<head>
    <link rel="stylesheet" href="social.css">
    <link rel="stylesheet" href="gridhome.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="footter.css">
    <script src="https://kit.fontawesome.com/07796c0bdb.js" crossorigin="anonymous"></script>
<title>
</title>
</head>
<body>
    <header>
    <div class="topnav">
    <nav style="font-size: xx-large;">
        <ul class="text-alg" style="background-color: rgb(14, 59, 80);">
            <input type="text" placeholder="Search...">
            <a href="Home.php">Home</a>
            <a  href="product.php">Products</a>
            <a  href="#">Profile</a>
            

            <?php //hiding signup if user is logged in
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION["login"]))
{

?>

<a href="Login.php">Login</a>
                     <?php
                     }
                                          ?>



            
                     
                     <?php //hiding signup if user is logged in
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION["login"]))
{

?>

                     <a href="register.php">Sign_Up</a>
                     <?php
                     }
                                          ?>
                     <a  href="sms.php">Contact US</a>

                     <?php //hiding signup if user is logged in
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION["login"]))
{

?>

                     <a href="logout.php">Logout</a>
                     <?php
                     }
                                          ?>
                
    </ul>
    </nav>
</header>

