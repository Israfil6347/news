<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.79.0">
  <title>News24.com</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/navstyle.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="js/jquery.js">
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="blog.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <h2 id="container">Online News</h2>
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark text-decoration-none" href="#">Online News24 </a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="link-secondary" href="#" aria-label="Search">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
          </a>
          
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Sign In
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">User login</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                      <div class="col mx-auto broder">
                        <h2 class="display-4 text-primary text-center">Sign in</h2>
                        <?php
                        if (isset($_SESSION['success'])) {
                          echo '<div class="alert alert-success">' . $_SESSION['success'] . '</div>';
                          unset($_SESSION['success']);
                        } else if (isset($_SESSION['error'])) {
                          echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
                          unset($_SESSION['error']);
                        }
                        ?>
                        <form action="signin/action.php" method="POST">
                          <div class="mb-3">
                            <label for="email-field" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control rounded-4" placeholder="name@example.com" id="email-field">
                          </div>

                          <div class="mb-3">
                            <label for="password-field" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control rounded-4" placeholder="********" id="password-field">
                          </div>

                          <button type="submit" name="signin-btn" class="btn btn-outline-success">Signin</button>

                          <a href="signin/password-recover.php" class="btn btn-outline-dark ">Forget password?</a>

                          <p class="my-3">
                            Don't have any account? <br><a href="signin/signup.php">Sign up for one</a>
                          </p>
                        </form>
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                   
                </div>
              </div>
            </div>
          </div>
        <a class="btn btn-outline-danger" href="signout.php">Sign Out</a>


        </div>
      </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between ">
        <a class="p-2 link-secondary text-decoration-none" href="index.php">Home</a>
        <a class="p-2 link-secondary text-decoration-none" href="#">Bangladesh</a>
        <a class="p-2 link-secondary text-decoration-none" href="#">Technology</a>
        <a class="p-2 link-secondary text-decoration-none" href="#">Business</a>
        <a class="p-2 link-secondary text-decoration-none" href="#">Politics</a>
        <a class="p-2 link-secondary text-decoration-none" href="#">Sports</a>
        <a class="p-2 link-secondary text-decoration-none" href="#">Entertainment</a>
        <a class="p-2 link-secondary text-decoration-none" href="#">Science</a>
        <a class="p-2 link-secondary text-decoration-none" href="#">Health</a>
        <a class="p-2 link-secondary text-decoration-none" href="api/index.html">Cov19</a>

        <?php

        if(isset($_SESSION['email']))
        {
          echo '<a class="p-2 link-secondary text-decoration-none" href="top-news.php">Top News</a>';
        }
        ?>

      </nav>
    </div>
  </div>
</div>
</div>

<main class="container">
  <?php
  include('db/connection.php');
  $query1=mysqli_query($conn,"select  * from news where category = 'Headline' and status = '1'");
  while($row=mysqli_fetch_array($query1)) {
   $category=$row['category'];
   $date=$row['date'];
   $title=$row['title'];
   $thumbral=$row['thumbral'];
   $description=$row['description'];
 }
 ?>
 <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
  <div class="col-md-6 px-0">
    <h1 class="display-4 font-italic"><?=$title;?></h1>
    <!-- <p class="lead my-3 text-success">description</p> -->
    <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
  </div>
</div>
<div class="row mb-2">

  <?php

  $query2 = mysqli_query($conn,"select * from news where category='COV19'");
  while($row=mysqli_fetch_array($query2)) {
   $category2=$row['category'];
   $date2=$row['date'];
   $title2=$row['title'];
   $thumbral2=$row['thumbral'];
     // $description=$row['description'];
 }
 $conn = null;
 ?>
 <div class="col-md-6 news-item">
  <div class="row g-0 border overflow-hidden">
    <div class="col-8 p-4">
      <strong class="d-inline-block mb-2 text-primary"><?php echo $category2;?></strong>
      <h3 class="mb-0"><?php echo $title2;?></h3>
      <div class="mb-1 text-muted"><?php echo $date2;?></div>
      <a href="#">Continue reading</a>
    </div>
    <div class="col-4 img-news-box">
      <img src="images/<?php echo $thumbral2;?>" class="img-news">
      <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"><?php // echo $thumbral2;?></text></svg> -->

    </div>
  </div>
</div>
<div class="col-md-6">
 <?php
 include('db/connection.php');
 $query3=mysqli_query($conn,"select * from news where category = 'Top-news'");
 while($row=mysqli_fetch_array($query3)) {
   $category=$row['category'];
   $date=$row['date'];
   $title=$row['title'];
   $thumbral=$row['thumbral'];
     // $description=$row['description'];
 }

 ?>

 <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
  <div class="col p-4 d-flex flex-column position-static">
    <strong class="d-inline-block mb-2 text-success"><?=$category;?></strong>
    <h3 class="mb-0"><?=$title;?></h3>
    <div class="mb-1 text-muted"><?=$date;?></div>
    <!-- <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p> -->
    <a href="#" class="stretched-link">Continue reading</a>
  </div>
  <div class="col-4 img-news-box">
    <img src="images/<?php echo $thumbral;?>" class="img-news">
    <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"><?php // echo $thumbral2;?></text></svg> -->

  </div>
</div>
</div>
</div>
<?php
include('db/connection.php');
$query=mysqli_query($conn,'SELECT * FROM news where status="1" ');
while ($row=mysqli_fetch_array($query)) { 
  ?>
  <div class="row">
    <div class="col-md-8">
      <article class="blog-post">
        <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
        <p class="blog-post-meta" style="text-align:justify"><?php echo $row['date']; ?><a href="#">israfil</a></p>

        <p>
          <?php
          $desc =$row['description'];
          $strcul = substr($desc,0,250);

          echo $strcul;

        // echo $row['description'];
          ?>  
        </p>
        <a class="btn btn-primary rounded-4" href="news-details-page.php?id=<?php echo $row['id'];?>">Read More &raquo;</a>
        <hr>
        <p>
          <img class=" img img-thumbnail" src="images/<?php echo $row['thumbral']; ?>" alt="img not foun" style="height: 300px;">
        </p>
      </br>
    </div>
  </article>

<?php }?>
</div>

</div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
  <p>news24 template built for <a href="http://israfili.com/">Md israfil</a> by <a href="https://twitter.com/mdo"><br>@mdo</a><a href="#">Back to top</a>
    <a class="m-2" href=""><i class="fab fa-facebook-f "style="height: 20px;"></i></a>
    <a class="m-2" href=""><i class="fab fa-youtube "style="height: 20px;"></i></a>
    <a class="m-2" href=""><i class="fab fa-twitter "style="height: 20px;"></i></a>
    <a class="m-2" href=""><i class="fab fa-linkedin-in "style="height: 20px;"></i></a>
  </p>
</footer>
</body>
</html>
