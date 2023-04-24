<?php 

//session_start();

$conn = mysqli_connect("localhost","root","","usermanagement");

$name = $_POST['uname'];
$pass = $_POST['upassword'];
$gender = $_POST['ugender'];
$address = $_POST['uaddress'];
$phone = $_POST['uphone'];

$sql = "SELECT * FROM usertable WHERE UserName = '$name' ";
$result = mysqli_query ($conn,$sql);

if (mysqli_num_rows($result) == 1 ) {

	echo "user name alrady taken";

}else{
$reg = "INSERT INTO usertable(UserName,password,gender,address,phone) VALUES ('$name','$pass','$gender','$address','$phone') ";

	mysqli_query ($conn,$reg);
}

header("location: http://localhost/usermanagement/login.php");





?>