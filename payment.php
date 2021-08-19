<?php 
session_start ();
if(!isset($_SESSION["login"]))
	header("location:login.php");


?>
<?php
include 'connection.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="payment.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/07796c0bdb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="gridhome.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="footter.css">
</head>
<body class="head" >
    <div class="topnav" style="position:fixed;">
    <?php include("topnav.php"); ?>
    </div>
<h2 style="margin-top: 120px;">Payment Form</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Customer Details</h3>
            <hr>
            <?php
            $id=$_GET['id'];
           // $name=$_GET['name'];
            $email=$_SESSION["id"];
            $sql="SELECT * FROM users WHERE email=\"$email\"";
            $result=$conn->query($sql)or trigger_error($conn->error);
            while ($row = $result->fetch_assoc()) {
                    $fname=$row['fname'];
                    $lname=$row['lname'];
                    $emails=$row['email'];
              }
            ?>
            <hr> <h5> <i class="fa fa-user"></i><br/> <?php echo $fname." ".$lname;?> </h5> <br> <br>
             <h5> <i class="fa fa-envelope"></i></i><br/> <?php echo $emails;?> </h5> <br> <br>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label> <br> <br>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street"> <br> <br>
            <label for="city"><i class="fa fa-institution"></i> Province</label> <br> <br>
            <input type="text" id="city" name="city" placeholder="South"> <br> <br>

            <div class="row">
              <div class="col-50">
                <label for="district">District</label> <br> <br>
                <input type="text" id="state" name="state" placeholder="Huye"> <br> <br>
              </div>
              <div class="col-50">
                <label for="district">Sector</label> <br> <br>
                <input type="text" id="state" name="state" placeholder="Tumba"> <br> <br>
              </div>

              <div class="col-50">
                <label for="district">Cell</label> <br> <br>
                <input type="text" id="state" name="state" placeholder="Cyarwa"> <br> <br>
              </div>

              <div class="col-50">
                <label for="district">Village</label> <br> <br>
                <input type="text" id="state" name="state" placeholder="Cyarwa"> <br> <br>
            </div>


            </div>
          </div>

          <div class="col-50">
            <h3>Payment Method</h3>
            <!--
            <label for="fname">Accepted Cards</label> <br> <br>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i> <br>
            </div>
            <label for="cname">Name on Card</label> <br> <br>
            <input type="text" id="cname" name="cardname" placeholder="Bazambanza Abdoulkalim"> <br> <br>
            <label for="ccnum">Credit card number</label> <br> <br>
            <input type="text" id="ccnum" name="cardnumber" placeholder="4444-44444-44444"> <br> <br> -->
            <img src="momo.png"style="width:120px"> <b>*182*8*1*009785# </b> <br/>
            <img src="spenn.jpg"style="width:120px;border-radius:80px"> <b>+250780514840 </b>
            <br> <br> <br> <br>
            <h3> Product Details </h3> <br/>
            <?php
             $sql="SELECT * FROM product WHERE product_id=\"$id\"";
             $result=$conn->query($sql)or trigger_error($conn->error);
             while ($row = $result->fetch_assoc()) {
                     $name=$row['product_name'];
                     $price=$row['price'];
                     $image=$row['filename'];
                    //  $emails=$row['email'];
               }
            ?>
            <hr> <h6> <b> PRICE: <?php echo $price?> RWF </b> </h6> <br>
            <h6> <b>Name: <?php echo $name?> </b></h6>

            </div>
            </div>
          </div>
          
        </div>
       
      </form>
      <div class="col-25">
        <div class="container"style="position:fixed;margin-left:0px">
        <img style="width:30%;height:10%" src="<?php echo $image?>" alt="">
        </div>
      </div>
    </div>
    
  </div>
</div>
<?php
//insert 
/*
if(isset($_POST['submit']))
{    
  $sql="SELECT * FROM product WHERE product_id=\"$id\"";
  $result=$conn->query($sql)or trigger_error($conn->error);
  while ($row = $result->fetch_assoc()) {
          $name=$row['product_name'];
          $price=$row['price'];
          $image=$row['filename'];

     $sql = "INSERT INTO orderr (product_id,product_name,price,addres,province,district,sector,cell,village,street)
     VALUES ('$id',$name','$price','$addres','$province','$district','$sector','$cell','$village','$street')";
     if (mysqli_query($conn, $sql)) {
        echo "Your Order hasbeen received  successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
      //closing connection
     mysqli_close($conn);
    }


 */?>
<input type="submit" value="Confirm Your Order" class="btn"> <br/><br/><br/><br/><br/><br/>
<?php include("footer.php"); ?>
</body>
</html>
