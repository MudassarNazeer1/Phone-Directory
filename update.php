<?php
	session_start();
	require_once ('connect.php');
	error_reporting(0);
	
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$get_contact = "select * from contact_list where ID = '$id'";
			$sql_get_contact = $connect->query($get_contact);
			$row = mysqli_fetch_assoc($sql_get_contact);
		}
?>

<?php
session_start();
error_reporting(0);
$user_name = $_SESSION['uname'];
	if ($user_name==true) {
		
	}else{
		header('Location:login.php');
	}
	if (isset($_POST['new_contact'])) {
		$id = $_POST['id'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		if ($fname=='' || $lname=='' || $phone=='' || $email=='' || $address=='') {
			echo "<font color='white'> Please fill all fields </font>";
		}
		else{
		$update_contact = "update contact_list set fname = '$fname', lname = '$lname', cellphone = '$phone', email = '$email',
						 address = '$address' where ID='$id'";
		$sql_update_contact = $connect->query($update_contact);
		if ($sql_update_contact) {
			header('Location: contactlist.php');
			}
		}	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Update contact </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="contactbox">
		<img src="uppic.png" class="logpic">
		<h1> Update Contact </h1>
		<table>
			<form method="post" action="update.php">
				<input type="hidden" name="id" value="<?php echo $row['ID'] ?>">
				<tr>
					<td><p> First Name: &nbsp</p></td>
					<td> <input type="text" name="fname" value="<?php echo $row['fname'] ?>" size=35 placeholder="first name"> </td>
				</tr>
				<tr>
					<td><p> Last Name: &nbsp</p></td>
					<td> <input type="text" name="lname" value="<?php echo $row['lname'] ?>" size=35 placeholder="last name"> </td>
				</tr>
				<tr>
					<td><p> Cell Phone: &nbsp</p></td>
					<td> <input type="number" name="phone" value="<?php echo $row['cellphone'] ?>" size=35 placeholder="cell phone"> </td>
				</tr>
				<tr>
					<td><p> Email: &nbsp</p></td>
					<td> <input type="text" name="email" value="<?php echo $row['email'] ?>" size=35 placeholder="username or email"> </td>
				</tr>
				<tr>
					<td><p> Address: &nbsp</p></td>
					<td> <input type="text" name="address" value="<?php echo $row['address'] ?>" size=35 placeholder="address"> </td>
				</tr>
				<tr>
					<td colspan=2 align="center"> <input type="submit" name="new_contact" value="Update Contact">
					 &nbsp <input type="reset" name="cancle" value="Cancle"> </td>
				</tr>
			</form>
		</table>
	</div>
</body>
</html>