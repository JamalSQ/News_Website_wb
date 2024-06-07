<?php

include "conn.php";
if(!isset($_SESSION['aemail']) && !isset($_SESSION['adminloged'])){
  header('Location: ../index.php');
  exit();
}
if(isset($_GET['pid'])){
    $pid=$_GET['pid'];
    $query="DELETE FROM posts where id='$pid'";
    $res=mysqli_query($conn,$query);
    header('location: aAllPosts.php');
}
?>