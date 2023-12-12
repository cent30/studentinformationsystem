<?php
session_start();

$conn = mysqli_connect("localhost","root","","studentinformationsystem");

if(isset($_POST['insert_data']))
{
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $middlename = mysqli_real_escape_string($con, $_POST['middlename']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $extensionname = mysqli_real_escape_string($con, $_POST['extensionname']);
    $birthday = mysqli_real_escape_string($con, $_POST['birthday']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $civilstatus = mysqli_real_escape_string($con, $_POST['civilstatus']);
    $streetnumber = mysqli_real_escape_string($con, $_POST['streetnumber']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $barangay = mysqli_real_escape_string($con, $_POST['barangay']);
    $town = mysqli_real_escape_string($con, $_POST['town']);
    $province = mysqli_real_escape_string($con, $_POST['province']);
    $zipcode = mysqli_real_escape_string($con, $_POST['zipcode']);
    $parent = mysqli_real_escape_string($con, $_POST['parent']);
    $login_id = mysqli_real_escape_string($con, $_POST['login_id']);

    $query = "INSERT INTO parent_table (firstname,middlename,lastname,extensionname,birthday,age,gender,civilstatus,streetnumber,address,barangay,town,province,zipcode,parent,login_id) VALUES ('$firstname','$middlename','$lastname','$extensionname','$birthday','$age','$gender','$civilstatus','$streetnumber','$address','$barangay','$town','$province','$zipcode','$parent','$login_id') ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Pumasok Din Tropa";
        header("Location: student.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: student.php");
    }
}

?>