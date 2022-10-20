<?php
    session_start();
    include 'database_connection.php';

    $centername = $_POST['VaccanationCenter'];
    $vaccinename = $_POST['Vaccine'];
    $dose = $_POST['dose'];
    $date = $_POST['date'];
    $nationalid = $_POST['id'];

    if($dose=='first dose'){
        $query = " INSERT INTO firstdose VALUES('$centername','$vaccinename','$dose','$date','$nationalid')";

        $result = mysqli_query($con,$query);

        if(!$result)
        {
            die("<br>Cannot Insert Data : " .mysqli_error());
        }
        echo "<script>alert('reserved first dose vaccine');window.location='parentindex.php'</script>";
		
	}

    else{
        $ok='';
        $query="SELECT * FROM firstdose";
	    $result = mysqli_query($con,$query);
		while ($row = mysqli_fetch_array($result)) {
			$id = $row['nid'];
            if($nationalid==$id){
                $query = " INSERT INTO seconddose VALUES('$centername','$vaccinename','$dose','$date','$nationalid')";
                $result = mysqli_query($con,$query);

                if(!$result)
                {
                    die("<br>Cannot Insert Data : " .mysqli_error());
                }
                echo "<script>alert('reserved second dose vaccine');window.location='parentindex.php'</script>";
                $ok='-1';
                break;
            }
		}
        if($ok!='-1')
            echo"Cannot reserve second dose until getting first dose";
		
	}

    
?>