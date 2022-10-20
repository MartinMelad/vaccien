<!DOCTYPE html>
<html>
<head>
	<title>Add city</title>
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
    input[type='text'], input[type='email'], input[type='password']{
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
<form method="POST" class="container" action="<?php $_SERVER['PHP_SELF'] ?>">

<div class="div">
<a href="adminindex.php"><img src="backarrow.png" width="30" height="30"></a>

<h1>Add City</h1>	




<label><b>CityName</b><span class="error"></span></label></br>
<input type="text" name="City" placeholder="Enter city name" size="62" required />

</br></br>

</select> 

<br><br>

<center><input type="Submit" name="addcity" value="Add City"/></center>

</div>

<?php

	include 'database_connection.php';
	
	if(isset($_POST['addcity']))
	{
		$name = $_POST['City'];
		$query="INSERT INTO Cities VALUES('$name')";
		
		$result=mysqli_query($con,$query);

		if(!$result)
		{
			die("<br>Can't Insert Data : " .mysqli_error());
		}
		
		echo "<script>alert('Add Cities Details..!!');window.location='add city.php'</script>";
	}
?>


</body>
</html>