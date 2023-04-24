<?php 



$conn = mysqli_connect("localhost","root","","usermanagement");

$name = $_POST['uname'];
$pass = $_POST['upassword'];


$sql = "SELECT * FROM usertable WHERE UserName = '$name' && password = '$pass' ";
$result = mysqli_query ($conn,$sql);

if (mysqli_num_rows($result) == 1 ) {

	session_start();

	$_SESSION['username'] = $name;

	header("location: http://localhost/usermanagement/home.php");

}else{
	header("location: http://localhost/usermanagement/login.php");
}






?>