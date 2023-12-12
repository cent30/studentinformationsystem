<?php
session_start();

$con = mysqli_connect("localhost","root","","studentinformationsystem");

if(isset($_POST['insert_data']))
{
    $civil_status_name = mysqli_real_escape_string($con, $_POST['civil_status_name']);

    $query = "INSERT INTO civil_status (civil_status_name) VALUES ('$civil_status_name') ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Pumasok Din Tropa";
        header("Location: civil_status.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: civil_status.php");
    }
}

?>