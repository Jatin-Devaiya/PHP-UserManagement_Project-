<?php 

$conn = mysqli_connect("localhost","root","","usermanagement");

$username = $_GET['name'];

$sql = "DELETE FROM usertable WHERE UserName = '$username'";
$result = mysqli_query($conn,$sql);

mysqli_close($conn);

header("location: http://localhost/usermanagement/home.php");





?>