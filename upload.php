<?php
include 'connection.php';

?>

<?php
if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $tmp=explode('.',$_FILES['image']['name']);
      $file_ext = end($tmp);
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         $name="images/".$file_name;
        
         $sql="INSERT INTO image(filename) values (\"$name\")";
         $q3=$conn->query($sql) or trigger_error($conn->error);// error test
         if($q3)
         {
            echo "Success";
         }
      }else{
         print_r($errors);
      }
   }
?>
<html>
<head>
    <link rel="stylesheet" href="upload.css" />
    <link rel="stylesheet" href="social.css">
    <link rel="stylesheet" href="gridhome.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
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
            <a href="register.php">Sign_Up</a>
          <a href="Login.php">Login</a>
                     
                
    </ul>
    </nav>
</header>

<div id="content">
        <form  action="" method="POST" enctype="multipart/form-data">
       <input type="text" name="serial_n" placeholder="Serial Number" >
        <input type="text" name="serial_n" placeholder="Product Name" >
       <input type="text" name="serial_n" placeholder="Brand">
       <input type="text" name="serial_n" placeholder="Price">
       <input type="text" name="serial_n" placeholder=" Manufacturer">




            <input type="file" 
                   name="image" 
                   value="" />
  
            <div>
                <button type="submit"
                        name="upload">
                  UPLOAD
                </button>
            </div>
        </form>
</div>



<div class="footer-basic">
    <footer>
        <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-linkedin"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="home.php">Home</a></li>
            <li class="list-inline-item"><a href="product.php">Products</a></li>
            <li class="list-inline-item">Contact:+250780514840</li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">UNIQUE ELC SHOP  &copy Elc 2021</p>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>