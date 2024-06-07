<?php
include "../admin/conn.php";

session_start();
function auth(){
  if($_SESSION['logedUser']!="" && $_SESSION['status']!=true){
    header('Location: ../login.php');
    exit();
  }
}
auth();
function debug($variable){
  echo "<pre>";
  print_r($variable);
  echo "</pre>";
}
$author=$_SESSION['logedUser'];


$qry="SELECT u_name FROM registred_users where user_id='$author'";
$data=mysqli_query($conn,$qry);
$arr=mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- Bootstrap CSS -->
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/custom.js"></script>
  <link rel="stylesheet" href="../css/style.css">

</head>
<body>
  <!-- header and sidebar start -->
  <div class="container-fluid">
    <div class="row">
      <nav class="bg-light mb-2 col-md-12 py-2">
        <a class="navbar-brand fw-bold text-dark" href="#"><h2>World Wide News</h2></a>
      </nav>
    </div>
    <div class="row">
      <div class="sidebar col-md-2">
        <div class="user-details">
          <img src="../images/turtule.jpg" class="profile-pic mb-1" alt="Profile Picture">
          <h4><?php echo ucfirst(strtolower($arr['u_name'])); mysqli_close($conn);?></h4>
          <p><b>Role:</b>User</p>
        </div>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="profile.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="WriteBlog.php">New Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="allPosts.php">All Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="changePassword.php">Change Passwod</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
