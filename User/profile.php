<?php
include "userHeader.php";
include "../Admin/conn.php";


auth();

$email=$_SESSION['email'];
$logedUser=$_SESSION['logedUser'];
$status=$_SESSION['status'];

  $query4="SELECT count(*) as allPosts FROM posts where author='$logedUser'";
  $res4=mysqli_query($conn,$query4);
  $postCount=mysqli_fetch_assoc($res4)['allPosts'];

  ?>
      
      <div class="col-md-10 ml-5">
        <!-- Dashboard content -->
        <div class="container">
          <h2>User Dashboard</h2>
          <div class="row">
            <div class="col-md-6 ">
              <div class="card bg-success">
                <div class="card-body">
                  <h5 class="card-title">Total Posts</h5>
                  <p class="card-text"><?php echo $postCount;  ?></p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card bg-info">
                <div class="card-body">
                  <h5 class="card-title">Approved Posts</h5>
                  <p class="card-text">12</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-12">
              <div class="card bg-danger">
                <div class="card-body">
                  <h5 class="card-title">Panding Posts</h5>
                  <p class="card-text">10 News Posts are Pending</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12 mt-3">
        <!-- Dashboard content -->
        <div class="postheading">
          <div class="row d-flex justify-content-between">
            <div class="col-md-4">
              <h4 class="mb-4"><i class="fa-solid fa-arrow-right"></i> ALL POSTS</h4>
            </div>
           
          </div>
        </div>
            <!-- Blog Posts Table -->
            <table class="table text-center">
          <thead>
            <tr>
              <th>#Sr.No</th>
              <th><i class="fa-solid fa-image"></i> Image</th>
              <th><i class="fa-solid fa-list-ol"></i> Title</th>
              <th><i class="fa-solid fa-layer-group me-2"></i>Description</th>
             </tr>
          </thead>
          <tbody>
      <?php

            function limitCharacters($string, $limit) {
              // Check if the string length exceeds the limit
              if (strlen($string) > $limit) {
                  // Trim the string to the specified limit
                  $limitedString = substr($string, 0, $limit);
                  
                  // Find the position of the last space within the limit
                  $lastSpace = strrpos($limitedString, ' ');
                  
                  // If there's a space within the limit, truncate the string at that position
                  if ($lastSpace !== false) {
                      $limitedString = substr($limitedString, 0, $lastSpace);
                  }
                  
                  // Append three dots (...) to indicate continuation
                  $limitedString .= '...';
              } else {
                  // If the string length is within the limit, keep the original string
                  $limitedString = $string;
              }
              
              return $limitedString;
          }
          
          
            $query="SELECT * from posts where author='$logedUser' ORDER BY id DESC LIMIT 3";
            $res=mysqli_query($conn,$query);

            if(mysqli_num_rows($res)>0){
              while($arr=mysqli_fetch_assoc($res)){
          ?>
            <tr>
              <td><?php echo $arr['id'];?></td>
              <td><?php 
                    // Output the image data with appropriate headers
                    echo '<img src="../images/uploadedFiles/'.$arr['image'].'" alt="Post Image" class="img-thumbnail" style="max-width: 100px;">';
                    ?></td>

              <td><?php echo $arr['title'];?></td>
              <td><?php echo limitCharacters($arr['content'], 50);?></td>
             
            </tr>
          <?php   }
            }else{
              echo "No Posts Found";
            } ?>


            <!-- Add more rows for additional blog posts -->
          </tbody>

        </table>
      
      </div>
        <!-- End Dashboard content -->
      </div>

      



<?php

include "userFooter.php";

?>