<?php
session_start();
$con = mysqli_connect("localhost","root","","studentinformationsystem");
include('db.php');
if(isset($_POST['delete']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM student_table WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}
