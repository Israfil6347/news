<?php
session_start();
if(!isset($_SESSION['email'])){
  header("location:admin_login.php");
}

$page='news';
include('include/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<!-- Icons Pack -->
	<script src="https://unpkg.com/feather-icons"></script>

	<!-- tinymce text area -->
	 <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	

</head>
<body>
	<?php
		if(isset($_SESSION['updateRole']))
		{
	?>

	<div class="container">
		<div class="row">
			<div class="col-6 mx-auto">
				<div class="alert alert-success">
					News Status updated.
				</div>				
			</div>
		</div>
	</div>

	<?php
			unset($_SESSION['updateRole']);
		}
	?>



	<div style="margin-left: 17%;width: 80%;" >
		<ul class="breadcrumb">
			<li class="breadcrumb-item active"><a href="home.php"></a> Home</li> 
			<li class="breadcrumb-item active">News</li>
		</ul>

	</div>

	<div class="d-grid gap-2 d-md-flex justify-content-md-end"><a class="btn btn-primary mb-3" href="Addnews.php">Add News</a>
	</div>
	<table class="table table-bordered">
		<tr>
			<th style="width: 5%">id</th>
			<th style="width: 65%">Details</th>	
			<?php
				if($_SESSION['role'] == 'admin')
				{
					echo '<th>Options</th>
						<th>Approval</th>';
				}
			?>
			

		</tr>
		<?php

		include('db/connection.php');
		if(isset($_GET['page']))
		{
			$page=$_GET['page'];
			if ($page ==""||$page==1) {
				$page1=0;
			}else{
				$page1=($page*3)-3;
			}
		}
		else 
		{
			$page1=0;
		}

		$query=mysqli_query($conn,"SELECT * FROM news limit $page1,3 ");
		while ($row=mysqli_fetch_array($query)) {
			$desc = substr(strip_tags($row['description']), 0, 500);
			?>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td>
					<h4 class="h4"><?=$row['title']?></h4>

					<p class="text-primary">
						Category: <?=$row['category']?> | 
						Published on: <?=date("F,JS,Y",strtotime($row['date']))?>						
					</p>

					<p>
						<img class="img img-thumbnail" src="images/<?php echo $row['thumbral'];?>" alt="img not found" style="max-width: 80px;">
					</p>
					
					<p class="lead">
						<?=$desc;?>
					</p>
				</td>				
					<?php
						if($_SESSION['role'] == 'admin')
						{					
					?>

				<td>
					<a class="btn btn-primary "href="news_edit.php?edit=<?php echo $row['id'];?>"> <i data-feather="edit"></i></a>
				
					<a class="btn btn-danger" href="delete_news.php?delete=<?php echo $row['id'];?>"> <i data-feather="trash-2"></i></a>
				</td>

				<td>
					<!-- <input type="radio" id="roleA" name="role" value="1"> Active
					<input type="radio" id="roleD"  name="role" value="0">Deactive -->
					 <form action="change.php" method="POST">
					 	<?php $role = $row['status'];?>
					 	<select class="form-select rounded-0" name="role" >
							<option value="1" <?php if($role == 1){echo 'selected';} ?> >Approved</option>	
							<option value="0" <?php if($role == 0){echo 'selected';} ?> >Pending</option>						
						</select>
						<input type="hidden" name="id" value="<?=$row['id'];?>">

						<button name="role-update" class="my-2 btn btn-primary rounded-0">update <i data-feather="refresh-ccw"></i></button>

					 </form>
					 
				</td>
				<?php
					}
				?>

				</tr>

			<?php }?>
		</table>
		<nav aria-label="Page navigation example">
			<ul class="pagination">
				<li class="page-item disabled">
					<a class="page-link" href="#" tabindex="-1">Previous</a>
				</li>

				<?php

				$sql=mysqli_query($conn,"select * from news");
				$count=mysqli_num_rows($sql);

				$a=$count/3;
				ceil($a);
				for ($b=1; $b<=$a; $b++){ 
					?>

					<li class="page-item">
						<a class="page-link" href="news.php?page=<?php echo $b;?>"><?php echo $b;?></a>
					</li>



				<?php } ?>
				<li class="page-item ">
					<a class="page-link" href="#">Next</a>
				</li>

			</ul>
		</nav>
	</table>


</div>

<?php 
include('include/fotter.php');
?>
<script>
  feather.replace();
</script>
</body>
</html>