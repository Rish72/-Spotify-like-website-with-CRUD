<?php
$err=false;
$exists=false;
include 'partials/dbconnect.php';
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (!empty($_POST['username']))
    {
      // Insert and send email
      $username = $_POST["username"];
      $password = $_POST["password"];
      $cpassword = $_POST["cpassword"];
      if(($password == $cpassword) && $exists == false){
        $sql = "INSERT INTO `user_log` (`username`, `password`, `signup_date`) VALUES ('$username', '$password', current_timestamp())";
        $result = mysqli_query($con, $sql);
        if($result){
          $err=true;
        }
      }
    }
  }
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <?php require 'partials/nav.php' ?>
    <?php
    if($err){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> thank you for submiting.
      <button type="button" class="btn-close" data-bs-dismiss="alert" onclick="go()"  aria-label="Close"></button>
    </div>';
    // header("location:login.php");
    }

    ?>


<div class="text-center m-5">
  <form  action="signup.php" method="post" style="max-width:480px; margin:auto;">
    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

    <div class="form-floating m-4">
      <input type="text" class="form-control" id="username" name="username" placeholder="name@example.com">
      <label for="username">Email address</label>
    </div>
    <div class="form-floating m-4">
      <input type="password" class="form-control" id="cpassword" name="password" placeholder="Password">
      <label for="password">Password</label>
    </div>
    <div class="form-floating m-4">
      <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm_Password">
      <label for="cpassword">Confirm Password</label>
    </div>


    <button class="w-50 btn btn-lg btn-primary" type="submit">Sign up</button>
  </form>

</div>
<script type="text/javascript">
  function go(){
    window.location.href = "login.php";
  }
</script>

  </body>
</html>
