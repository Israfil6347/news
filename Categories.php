<?php
session_start();
if($_SESSION['email']==true){

}else
header("location:admin_login.php");

$page='Categories';
include('include/header.php');
?>

<div style="width: 80%;  margin-top: 10%;">
<div class="d-grid gap-2 d-md-flex justify-content-md-end"><button><a class="btn btn-primary" href="Add_Categories.php">Add Categories</a></button>
</div>
	<table class="table table-bordered">
		<tr>
			<th>id</th>
			<th>catagory</th>
			<th>Description</th>
			<th>Edit</th>
			<th>Delect</th>
		</tr>
<?php
	include('db/connection.php');
	$query=mysqli_query($conn,"select * from category");
	while ($row=mysqli_fetch_array($query)){
	
?>
<tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['category_name'];?></td>
	<td><?php echo $row['des'];?></td>
	<td><a href="edit.php?edit=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a></td>


	<td><a href="delete.php?del=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
</tr>
<?php }?>
		
	</table>

</div>
<?php 
include('include/fotter.php');
?>