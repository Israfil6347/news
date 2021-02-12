<?php
session_start();
if(!isset($_SESSION['email'])){
  header("location:admin_login.php");
}


$page='product';
include('include/header.php');
?>

    <div style="margin-left: 17%;width: 80%;" >
    <ul class="breadcrumb">
       <li class="breadcrumb-item active"><a href="home.php"></a> Home</li>
      <li class="breadcrumb-item active"><a href="news.php">News</a></li> 
      <li class="breadcrumb-item active">Add News</li>
    </ul>
    
  </div>
<div style="width: 50%; margin-left: 25%;">
  
	
	<form action="Addnews.php" method="post" name="newsform" onsubmit="return validiteform()" enctype="multipart/form-data">
	<h2 class="text-center">Add news</h2>


  <div class="form-group">
    <label for="exampleInputCategories">Titele</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Titele....">
  </div>

   <div class="form-group mt-3">
    <label for="descNews">Description</label>
    <textarea class="form-control" name="description" id="descNews" rows="5" placeholder="Description....."></textarea>
  </div>
    
  
  <div class="form-group">
    <label for="exampleInputdate">Date</label>
    <input type="date" name="date" class="form-control" id="date">
  </div>

  <div class="form-group">
    <label for="exampleInputfile">Thumbnail</label>
    <input type="file" name="thumbral" class="form-control img-thumbnail" id="file">
  </div>

   <div class="form-group">
    <label for="exampleInputcategory">Choese Category</label>
    
    <select class="form-control" name="category" id="category">
    <?php
      include('db/connection.php');
      $query=mysqli_query($conn,"SELECT * FROM category");
        while ($row=mysqli_fetch_array($query)) {
         
    ?>
      <option value="<?=$row['category_name'];?>"><?=$row['category_name'];?></option>
     
      <?php
    }
      ?>
    </select>
  </div>
  <input type="submit" name="submit" class="btn btn-primary mt-3" value="submit">
</form>
</div>

<script>
  function validiteform(){
    var x = document.newsform.titele.value;
    console.log(X);
    var y = document.forms['form']['description'].value;
    var z = document.forms['form']['date'].value;
    var w = document.forms['form']['category'].value;
    if (x==""){
      alert("Titele mast be Filled out");
      return false;
      if (y==""){
       alert("description mast be Filled out");
        return false;
      }
      if (y.length<100){
        alert("description at list 100 chearacter");
        return false;
      
    }
  }

</script>
<script>
  tinymce.init({selector:'#descNews'});
</script>


<?php 
include('include/fotter.php');

if (isset($_POST['submit'])) 
{
  $title=mysqli_real_escape_string($conn, $_POST['title']);
    $description=mysqli_real_escape_string($conn, $_POST['description']);
       $date=$_POST['date'];
         $thumbral=$_FILES['thumbral']['name'];
          $tmp_thumbral=$_FILES['thumbral']['tmp_name'];
           $category=$_POST['category'];
           move_uploaded_file($tmp_thumbral,"images/$thumbral");

  $query1=mysqli_query($conn,"insert into news(title,description,date,category,thumbral) values('$title','$description',' $date',' $category', '$thumbral')");
           // $query1=mysqli_query($conn,"call sp_insert('$title','$description','$date',' $category', '$thumbral')");
  if ($query1) {
    echo "<script>alert('news update susessfully');window.location.href = 'http://localhost/News/news.php?nav=news'</script>";
  }else{  
    echo mysqli_error($conn);
    echo "<script>alert('please try again');</script>";

  }
          
}


?>
