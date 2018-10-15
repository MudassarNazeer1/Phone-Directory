<?php
session_start();
require_once ('connect.php');
error_reporting(0);
	if (isset($_POST['register'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		if ($fname=='' || $lname=='' || $phone=='' || $email=='' || $pass=='') {
			echo "<font color='white'> Please fill all fields </font>";
		}
		else{
		$CreateSql = "INSERT INTO `customer` (fname, lname, phone, email, password) VALUES ('".$fname."','".$lname."','".$phone."','".$email."','".$pass."') ";
		$res = mysqli_query($connect, $CreateSql) or die(mysqli_error($connect));
		if ($res) {
			//echo "You are registred successfully";
			header('location: login.php');
		}else{
			echo "<font color='white'> Data not registered, please try again later </font>";
			}
		}
	
}
?>

<!DOCTYPE html>
<html>
	<head>
	<title> Register </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="registerbox">
			<img src="logpic.jpg" class="logpic">
			<h1> Sign Up </h1>
			<form method="post" action="register.php">
				<!--<p> First Name: </p>-->
				<input type="text" name="fname" placeholder="First Name">
				<!--<p> Last Name: </p>-->
				<input type="text" name="lname" placeholder="Last Name">
				<!--<p> Phone No: </p>-->
				<input type="number" name="phone" placeholder="Phone No">
				<!--<p> Email: </p>-->
				<input type="text" name="email" placeholder="Username or Email">
				<!--<p> Password: </p>-->
				<input type="password" name="pass" placeholder="Password">
				<input type="submit" name="register" value="Register">
				<b> If you have already account, </b> <a href="login.php"> Login </a>
			</form>
		</div>
	</body>
</html>