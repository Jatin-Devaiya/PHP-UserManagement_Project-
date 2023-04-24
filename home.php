<?php 
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
</head>
<body>

<h1  align="right">Welcome <?php echo $_SESSION['username']; ?> </h1>

<h2 align="right"><a href="logout.php"> Logout </a></h2> <br>




 		<h2 align="center">All Records</h2>

 <?php 

 $conn = mysqli_connect("localhost","root","","usermanagement");

 $sql = "SELECT * FROM usertable";
 $result = mysqli_query ($conn,$sql);

 if (mysqli_num_rows($result) > 0 ){



 ?>

<table border="1" width="300px" cellspacing="0" cellpadding="10px" align="center">
<tr>
<th>Name</th>
<th>Password</th>
<th>Gender</th>
<th>Address</th>
<th>Phone</th>
<th>Action </th>
</tr>

<?php
	while ($row = mysqli_fetch_assoc($result)) {
		
 ?>

<tr>
<td><?php echo $row['UserName']; ?></td>
<td><?php echo $row['Password']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['address'] ;?></td>
<td><?php echo $row['phone']; ?></td>
<td>
	<a href="edit.php?name=<?php echo $row['UserName']; ?>">Edit</a>
	<a href="delete.php?name=<?php echo $row['UserName']; ?>">Delete</a>
</td>
</tr>

<?php } ?>

</table>

<?php }else {
	echo "Record not found";
}

mysqli_close($conn);

 ?>

</body>
</html>