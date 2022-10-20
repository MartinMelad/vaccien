<!DOCTYPE html>
<html>
<head>
	<title>Add Vaccine</title>
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
</head>

<body>

<form method="POST" class="container" action="vaccine.php">

<div>
<a href="adminindex.php"><img src="backarrow.png" width="30" height="30"></a>
<h2>Add vaccine</h2>	


<label><b>Vaccine name</b><span class="error">*</span></label></br>
<input type="text" name="vname" placeholder="Enter vaccine name" size="62" required /></br></br>

<label><b>The gap</b><span class="error">*</span></label></br>
<input type="number" name="gap" placeholder="Enter the gap between two doses(days)" size="62" required/></br></br>

<label><b>precations</b><span class="error">*</span></label></br>
<input type="text" name="precations" placeholder="Enter the possible precautions" size="62" required/></br></br>
</select> 

<br><br>


<center>

<input type="Submit" name="add" value="ADD" /><br>
<br>
</div>
</center>

</body>
</form>
</html>