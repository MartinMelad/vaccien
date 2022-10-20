<?php
	session_start();

	include 'database_connection.php';

	if($_POST['uname'] && $_POST['password'])
	{
		$name=$_POST['uname'];
		$lname = $_POST['lname'];
		$gen = $_POST['gender'];
		$city = $_POST['city'];
		$ID = $_POST['ID'];
		$email = $_POST['email'];
		$pass= $_POST['password'];

		$query="INSERT INTO user VALUES('$name','$lname','$gen','$city','$ID','$email','$pass')";
	}

		$result=mysqli_query($con,$query);

		if(!$result)
		{
			die("<br>Can't Insert Data : " .mysqli_error());
		}
		echo "<script>alert('Patient Record Inserted..!!');window.location='index.php'</script>";
	

?>