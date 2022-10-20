<?php
	session_start();

	include 'database_connection.php';

    $name=$_POST['vname'];
    $lname = $_POST['gap'];
    $gen = $_POST['precations'];
		$query="INSERT INTO vaccine VALUES('$name','$lname','$gen')";
		
		$result=mysqli_query($con,$query);

		if(!$result)
		{
			die("<br>Can't Insert Data : " .mysqli_error());
		}
		echo "<script>alert('Vaccine added');window.location='addvaccine.php'</script>";


?>