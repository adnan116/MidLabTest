<?php 
	
	session_start();

	$x= "";
	$y = "";
	$temp = "";
	if (isset($_POST['submit'])) {
		
		$x= $_POST['uid'];
		$y= $_POST['upass'];

		$myfile = fopen('User.txt', 'r');
		$data = fgets($myfile);
		fclose($myfile);
		$s = explode("|", $data);


		for ($i=0; $i <count($s) ; $i=($i+3)) { 
			if ($x == $s[$i] && $y == $s[$i+1]) {

				//$_SESSION['uid'] = $s[i];
				if ($s[$i+2] == "Admin") {
					//header('location: homeAdmin.php');
					$_SESSION['uid'] = $s[$i];
					$temp = "Admin";
					break;
				}
				elseif ($s[$i+2] == "User") {
					//header('location: homeUser.php');
					$_SESSION['uid'] = $s[$i];
					$temp = "User";
					break;
				}
			}
			else{
				//header('location: login.html');
				$temp = "";
			}
		}

		if ($temp == "Admin") {
			header('location: homeAdmin.php');
		}

		elseif ($temp == "User") {
			header('location: homeUser.php');

		}

		else{
			//header('location: login.html');
		}
	}





 ?>