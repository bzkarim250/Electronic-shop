
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                  <ul class="nav flex-column dash-nav" style="border-radius:12px">
                  <li class="nav-item"><a href="home.php" class="nav-link"> <i class="fa fa-home"></i>User Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link active"> <i class="fa fa-user"></i>Registered Users</a></li>
                    <li class="nav-item"><a href="additems.php" class="nav-link"> <i class="fa fa-upload" > </i>Add Items</a></li>
                    <li class="nav-item"><a href="stock.php" class="nav-link"> <i class="fa fa-database" > </i>Stock</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-check"></i> Sales</a></li>
                    <li class="nav-item"><a href="#"class="nav-link "> <i class="fa fa-comment"></i> Messages</a></li>
                    <li class="nav-item ml-3"><button type="button" href="logout.php"><a href="logout.php" >Logout</a></button></li>
                  </ul>
                </div>
              </nav>
            <!-- nav end -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content pb-4"style="background-color: #f6f5fa">
              <h2 class=" font-weight-bold mt-4" style="font-size: 18">
                Registered Users
              </h2>
              <div class="container-fluid mt-5">
                <div class="mt-5">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                          <th scope="col">User ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Sex</th>
                            <th scope="col">Age</th>
                            <th scope="col">Registered At</th>
                            <th scope="col" colspan="3">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach($dsply as $dsply): ?>
                            <tr>
                              <td><?php echo htmlspecialchars($dsply['id']); ?> </td>
                              <td><?php echo htmlspecialchars($dsply['fname']); ?> </td>
                              <td><?php echo htmlspecialchars($dsply['lname']); ?> </td>
                              <td><?php echo htmlspecialchars($dsply['email']); ?> </td>
                              <td><?php echo htmlspecialchars($dsply['sex']); ?> </td>
                              <td><?php echo htmlspecialchars($dsply['age']); ?> </td>
                              <td><?php echo htmlspecialchars($dsply['created_at']); ?> </td>
                              <td><a href="view.php?id=<?php echo $dsply['id']; ?>">View</a></td>
                              <td><a href="registered.php?id=<?php echo $dsply['id']; ?>">Update</a></td>
                              <td><a href="deleteuser.php?id=<?php echo $dsply['id']; ?>">Delete</a></td>
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