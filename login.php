<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login page</title>
</head>
<body>

<h2>Login here :</h2>

<form action="validation.php" method="POST">
  <label>UserName</label><br>
  <input type="text" name="uname"><br>
  <label>Password</label><br>
  <input type="Password" name="upassword" value=""><br><br>
  <input type="submit" value="Submit" name="submitbtn">
</form> 

<h2>Regster here :</h2>

<form action="registration.php" method="POST">
  <label>UserName</label><br>
  <input type="text" name="uname" ><br>
  <label>Password</label><br>
  <input type="Password"  name="upassword" ><br>
  <label>gender</label><br>
  <input type="text" name="ugender" ><br>
  <label>address</label><br>
  <input type="text" name="uaddress" ><br>
  <label>phone</label><br>
  <input type="text" name="uphone" ><br><br>
  <input type="submit" name="submitbtn" value="Submit">
</form> 

</body>
</html>