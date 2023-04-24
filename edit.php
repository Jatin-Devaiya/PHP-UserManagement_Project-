<h2 align="center">Update here :</h2>

<?php

$conn = mysqli_connect("localhost","root","","usermanagement");

$user_name = $_GET["name"];


$sql = "SELECT * FROM usertable WHERE UserName = '$user_name'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0 ){

while ($row = mysqli_fetch_assoc($result)) {
  


 ?>

<form align="center" action="update.php" method="POST">
  <label>UserName</label><br>
  <input type="text" name="uname" value="<?php echo $row['UserName']; ?>" ><br>
  <label>Password</label><br>
  <input type="Password"  name="upassword" value="<?php echo $row['Password']; ?>" ><br>
  <label>gender</label><br>
  <input type="text" name="ugender" value="<?php echo $row['gender']; ?>" ><br>
  <label>address</label><br>
  <input type="text" name="uaddress" value="<?php echo $row['address']; ?>" ><br>
  <label>phone</label><br>
  <input type="text" name="uphone" value="<?php echo $row['phone']; ?>" ><br><br>
  <input type="submit" name="submit" value="update">
</form> 

<?php 

}

}else{
  echo "record not found";
}

?>