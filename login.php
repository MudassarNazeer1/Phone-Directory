<?php
session_start();
error_reporting(0);
require_once ('connect.php');
if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	if ($email=='' && $pass=='') {
		echo "<font color='white'> Please enter username and password </font>";
	}
	else{
	$sql = "SELECT * FROM `customer` WHERE `email`= '".$email."' AND `password`= '".$pass."'";
	$result = mysqli_query($connect, $sql);
	if (mysqli_num_rows($result)>0) {
		$_SESSION['uname'] = $email;
		header('location: contactlist.php');
	}
	else{
		echo "<font color='white'> Please enter valid email and password! </font>";
	}
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Login </title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="loginbox">
			<img src="logpic.jpg" class="logpic">
			<h1> Login Here </h1>
			<form method="post" action="login.php">
				<p> Username or Email: </p>
				<input type="text" name="email" placeholder="Enter Username or Email">
				<p> Password: </p>
				<input type="password" name="pass" placeholder="Enter Password">
				<input type="submit" value="Login" name="login">
				<b> Don't have an account yet, </b><a href="register.php"> Sign Up </a>
			</form>
		</div>
	</body>
</html>