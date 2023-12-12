<?php
session_start();

$con = mysqli_connect("localhost","root","","studentinformationsystem");

if(isset($_POST['insert_data']))
{
    $barangay_name = mysqli_real_escape_string($con, $_POST['barangay_name']);
    $town_id = mysqli_real_escape_string($con, $_POST['town_id']);


    $query = "INSERT INTO barangay_table (barangay_name,town_id) VALUES ('$barangay_name', '$town_id') ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Pumasok Din Tropa";
        header("Location: barangay.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: barangay.php");
    }
}

?>