<?php
session_start();

$con = mysqli_connect("localhost","root","","studentinformationsystem");

if(isset($_POST['insert_data']))
{
    $adminfirstname = mysqli_real_escape_string($con, $_POST['adminfirstname']);
    $adminmiddlename = mysqli_real_escape_string($con, $_POST['adminmiddlename']);
    $adminlastname = mysqli_real_escape_string($con, $_POST['adminlastname']);
    $adminextensionname = mysqli_real_escape_string($con, $_POST['adminextensionname']);
    $admin_birthday = mysqli_real_escape_string($con, $_POST['admin_birthday']);
    $admin_age = mysqli_real_escape_string($con, $_POST['admin_age']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $civilstatus = mysqli_real_escape_string($con, $_POST['civilstatus']);
    $streetnumber = mysqli_real_escape_string($con, $_POST['streetnumber']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $barangay = mysqli_real_escape_string($con, $_POST['barangay']);
    $town = mysqli_real_escape_string($con, $_POST['town']);
    $province = mysqli_real_escape_string($con, $_POST['province']);
    $zipcode = mysqli_real_escape_string($con, $_POST['zipcode']);
    $parent = mysqli_real_escape_string($con, $_POST['parent']);
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    $login_id = mysqli_real_escape_string($con, $_POST['login_id']);

    $query = "INSERT INTO admin_table (adminfirstname,adminmiddlename,adminlastname,adminextensionname,admin_birthday,admin_age,gender,civilstatus,streetnumber,address,barangay,town,province,zipcode,parent,student_id,login_id) VALUES ('$adminfirstname','$adminmiddlename','$adminlastname','$adminextensionname','$admin_birthday','$admin_age','$gender','$civilstatus','$streetnumber','$address','$barangay','$town','$province','$zipcode','$parent','$student_id','$login_id') ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Pumasok Din Tropa";
        header("Location: admin_report.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: admin_report.php");
    }
}

?>