<?php

include 'db.php';

if(count($_POST)>0){

    if($_POST['type']==1){

        $name=$_POST['name'];

        $email=$_POST['email'];

        $phone=$_POST['phone'];

        $city=$_POST['city'];

        $sql = "INSERT INTO `student`( `name`, `email`,`phone`,`city`)

        VALUES ('$name','$email','$phone','$city')";

        if (mysqli_query($conn, $sql)) {

            echo json_encode(array("statusCode"=>200));
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
if(count($_POST)>0){
    if($_POST['type']==2){
        $student_id=$_POST['student_id'];

        $firstname=$_POST['firstname'];

        $lastname=$_POST['lastname'];

        $age=$_POST['age'];

        $extensionname=$_POST['extensionname'];

        $sql = "UPDATE `student_table` SET `firstname`='$firstname',`lastname`='$lastname',`age`='$age',`extensionname`='$extensionname' WHERE student_id=$student_id";

        if (mysqli_query($conn, $sql)) {

            echo json_encode(array("statusCode"=>200));

        }

        else {

            echo "Error: " . $sql . "<br>" . mysqli_error($conn);

        }

        mysqli_close($conn);

    }

}

if(count($_POST)>0){

    if($_POST['type']==3){

        $id=$_POST['id'];

        $sql = "DELETE FROM `student_table` WHERE id=$id ";

        if (mysqli_query($conn, $sql)) {

            echo $id;

        }

        else {

            echo "Error: " . $sql . "<br>" . mysqli_error($conn);

        }

        mysqli_close($conn);

    }

}

if(count($_POST)>0){

    if($_POST['type']==4){

        $student_id=$_POST['student_id'];

        $sql = "DELETE FROM 'student_table' WHERE student_id in ($student_id)";

        if (mysqli_query($conn, $sql)) {

            echo $student_id;

        }

        else {

            echo "Error: " . $sql . "<br>" . mysqli_error($conn);

        }

        mysqli_close($conn);

    }

}

 

?>
