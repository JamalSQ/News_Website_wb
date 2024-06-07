<?php 
include "userHeader.php";
include("../admin/conn.php");

?>
      <!-- Main start -->
      <div class="col-md-10 ml-5">
        <!-- Dashboard content -->
        <div class="postheading">
          <div class="row d-flex justify-content-between">
            <div class="col-md-4">
              <h4 class="mb-4">All POSTS</h4>
            </div>
            <div class="col-md-4">
              <input type="search" placeholder="search" class="form-control">
            </div>
          </div>
        </div>

        <!-- Blog Posts Table -->
        <table class="table text-center">
          <thead>
            <tr>
              <th>Sr.No</th>
              <th><i class="fa-solid fa-image"></i> Image</th>
              <th><i class="fa-solid fa-list-ol"></i> Title</th>
              <th><i class="fa-solid fa-layer-group me-2"></i>Description</th>
              <th>Edit</th> <!-- Empty header for Edit button column -->
              <th>Delete</th> <!-- Empty header for Delete button column -->
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
          
          
            $query="SELECT * from posts where author='$author'";
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
              <td><a href="EditPost.php?bid=<?php echo $arr['id'];?>" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
              <td>
                <form action="" method="POST">
                <a href="deletepost.php?pid=<?php echo $arr['id'];?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </a></td>
                </form>
            </tr>
          <?php   }
            }else{
              echo "No Posts Found";
            } ?>


            <!-- Add more rows for additional blog posts -->
          </tbody>

        </table>
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </div>
      <!-- Main End -->


      
<?php
include "userFooter.php";

?>