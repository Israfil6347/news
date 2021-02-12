<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
<!-- bootstrap link-->
<link rel="stylesheet" type="text/css" href="style/admin.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
<form action="admin_login.php" method="post" class="mt-5">
	<h3>Admin login</h3>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" name="email" class="form-control" id="email" >
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password"  name="password" class="form-control" id="pwd">
  </div>
  <input type="submit" name="submit" value="login" class="btn btn-primary mt-2" value="login">
</form>
<!--php will start-->
<?php
include('db/connection.php');

if (isset($_POST['submit'])) 
{
	$email=$_POST['email'];
	$password=$_POST['password'];

	$query=mysqli_query($conn, "SELECT * FROM admin_login WHERE email='$email' AND password='$password' LIMIT 1");

	foreach ($query as $key => $value) {
		$role = $value['role'];		
	}

	$count=mysqli_num_rows($query);

	$_SESSION['email']=$email;
	if ($role==1) 
	{
		$_SESSION['role'] = 'admin';
		header('location:home.php');
	}
	else	
	{
		$_SESSION['role'] = 'user';
		header('location:user/user_home.php');
	}

}

 // if ($query){
	// if (mysqli_num_rows($query)>0){
	// 		header('location:home.php');
	// 	$_SESSION['email']=$email;

	// 	}else{
	// 		echo "<script> alert('your Eamil and Password is incorrect please try Again')</script>";
	// 	}
	// }



	// if ($query){
	// if (mysqli_num_rows($query)>0){
	// 		header('location:home.php');
	// 	$_SESSION['email']=$email;

	// 	}else{
	// 		echo "<script> alert('your Eamil and Password is incorrect please try Again')</script>";
	// 	}
	// }

?>


<!-- all cdn js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</div>
</body>
</html>