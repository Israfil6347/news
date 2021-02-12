<?php
session_start();
error_reporting(0);
if($_SESSION['email']==true){

}else
header("location:admin_login.php");

$page='Categories';
include('include/header.php');

include('db/connection.php');
$id=$_GET['edit'];

$query=mysqli_query($conn,"select * from category where id='$id'");

while ($row=mysqli_fetch_array($query)) {

  $category=$row['category_name'];
  $des=$row['des'];
}
?>


<div style="width: 50%; margin-left: 25%; margin-top: 10%;">
	
	<form action="edit.php" method="post" name="categoryform" onsubmit=" return validiteform() ">
	<h2 class="text-center">Update Categories</h2>
  <form>
  <div class="form-group">
    <label for="exampleInputCategories"><h4>Categories</h4></label>
    <input type="text" name="categories" value="<?php echo $category ;?>" class="form-control" id="exampleInputCategories1" aria-describedby="CategoriesHelp" placeholder="Enter Categories">
  </div>
   <div class="form-group mt-3">
    <label for="exampleFormControlTextarea1"><h4>Comment</h4></label>
    <textarea class="form-control" name="des" id="exampleFormControlTextarea1" rows="3"><?php echo $des ;?></textarea>
  </div>

  <input type="hidden" name="id" value="<?php echo $_GET['edit'];?>">

  <input type="submit" name="submit" class="btn btn-primary mt-3" value="update Categories">
  
</form>
</div>

<script>
  function validiteform(){
    var x = document.forms['categoryform']['Categories'].value;
    if (x==""){
      alert("Categories mast be Filled out");
      return false;
    }
  }

</script>
<!--catagory update work-->
<?php
include('db/connection.php');
if (isset($_POST['submit'])) {
 $category=$_POST['categories'];
 $des=mysqli_real_escape_string($conn, $_POST['des']);
 $id=$_POST['id'];

 $query1=mysqli_query($conn,"update category set category_name='$category',des='$des' where id='$id' ");
 
 if($query1){

 echo "<script> alert( 'catagory update sucessfull');window.location.href = 'http://localhost/News/Categories.php?nav=cat'</script>";



 }else{
  echo mysqli_error($conn);
  // echo "eategory not update";
 }
}


include('include/fotter.php');
?>


