<?php

$conn =mysqli_connect('localhost', 'admin','admin','electronics');
//check connection
if(!$conn)
{
    echo 'connection error:'.mysqli_connect_error();
}
?>

<?php

//insert item data
/*
if(isset($_POST['submit']))
{    
     $product_name = $_POST['product_name'];
     $serial_no=$_POST['serial_no'];
     $brand = $_POST['brand'];
     $category=$_POST['category'];
     $price=$_POST['price'];
     $manufacturer=$_POST['manufactuer']; */

// upload image

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
          
          // $sql="INSERT INTO product(filename) values (\"$name\")";
           //$q3=$conn->query($sql) or trigger_error($conn->error);// error test

          // if($q3)
          // {
              //echo "Success";
          // }
       // }else{
         //  print_r($errors);
        //}
     //}


     $product_name = $_POST['product_name'];
     $serial_no=$_POST['serial_no'];
     $brand = $_POST['brand'];
     $category=$_POST['category'];
     $price=$_POST['price'];
     $manufacturer=$_POST['manufacturer'];



     $sql = "INSERT INTO product (product_name,serial_no,brand,category,price,manufacturer,filename)
     VALUES ('$product_name','$serial_no','$brand','$category','$price','$manufacturer',\"$name\")";
      $q3=$conn->query($sql) or trigger_error($conn->error);
     //$result=mysqli_query($conn,$sql);
     if ($q3) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
      //closing connection
     mysqli_close($conn);

   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="Sidebar.css">
    <link rel="icon" href="../img/icon.png" type="image/png">
</head>
<body style="background-color:white !important">   
    <div class="wrapper" style="background-color: #f6f5fa">
        <div class="container-fluid">
          <div class="row">
            <!-- Nav start -->
            <nav class="col-md-2 d-none d-md-block sidebar">
                <div class="sidebar-sticky">
                  <div class="sidebar-img text-center mt-5">
                    <!--<p><img src="../img/icon.png" alt="Logo" width="150" height="150" /></p> -->
                  </div>
                  <br> <br> <br>
                  <ul class="nav flex-column dash-nav " style="background-color:green;border-radius:12px">
                    <li class="nav-item"><a href="dash1.php" class="nav-link">Dashboard</a></li>
                    <li class="nav-item"><a href="registered.php" class="nav-link">Registered Users</a></li>
                    <li class="nav-item"><a href="#" class="nav-link active">Add Items</a></li>
                    <li class="nav-item"><a href="stock.php" class="nav-link">Stock</a></li>
                    <li class="nav-item"><a href="additem.php" class="nav-link">Sales</a></li>
                    <li class="nav-item"><a href="#"class="nav-link ">Messages</a></li>
                    <li class="nav-item ml-3"><button type="button" href="../index.php" class="p-3 mb-2 bg-primary text-white"><a href="../index.php" class="p-3 mb-2 bg-primary text-white">Logout</a></button></li>
                  </ul>
                </div>
              </nav>
            <!-- nav end -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content pb-4"style="background-color: #f6f5fa">
              <h2 class=" font-weight-bold mt-4" style="font-size: 18">
                Upload New Product To Stock
              </h2>
              <br> <br> <br>
              <form  action="" method="POST" enctype="multipart/form-data">
       <input type="text" name="serial_no" placeholder="Serial Number" >
       <br> <br>
        <input type="text" name="product_name" placeholder="Product Name" >
        <br> <br> <br>
        <select name="category">
            <option>Select Category </option>
            <option>Smart Phone </option>
            <option>Laptop </option>

</select>
<br> <br>
<br>
       <input type="text" name="brand" placeholder="Brand">
       <br> <br>
       <input type="text" name="price" placeholder="Price">
       <br> <br>
       <input type="text" name="manufacturer" placeholder=" Manufacturer">
       <br> <br>




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
            </main>
          </div>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
      <footer>
                        </body>
                        </html>