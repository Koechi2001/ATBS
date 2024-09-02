<?php
session_start();
include_once 'dbconnect2.php';

if(!isset($_SESSION['user'])){
    header("Location: Adminlogin.html");
}else{
    $user = $_SESSION['user'];	
    $username = $_POST["username"];

	$delete = "DELETE FROM passanger WHERE username = '$username'";
	if(mysqli_query($con,$delete)){
		 header("Location: AdminUserView.php");
	}else{
		echo "Error";
	}

}


?>