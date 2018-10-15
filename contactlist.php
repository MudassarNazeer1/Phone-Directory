<?php
	session_start();
	require_once('connect.php');
	error_reporting(0);
	$user_name = $_SESSION['uname'];
	if ($user_name==true) {
		
	}else{
		header('Location:login.php');
	}
	$sql = "SELECT * FROM customer WHERE email = '$user_name'";
	$data = mysqli_query($connect, $sql);
	$result = mysqli_fetch_assoc($data);
	echo "<font color='white' face='arial'> Wellcome </font>".$result['fname'] .$result['lname'];
?>
<?php
	require_once ('connect.php');
	error_reporting(0);
	$all_contacts = "SELECT * FROM contact_list";
	$sql_all_contacts = $connect->query($all_contacts);
	$total_contacts = $sql_all_contacts->num_rows;

?>

<!DOCTYPE html>
<html>
<head>
	<title> Contact List </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!--<h4><font face="arial" color="white"><?php echo "Wellcome  ".$_SESSION['uname'] ?></font></h4>-->
	<div class="contactlistbox">
		<img src="conpic1.png" class="logpic">
		<h1> Contacts </h1>
			<table>
				<tr>
					<td colspan=3> <h2> <?php echo $total_contacts ?> Contact in Phone book </h2> </td>
					<td colspan=2 align="right"> <a href="new_contact.php"><input type="button" value="+Add Contact"></a> 
						<a href="logout.php"><input type="button" value="Logout"></a> </td>
				</tr>
				<tr>
					<th align="left"> Name </th>
					<th align="left"> Cell Phone </th>
					<th align="left"> Email </th>
					<th align="left"> Address </th>
					<th align="left"> Action </th>
				</tr>
					<?php while ($row = mysqli_fetch_assoc($sql_all_contacts)) { ?>
				<tr>
					<td><?php echo $row['fname'] . " " . $row['lname'] ?></td>
					<td><?php echo $row['cellphone'] ?></td>
					<td><?php echo $row['email'] ?></td>
					<td><?php echo $row['address'] ?></td>
					<td> <a href="update.php?id=<?php echo $row['ID'] ?>"> <img src="editpic.png" class="actionpic"> </a>&nbsp 
						 <a href="delete.php?id=<?php echo $row['ID'] ?>"> <img src="deletepic.png" class="actionpic"> </a> </td> 
				</tr>
					<?php } ?>
			</table>
	</div>
</body>
</html>