<?php 

$conn = mysqli_connect("localhost","root","","usermanagement");

$name = $_POST['uname'];
$pass = $_POST['upassword'];
$gender = $_POST['ugender'];
$address = $_POST['uaddress'];
$phone = $_POST['uphone'];

$sql = "UPDATE usertable SET UserName = '$name', Password = '$pass', gender = '$gender', address = '$address', phone = '$phone' WHERE UserName = '$name' ";
$result = mysqli_query($conn,$sql);


header("location: http://localhost/usermanagement/home.php");

mysqli_close($conn);
?>