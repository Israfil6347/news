<?php
if(isset($_POST['role-update']))
{
	$id = $_POST['id'];
	$role = $_POST['role'];
	include('db/connection.php');
	$query=mysqli_query($conn,"Update news set status=$role where id=$id");
	if (!$query) {
	  echo("Error description: " . mysqli_error($conn));
	}
	else
	{
		session_start();
		$_SESSION['updateRole'] = true;
		header("location: news.php");
	
	}
	// if ($query) 
	// {
	// 	$data=mysqli_fetch_assoc($query);
	// 	echo $data['$status'];
	// }
}

?>