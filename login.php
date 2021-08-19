<?php
ob_start();
session_start();
include 'connection.php';

?>
<?php

// Create connection
$conn =mysqli_connect('localhost', 'admin','admin','electronics');
//check connection
if(!$conn)
{
    echo 'connection error:'.mysqli_connect_error();
}

//form Validation
$email=$password='';
$errors=array('email'=>'','password'=>'','incorrect'=>'');
if(isset($_POST['submit']))
{
    //check email
    if(empty($_POST['email']))
    {
        $errors['email']='An email is required';
    }
    else{
        $email=$_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format";
          }
    }
      //check password
      $password=$_POST['password'];
      if(empty($_POST['password']))
      {
          $errors['password']='Password is required';
          
      } 
      $passwordss=md5($password);
     $sql="SELECT id FROM users WHERE email='$email' and passwords='$passwordss' ";
     //getting result
     $result=mysqli_query($conn,$sql);
     //fetching results rows in array
     $users=mysqli_fetch_all($result,MYSQLI_ASSOC);
     //checking how many answers
     $count=mysqli_num_rows($result);
     // if results match
     if($count==1){




     // redirecting a user 
      if(array_filter($errors))
      {
          //check errors
      }
        else{
            //no errors
            $_SESSION["login"]="success";
            $_SESSION["id"]=$email;
            if($email=='bzkarim250@gmail.com')
            {
                header('Location:dash1.php');
            }
            else{
              header('Location:home.php');
            }
          }
        }
        else{
           $errors['incorrect']='Email or Password is incorrect';
        }
        
}


?>
<?php include("topnav.php"); ?>
 
<div class="login" style="border-radius: 100px;display: block;">
    <form class="frm" action="login.php" method="POST">
        Email:<br/><input type="text" name="email" value="<?php echo $email; ?>"  onmouseover="mousover(this)" onmouseout="mousout(this)"> <br/><br/>
        <p style="color:red"><?php echo htmlspecialchars($errors['email']); ?> </p>
       Password:<br/><input type="password" name="password" onmouseover="mousover(this)" onmouseout="mousout(this)"> <br/>
       <p style="color:red"><?php echo  htmlspecialchars($errors['password']);  ?> </p>
       <p style="color:red"><?php echo  htmlspecialchars($errors['incorrect']);  ?> </p>
        <input class="subm" style="height: 12%;width: 15%;" type="submit" name="submit" value="Login"onclick="submt()"onmouseover="mousover1(this)" onmouseout="mousout1(this)" >
<div style="border-radius: 100px;"> <p style="color:rgb(14, 59, 80)">Forgot password?</p>
<p style="color:rgb(14, 59, 80)">You don't have an account?</p>
<a style="padding: 5px;color:rgb(14, 59, 80); background-color:green;width: 25%;border-radius: 50px; color:black;text-decoration: none;" href="register.php" onmouseover="mousover1(this)" onmouseout="mousout1(this)">Register</a>
<br/> <br/>
</div>
</form>
</div>
<br> <br> <br> <br> <br>
<?php include("footer.php"); ?>
</body>
</html>