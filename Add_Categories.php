<?php
session_start();
if($_SESSION['email']==true){

}else
header("location:admin_login.php");

$page='Categories';
include('include/header.php');
?>

<div style="width: 80%; margin-top: 10%;">
	
	<form action="Add_Categories.php" method="post" name="categoryform" onsubmit=" return validiteform() ">
	<h2 class="text-center">Add Categories</h2>
  <form>
  <div class="form-group">
    <label for="exampleInputCategories"><h4>Categories</h4></label>
    <input type="text" name="categories" class="form-control" id="exampleInputCategories1" aria-describedby="CategoriesHelp" placeholder="Enter Categories">
  </div>
   <div class="form-group mt-3">
    <label for="exampleFormControlTextarea1"><h4>Comment</h4></label>
    <textarea class="form-control" name="Comment" id="exampleFormControlTextarea1" rows="5"></textarea>
  </div>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <input type="submit" name="submit" class="btn btn-primary mt-3" value="Add Categories">
  </div>
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


<?php 
include('include/fotter.php');
?>
<?php
include('db/connection.php');
if (isset($_POST['submit'])){
  $category_name=$_POST['categories'];
  $des=mysqli_real_escape_string($conn, $_POST['Comment']);

  $query=mysqli_query($conn,"insert into category(category_name,des)values('$category_name','$des')");
  if ($query) {
    echo "<script> alert('category add susessfully');window.location.href = 'http://localhost/News/Categories.php?nav=cat'</script>";


  }else{
    // echo mysqli_error($conn);
    echo "<script> alert('please try again')</script>";
  }
}
?>