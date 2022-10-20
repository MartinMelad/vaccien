<!DOCTYPE html>
<html>
<head>
	<title>Add Vaccination Center</title>
</head>

<style>
	 body{
        background-repeat:no-repeat;
        background-size: cover;
        background: url('indexback.jpg');
    }
    div{
        padding:20;
        font-size:20;
    }
    h2{
        font-size:30;
        color:#1A5276;
        text-align:center;
    }
    .container {
        left:50;
        right:750;
        position:absolute;
        margin:10px 80px;
        padding:16px;
        border-radius:25px;
        border-color:#1A5276;
        border-style:solid;
        background-color: #A9CCE3;
        font-family:Century Gothic;	
    }
    .error{
        color: red;
    }
    input[type='text'], input[type='number']{
        background-color:white;
        border:none;
        padding:9px 10px;
        margin-left: 20px;
    }
    select, input[type='date']{
        margin-left: 20px; 
        width: 200px; 
        height: 30px; 
    }
    label{
        margin-left: 20px;
    }
    input[type='submit']{
        width:300px;
        height:40px;
        border-radius:10px;
        margin: 10px;
        font-size: 18px;
        background-color: #1A5276;
        color: white;
    }
	
</style>

<body>

<form method="POST" class="container" action="vaccine reserved.php">
<div>
<a href="parentindex.php"><img src="backarrow.png" width="30" height="30"></a></br>	
</div>

<div>
<h2>Reserve Vaccine</h2>	

<label ><b>Vaccination Center Name</b></label></br>
<select name = "VaccanationCenter" style="width: 200px; height: 30px">
<?php
	include 'database_connection.php';
	$query="SELECT * FROM centers";
	$result = mysqli_query($con,$query);

	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_array($result)) {
			$name = $row['name'];
			echo "<option value='$name'>$name</option>";
		}
		
	}
	else{
		echo "<p>No Any Vaccination Center !</p>";
	}
?>
</select>

</br></br>
<label ><b>Vaccine Name</b></label></br>
<select name = "Vaccine" style="width: 200px; height: 30px">
<?php
	include 'database_connection.php';
	$query="SELECT * FROM vaccine";
	$result = mysqli_query($con,$query);

	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_array($result)) {
			$name = $row['Vaccine name'];
			echo "<option value='$name'>$name</option>";
		}
		
	}
	else{
		echo "<p>No Any Vaccine !</p>";
	}
?>
</select>

</br></br>
<label><b>First Or Second Dose?</b><span class="error">*</span></label></br>
<input type="radio" name="dose" value="first dose" style="margin-left: 20px" />First Dose
<input type="radio" name="dose" value="second dose" />Second Dose

</br></br>
<label><b>Date</b><span class="error">*</span></label></br>
<input type="date" name="date"  required/>

</br></br>
<label><b>National ID</b><span class="error">*</span></label></br>
<input type="text" name="id" placeholder="30248518648" size="62" required/>



<center>
</br></br>
<input type="Submit" name="reserve" value="RESERVE" /><br>
<br>

</div>
</center>


</body>
</html>