<?php
include("database_connection.php");

if(isset($_POST['register']))
{
	$name = $_POST['name'];
	$email  = $_POST['email'];
	$password = $_POST['password'];
	$cnfpass = $_POST['confirm-pass'];

	if($password===$cnfpass)
	{
		$query = "INSERT INTO users (name, email, password, profile_img) VALUES ('$name', '$email', '$password', 'default_profile.jpg')";
		$result = mysqli_query($con, $query) or die(mysqli_error($con));

		echo "<script>alert('Congratulations!!! you are succesfully registered');</script>";
		header("location: index.php");
	}
	else
	{
		echo "<script>alert('Password Not Matched');</script>";
		header("location: index.php");
	}
}



?>