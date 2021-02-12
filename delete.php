<?php
include('db/connection.php');
$id=$_GET['del'];
$query=mysqli_query($conn,"delete from category where id='$id'");
if ($query) {
	echo "<script> alert('Categories is deleted');window.location.href = 'http://localhost/News/Categories.php?nav=cat';</script>";
	}else{
		echo "please try again";

	}

?>