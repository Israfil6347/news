<?php
// require_once "conf.php";

// $redirectURL = "http://localhost/FacebookLogin/fb-callback.php";
// $permission =['id'];

?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <style type="text/css">
    .form{
      margin-left: 400px;
      margin-top: 200px;
    }
  </style>
</head>
<body>

<form action="signup.php" class="form">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" style="width: 50%;">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input  type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="width: 50%;">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="button" class="btn btn-primary">Login With Facebook</button>

</form>

</body>
</html>