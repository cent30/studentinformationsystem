<?php
include('db.php');

$gender_id = $_GET['gender_id'];

//Fetching privious image to update
if(isset($_GET['gender_id'])){
    $edit_id = $_GET['gender_id'];
    $edit_query = "SELECT * FROM card_activation WHERE gender_id = $gender_id";
    $edit_query_run = mysqli_query($con, $edit_query);
    if(mysqli_num_rows($edit_query_run) > 0){
        $edit_row = mysqli_fetch_array($edit_query_run);
      
        $e_image = $edit_row['image'];
     
    }
    else{
        // header('location: index.php');
        echo "Error1";
    }
}
else{
    // header("location: index.php");
    echo "Error2";
}

//Data Updating
if(isset($_POST['submit']))
{
	$gender_name = $_POST['gender_name'];
	$date_created = $_POST['date_created'];
	


	$update = "UPDATE gender_table SET gender_name='$gender_name', date_created = '$date_created' WHERE gender_id=$gender_id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
           move_uploaded_file($_FILES['image']['tmp_name'], $target);
           echo "<script>
            alert('Success! Data has been successfully updated!');
            window.location.href='index.php';
            </script>";
	}else{
		echo "Data not update";
	}
}

?>
