<?php
session_start();
function adminauth(){
  if(!isset($_SESSION['aemail']) && !isset($_SESSION['adminloged'])){
    header('Location: ../index.php');
    exit();
  }
}
adminauth();
function debug($variable){
  echo "<pre>";
  print_r($variable);
  echo "</pre>";
}
$AdminID=$_SESSION['adminloged'];

include "conn.php";

$qry="SELECT u_name FROM registred_users where user_id='$AdminID'";
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
    <script src="../js/chart.js"></script>
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
          <h4><?php echo $arr['u_name'];?></h4>
          <p><b>Role: </b>Admin</p>
        </div>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="aDashboard.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aWriteBlog.php">New Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aAllPosts.php">All Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addCategory.php">Add category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aChangePassword.php">Change Passwod</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Logout</a>
          </li>
        </ul>
      </div>


    