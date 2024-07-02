<?php
include "conn.php";
include "adminHeader.php";

if(isset($_POST['changepass'])){
  $email="abdullah@gmail.com";
  $newPass=$_POST['npass'];
  $oldPass="12345";

  $q="select u_pass from registred_users where u_email='$email' and u_pass='$oldPass'";
  $res=mysqli_query($conn,$q);
  $row=mysqli_fetch_assoc($res);
  print_r($row);
}
?>

      <!-- Main Content start -->
      <div class="col-md-8 postContainer animsition">
        <h2 class="mb-4 text-center animate__animated animate__rubberBand">Change Password</h2>
        <form method="POST" action="">
          <div class="form-group">
            <label for="currentPassword">Email</label>
            <input type="email" class="form-control" name="aEmail" id="currentPassword">
            <br>
          </div>
          <div class="form-group">
            <label for="newPassword">New Password</label>
            <input type="password" class="form-control" name="npass" id="newPassword" placeholder="Enter new password">
            <br>
          </div>
          <div class="form-group">
            <label for="confirmNewPassword">Confirm New Password</label>
            <input type="password" class="form-control" name="opass" id="confirmNewPassword" placeholder="Confirm new password">
          </div>
          <br>
          <button type="submit" name="changepass" class="btn btn-primary">Change Password</button>
        </form>
      </div>


      <?php

include "adminFooter.php";

?>