<?php
@include 'config.php';
session_start();
if(isset($_SESSION['user_name'])){
header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="container">

      <div class="content">
      <h3>hi, <span>User</span></h3>
      <h1>Welcome<span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>This is an admin Page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
    </div>
  </div>
    </body>
    </html>