<?php 

	$id ="";
	$pass = "";
	$cpass = "";
	$name = "";
	$type = "";

	if (isset($_POST['submit'])) {
			$id = $_POST['id'];
			$pass = $_POST['pass'];
			$cpass = $_POST['cpass'];
			$name = $_POST['name'];
			$type = $_POST['type'];

		if ($id == "" || $pass == "" || $cpass = "" || $name = "" || empty($_POST['type'])) {
		 	echo "Fill the all value";
		 }
		//elseif ($pass != $cpass) {
		 	//header('location: reg.php');
		// }
		else{
			$myfile = fopen('User.txt', 'a');
			fwrite($myfile, $id."|".$pass."|".$type."|");
			fclose($myfile);
 
		 } 


	}



 ?>







<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend><h3>REGISTRATION</h3></legend>
			<pre>Id</pre>
			<input type="text" name="id">
			<pre>Password</pre>
			<input type="Password" name="pass">
			<pre>Confirm Password</pre>
			<input type="Password" name="cpass">
			<pre>Name</pre>
			<input type="text" name="name">
			<pre>User Type</pre><hr>
			<input type="radio" name="type" value="User">User
			<input type="radio" name="type" value="Admin">Admin
			<hr>
			<input type="submit" name="submit" value="Sign Up">
			<a href="login.html"> Sign In </a>
		</fieldset>
	</form>

</body>
</html>