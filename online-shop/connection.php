<?php 
// Create connection
$conn =mysqli_connect('localhost', 'admin','admin','electronics');
//check connection
if(!$conn)
{
    echo 'connection error:'.mysqli_connect_error();
}
?>