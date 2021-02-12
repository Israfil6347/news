
<!--header start-->
<?php
	session_start();
	
	if(!isset($_SESSION['role']))
	{
		header('location:home.php?lmsg=true');
		exit;
	}

include('include/header.php');
?>
<!--header end--> 
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

</body>
</html>


<!--fotter start-->
<?php
include('include/fotter.php');
?>
<!--fotter end-->