<?php
session_start();
require_once ('connect.php');
error_reporting(0);
$user_name = $_SESSION['uname'];
	if ($user_name==true) {
		
	}else{
		header('Location:login.php');
	}
	if (isset($_POST['new_contact'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		if ($fname=='' || $lname=='' || $phone=='' || $email=='' || $address=='') {
			echo "<font color='white'> Please fill all fields </font>";
		}
		else{
		$CreateSql = "INSERT INTO `contact_list` (fname, lname, cellphone, email, address) VALUES ('".$fname."','".$lname."','".$phone."','".$email."','".$address."') ";
		$res = mysqli_query($connect, $CreateSql) or die(mysqli_error($connect));
		if ($res) {
			//echo "<font color='white'> Your contact saved successfully </font>";
			header('location: contactlist.php');
		}else{
			echo "<font color='white'> Do not save contact, please try again later </font>";
			}
		}	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Insert new contact </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="contactbox">
		<img src="conpic2.png" class="logpic">
		<h1> Create New Contact </h1>
		<table>
			<form method="post" action="new_contact.php">
				<tr>
					<td><p> First Name: &nbsp</p></td>
					<td> <input type="text" name="fname" size=35 placeholder="first name"> </td>
				</tr>
				<tr>
					<td><p> Last Name: &nbsp</p></td>
					<td> <input type="text" name="lname" size=35 placeholder="last name"> </td>
				</tr>
				<tr>
					<td><p> Cell Phone: &nbsp</p></td>
					<td> <input type="number" name="phone" size=35 placeholder="cell phone"> </td>
				</tr>
				<tr>
					<td><p> Email: &nbsp</p></td>
					<td> <input type="text" name="email" size=35 placeholder="username or email"> </td>
				</tr>
				<tr>
					<td><p> Address: </p></td>
					<td> <input type="text" name="address" size=35 placeholder="address"> </td>
				</tr>
				<tr>
					<td colspan=2 align="center"> <input type="submit" name="new_contact" value="Save Contact">
					 &nbsp <input type="reset" name="cancle" value="Cancle"> </td>
				</tr>
			</form>
		</table>
	</div>
</body>
</html>