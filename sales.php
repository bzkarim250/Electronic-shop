<?php
include 'connection.php';

?>
<?php
$sql='SELECT *FROM  orderr';
//$sql= mysql_query("SELECT id,fname,lname,email,sex,age,created_at FROM  users", $conn);
//query for result
$result=mysqli_query($conn,$sql);
//query to fetch results
$dsply=mysqli_fetch_all($result,MYSQLI_ASSOC);
//print_r($login);

 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dasboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="Sidebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- <link rel="icon" href="../img/icon.png" type="image/png"> -->
</head>
<body style="background-color:white !important">   
    <div class="wrapper" style="background-color: #f6f5fa">
        <div class="container-fluid">
          <div class="row">
            <!-- Nav start -->
            <nav class="col-md-2 d-none d-md-block sidebar">
                <div class="sidebar-sticky">
                  <div class="sidebar-img text-center mt-5">
                    <p> <!--<img src="../img/icon.png" alt="Logo" width="150" height="150" /> --></p>
                  </div>
                  <br> <br> <br>
                  <ul class="nav flex-column dash-nav" style="border-radius:12px">
                    <li class="nav-item"><a href="home.php" class="nav-link"> <i class="fa fa-home"></i>User Home</a></li>
                    <li class="nav-item"><a href="registered.php" class="nav-link active"> <i class="fa fa-user"></i>Registered Users</a></li>
                    <li class="nav-item"><a href="additems.php" class="nav-link"> <i class="fa fa-upload" > </i>Add Items</a></li>
                    <li class="nav-item"><a href="stock.php" class="nav-link"> <i class="fa fa-database" > </i>Stock</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-check"></i><b> Sales </b></a></li>
                    <li class="nav-item"><a href="#"class="nav-link "> <i class="fa fa-cog"></i> Settings</a></li>
                    <li class="nav-item"><a href="messages.php"class="nav-link "> <i class="fa fa-comment"></i> Messages</a></li>
                    <li class="nav-item ml-3"><button type="button" href="login.php"><a href="login.php" >Logout</a></button></li>
                  </ul>
                </div>
              </nav>
            <!-- nav end -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content pb-4"style="background-color: #f6f5fa">
            <h2 class=" font-weight-bold mt-4" style="font-size: 18">
               Here are the Orders
              </h2>
              <div class="container-fluid mt-5">
                <div class="mt-5">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                          <th scope="col">Order Number</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Province</th>
                            <th scope="col">District</th>
                            <th scope="col">Sector</th>
                            <th scope="col">Cell</th>
                            <th scope="col">Village</th>
                            <th scope="col">Street</th>
                            <th scope="col">Ordered  At</th>
                            <th scope="col">Delivery Status</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach($dsply as $dsply): ?>
                            <tr>
                              <td><?php echo htmlspecialchars($dsply['order_no']); ?> </td>
                              <td><?php echo htmlspecialchars($dsply['product_name']); ?> </td>
                              <td><?php echo htmlspecialchars($dsply['price']); ?> </td>
                              <td><?php echo htmlspecialchars($dsply['Province']); ?> </td>
                              <td><?php echo htmlspecialchars($dsply['district']); ?> </td>
                              <td><?php echo htmlspecialchars($dsply['sector']); ?> </td>
                              <td><?php echo htmlspecialchars($dsply['cell']); ?> </td>
                              <td><?php echo htmlspecialchars($dsply['village']); ?> </td>
                              <td><?php echo htmlspecialchars($dsply['street']); ?> </td>
                              <td><?php echo htmlspecialchars($dsply['ordered_at']); ?> </td>
                              <td style="color:green">Delivered <i class="fa fa-check"></i></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>
            </main>
          </div>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
      <footer>
</body>
</html>