<?php
include('db/connection.php');
$id=$_GET['delete'];
$query=mysqli_query($conn,"delete from news where id='$id'");
if ($query) {
	echo "<script> alert('news is deleted');window.location.href = 'http://localhost/News/news.php?nav=cat';</script>";
	}else{
		echo "please try again";

	}

?>