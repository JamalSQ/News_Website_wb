<?php

include "userHeader.php";

?>

      <!-- Main Content start -->
      <div class="col-md-8 postContainer" style=" padding:40px;
    margin-left: 80px;
    background-color: #dad5d5;">
        <h2 class="mb-4 text-center">Change Password</h2>
        <form>
          <div class="form-group">
            <label for="currentPassword">Email</label>
            <input type="email" class="form-control" value="qadrij688@gmail.com" disabled id="currentPassword">
            <br>
          </div>
          <div class="form-group">
            <label for="newPassword">New Password</label>
            <input type="password" class="form-control" id="newPassword" placeholder="Enter new password">
            <br>
          </div>
          <div class="form-group">
            <label for="confirmNewPassword">Confirm New Password</label>
            <input type="password" class="form-control" id="confirmNewPassword" placeholder="Confirm new password">
            <br>
          </div>
          <button type="submit" class="btn btn-primary">Change Password</button>
        </form>
      </div>


      <?php

include "userFooter.php";

?>