<?php 
if(isset($_POST['signup']))
{
	include 'conn.php';
	$fullName = $_POST['name'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	// $type = $_POST['userType'];
	// // if($type=='for Event Booking')
	// 	$userType = 'User';
	// else if($type=='as a Business Partner')
	// 	$userType = 'Admin';
	// else
	// 	$userType='dummy';
	$insert = mysqli_query($con, "INSERT INTO `users`(u_name, u_contact, u_email, u_password) VALUES('$fullName', '$contact', '$email', '$password')");
	if($insert)
	{
		$_SESSION['msg'] = 'Sign Up Successfully';
		header("location:login.html");
	}
	else
	{
		$_SESSION['msg'] = 'Error in Sign Up due to reason > '.mysqli_error($con);
		
		header("location:Dashboard/signup.php");
	}

}
 ?>