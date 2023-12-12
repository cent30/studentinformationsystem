<?php
session_start();

$con = mysqli_connect("localhost","root","","studentinformationsystem");

if(isset($_POST['insert_data']))
{
    $gender_name = mysqli_real_escape_string($con, $_POST['gender_name']);

    $query = "INSERT INTO gender_table (gender_name) VALUES ('$gender_name') ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Pumasok Din Tropa";
        header("Location: gender.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: gender.php");
    }
}

?>