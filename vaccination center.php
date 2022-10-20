<?php
    session_start();
    include 'database_connection.php';

    $name = $_POST['cname'];
    $city = $_POST['VaccanationCenter'];
    $address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
    $type = $_POST['type'];

    $query = " INSERT INTO centers VALUES('$name','$city','$address','$contact_no','$type')";

    $result = mysqli_query($con,$query);

    if(!$result)
    {
        die("<br>Cannot Insert Date : " .mysqli_error());
    }
    echo "<script>alert('Vaccination Center added');window.location='Add vaccination center.php'</script>";
?>