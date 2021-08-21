<?php
include 'connection.php';

?>
<?php 
//insert
if(isset($_POST['submit']))
{    
     $fname = $_POST['fname'];
     $lname=$_POST['lname'];
     $email = $_POST['email'];
     $passwords=$_POST['password'];
     $password = md5($passwords);
     $sex=$_POST['sex'];
     $age=$_POST['age'];

     $sql = "INSERT INTO users (fname,lname,email,passwords,sex,age)
     VALUES ('$fname','$lname','$email','$password','$sex','$age')";
     if (mysqli_query($conn, $sql)) {
        echo "Your account has been created successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
      //closing connection
     mysqli_close($conn);
    }


?>
<?php include("topnav.php"); ?>
<div class="rgtr frmrgstr submrgstr" style="text-align: center;">
    <form action="register.php" method="POST" >
        First Name:<br/><input type="text" name="fname" onmouseover="mousover(this)" onmouseout="mousout(this)"> <br/><br/>
        Last Name:<br/><input type="text" name="lname" onmouseover="mousover(this)" onmouseout="mousout(this)"> <br/><br/>
        Email:<br/><input type="email" name="email" onmouseover="mousover(this)" onmouseout="mousout(this)"> <br/><br/>
        <select name="sex"> <option>Select Your Gender </option>
            <option>Male</option>
            <option>Female </option>
            <option>Rather Not to Say</option>
        </select>
        <select name="age">
            <option>Select Your Age </option>
            <script language="javascript" type="text/javascript"> 
            
            for(var i=18;i<=65;i++)
            {
                document.write("<option>"+i+"</option>");
            }
            </script>
            </select> <br/> <br/>
       Password:<br/><input type="password" name="password" onmouseover="mousover(this)" onmouseout="mousout(this)"> <br/><br/>
       Confirm Password:<br/><input type="password" name="password" onmouseover="mousover(this)" onmouseout="mousout(this)"> <br/><br/>
        <input style="background-color: green;width:10%;" type="submit" value="Submit" name="submit" onmouseover="mousover1(this)" onmouseout="mousout1(this)">        
         <input style="background-color: green;width:10%;"  type="reset" value="Clear" onmouseover="mousover1(this)" onmouseout="mousout1(this)">
       <a style="padding: 5px;color:rgb(14, 59, 80);text-decoration: none;" href="login.php">I already have an account</a>
    </form><br/><br/><br/>
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
            <li class="list-inline-item">Contact:+250780514840</li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">UNIQUE ELC SHOP  &copy 2021 </p>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>