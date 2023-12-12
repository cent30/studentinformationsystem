<?php
session_start();

$con = mysqli_connect("localhost","root","","studentinformationsystem");

if(isset($_POST['insert_data']))
{
    $province_name = mysqli_real_escape_string($con, $_POST['province_name']);

    $query = "INSERT INTO province_table (province_name) VALUES ('$province_name') ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Pumasok Din Tropa";
        header("Location: province.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: province.php");
    }
}

?>