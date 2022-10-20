<!DOCTYPE html>
<html>
<head>
	<title>Users Report</title>
</head>
<style>
	body{
		background-repeat: no-repeat;
		background-size: cover;
		background: url('reportback.jpg');
	}
	.bg1{
		opacity: 0.9;
		padding: 30px; 
		background-color: black; 
		width: 800px; 
	}

	.tabel_style{
		border-radius: 5px;
		border-style: solid;
		font-size: 22px;
		padding: 40px;
		text-align: center;
		color: white;
		font-family: Times New Roman;
	}
	p{
		font-size: 30px;
		color: white;
		background-color: #1A5276;
		padding: 10px;
		text-align: center;
		font-family: Times New Roman;
	}
</style>

<body >

<center>
<div class="bg1">
	<a href="Registered users.php"><img src="backarrow.png" width="30" height="30"></a>
	<p>Users Details</p>

	<?php
		include 'database_connection.php';

		$p_username = $_REQUEST['name'];
		$query = "SELECT * FROM user WHERE username='$p_username'";

		$result = mysqli_query($con,$query);

		while ($row = mysqli_fetch_array($result)) {
		
	?>
	<table class="tabel_style" cellpadding="15" cellspacing="15">
		<tr>
			<th>User Name</th>
			<td><?php echo $row['username']; ?></td>
		</tr>

		<tr>
			<th>Last Name</th>
			<td><?php echo $row['lastname']; ?></td>
		</tr>

		<tr>
			<th>Gender</th>
			<td><?php echo $row['gender']; ?></td>
		</tr>

		<tr>
			<th>City</th>
			<td><?php echo $row['city']; ?></td>
		</tr>

		<tr>
			<th>ID</th>
			<td><?php echo $row['id']; ?></td>
		</tr>

		<tr>
			<th>Email Address</th>
			<td><?php echo $row['email']; ?></td>
		</tr>
	</table>

	<?php } ?>

</div>
</center>
</body>
</html>