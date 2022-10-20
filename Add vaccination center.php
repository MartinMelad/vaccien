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

<form method="POST" class="container" action="vaccination center.php">
<div>
<a href="adminindex.php"><img src="backarrow.png" width="30" height="30"></a></br>	
</div>

<div>
<h2>Vaccination Center</h2>	

<label><b>Center Name</b><span class="error">*</span></label></br>
<input type="text" name="cname" placeholder="Center Name" size="62" required />

</br></br>
<label ><b>CityName</b></label></br>
<select name = "VaccanationCenter" style="width: 200px; height: 30px">
<?php
	include 'database_connection.php';
	$query="SELECT * FROM Cities";
	$result = mysqli_query($con,$query);

	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_array($result)) {
			$name = $row['name'];
			echo "<option value='$name'>$name</option>";
		}
		
	}
	else{
		echo "<p>No Any Child Details !</p>";
	}
?>
</select>

</br></br>
<label><b>Address</b><span class="error">*</span></label></br>
<input type="text" name="address" placeholder="Enter The Address" size="62" required/>

</br></br>
<label><b>Contact Number</b><span class="error">*</span></label></br>
<input type="text" name="contact_no" placeholder="1" size="62" required/>
</br></br>
<label><b>Username</b><span class="error">*</span></label></br>
<input type="text" name="Usernaem" placeholder="Enter The Username" size="62" required/>
</br></br>
<label><b>Type</b><span class="error">*</span></label></br>
<input type="radio" name="type" value="government" style="margin-left: 20px" />Government
<input type="radio" name="type" value="private" />Private
</br> </br>


<center>
</br></br>
<input type="Submit" name="add" value="ADD" /><br>
<br>

</div>
</center>


</body>
</html>