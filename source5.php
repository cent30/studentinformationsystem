<?php
session_start();

$con = mysqli_connect("localhost","root","","studentinformationsystem");

if(isset($_POST['insert_data']))
{
    $town_name = mysqli_real_escape_string($con, $_POST['town_name']);
    $province_id = mysqli_real_escape_string($con, $_POST['province_id']);


    $query = "INSERT INTO town_table (town_name,province_id) VALUES ('$town_name', '$province_id') ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Pumasok Din Tropa";
        header("Location: town.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: town.php");
    }
}

?>