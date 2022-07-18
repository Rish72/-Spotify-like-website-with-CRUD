<?php
$login=false;
$showError=false;
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    include 'partials/dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
      $sql = "SELECT * FROM `user_log` where username = '$username' AND password = '$password'";
      $result = mysqli_query($con, $sql);
      $num = mysqli_num_rows($result);
      if($num == 1){
        $row=mysqli_fetch_array($result);
          $login=true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['username'] = $username;
          $_SESSION['user_id'] = $row['user_id'];
          header("location: home.php");
      }
      else{
        $showError = true;
      }
  }
 ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <?php require 'partials/nav.php' ?>
    <?php
      if ($login) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success</strong> You are logged in.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
      if ($showError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Failed</strong> Invalid Credentials Or You are not Registered.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
     ?>

      <div class="text-center m-5">
        <form  action="login.php" method="post" style="max-width:480px; margin:auto;">
          <h1 class="h3 mb-3 fw-normal">Please Log in here</h1>

          <div class="form-floating m-4">
            <input type="text" class="form-control" id="username" name="username" placeholder="name@example.com">
            <label for="username">Email address</label>
          </div>
          <div class="form-floating m-4">
            <input type="password" class="form-control" id="cpassword" name="password" placeholder="Password">
            <label for="password">Password</label>
          </div>

          <button class="w-50 btn btn-lg btn-primary" type="submit">Sign in</button> <a href="signup.php">Create your account</a>
        </form>
      </div>

  </body>
</html>
