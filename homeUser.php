<?php 
	
	session_start();

	if (isset($_SESSION['uid'])) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home-User</title>
</head>
<body>
	<center>
		<h1>Welcome</h1><br><br>
		<a href="profile.php">Profile</a><br>
		<a href="changePass.php">Change Password</a><br>
		<a href="logout.php">Logout</a>
	</center>

</body>
</html>



<?php
	}else{
		header('location: login.html');
	}
?>








