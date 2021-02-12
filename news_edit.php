<?php
session_start();
error_reporting(0);
if($_SESSION['email']==true){

}else
header("location:admin_login.php");

$page='news';
include('include/header.php');

include('db/connection.php');
$id=$_GET['edit'];

$query=mysqli_query($conn,"select * from news where id='$id'");

while ($row=mysqli_fetch_array($query)) {

 $news=$row['title'];
 $description=$row['description'];
 $date=$row['date'];
 $category=$row['category'];
 $thumbral=$row['thumbral'];
}
?>


<div style="width: 50%; margin-left: 25%;">
  
  
  <form action="addnews.php" method="post" name="newsform" onsubmit="return validiteform()" enctype="multipart/form-data">
  <h2 class="text-center">Edit news</h2>


  <div class="form-group">
    <label for="exampleInputCategories">Titele</label>
    <input type="text" name="titele" class="form-control" id="titele" <?php if(isset($news)){echo 'value="'.$news.'"';} ?> placeholder="Enter Titele....">
  </div>

   <div class="form-group mt-3">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1"rows="5" placeholder="Description....."><?php if(isset($description)){ echo$description;} ?></textarea>
  </div>
  
  <div class="form-group">
    <label for="exampleInputdate">Date</label>
    <input type="date" name="date" class="form-control" id="date"<?php if(isset($date)){echo 'value="'.$date.'"';} ?> > 
  </div>

  <div class="form-group">
    <label for="exampleInputfile">Thumbnail</label>
    <input type="file" name="thumbral" class="form-control img-thumbnail" id="file" <?php if(isset($thumbral)){echo 'value="'.$thumbral.'"';} ?>>
  </div>

   <div class="form-group">
    <label for="exampleInputcategory">Choese Category</label>
    
    <select class="form-control" name="category" id="category">
      <?php
        include('db/connection.php');
        $query=mysqli_query($conn,"SELECT * FROM category");
          while ($result=mysqli_fetch_array($query)) 
          {
           
      ?>
        <option value="<?= $result['category_name'];?>" <?php if(isset($category) && $category == $result['category_name']){echo "selected";}?> ><?= $result['category_name'];?></option>
       
        <?php        
      }
        ?>

    </select>
  </div>

  <input type="submit" name="submit" class="btn btn-primary mt-3" value="submit">
</form>
</div>

<!--catagory update work-->
<?php
include('db/connection.php');
if (isset($_POST['submit'])) {
 $titele=$_POST['titele'];
 $description=mysqli_real_escape_string($conn, $_POST['description']);
 $date=$_POST['date'];
 $category=$_POST['category'];
 $thumbral=$_POST['thumbral'];
 $id=$_POST['id'];



 $query1=mysqli_query($conn,"update news set titele='$titele',description='$description',date='$date',category='$category',thumbral='$thumbral' where id='$id' ");
 
 if($query1){

 echo "<script> alert( 'news update sucessfull');window.location.href = 'http://localhost/News/news.php?nav=cat'</script>";



 }else{
  echo mysqli_error($conn);
  // echo "eategory not update";
 }
}


include('include/fotter.php');
?>


