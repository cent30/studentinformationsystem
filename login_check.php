<?php
error_reporting(0);
session_start();

$host="localhost";

$user="root";

$password="";

$db="studentmanagementsystem";

$data=mysqli_connect($host,$user,$password,$db);

if ($data===false) {
	die("connection error");
}

	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		
		$name = $_POST['username'];

		$pass = $_POST['password'];

		$sql="select * from login_table where username='".$name."' AND password='".$pass."'";

		$result=mysqli_query($data, $sql);

		$row=mysqli_fetch_array($result);

		if ($row["usertype"]=="student") 
		{
			$_SESSION['username']=$name;

			$_SESSION['usertype']="student";

			header("Location: dashboard2.php");
		}
		elseif ($row["usertype"]=="admin")
		 {
		 	$_SESSION['username']=$name;

		 	$_SESSION['usertype']="admin";

			header("location: dashboard.php");
		}
			elseif ($row["usertype"]=="parent")
		 {
		 	$_SESSION['username']=$name;

		 	$_SESSION['usertype']="admin";

			header("location: dashboard3.php");
		}
		else
		{
			echo "username or password do not match WAG PURO PINDOT!";
	}
}
?>