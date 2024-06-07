<?php

include "conn.php";
include "adminHeader.php";

?>

<div class="col-md-10 ml-5">
  <!-- Dashboard content -->
  <?php
  $query4="SELECT count(*) as allPosts FROM posts";
  $res4=mysqli_query($conn,$query4);
  $postCount=mysqli_fetch_assoc($res4)['allPosts'];

  $query5="SELECT count(*) as RegUsers FROM registred_users";
  $res5=mysqli_query($conn,$query5);
  $userCount=mysqli_fetch_assoc($res5)['RegUsers'];


  $query6="SELECT count(*) as regCat FROM categories";
  $res6=mysqli_query($conn,$query6);
  $catCount=mysqli_fetch_assoc($res6)['regCat'];


  ?>
  <div class="container">
    <h3 class="text-center my-3">ADMIN DASHBOARD</h3>
    <div class="row">
      <div class="col-md-4 mt-2">
        <div class="card bg-info">
          <div class="card-body">
            <h5 class="card-title">Total Posts</h5>
            <p class="card-text"><?php echo $postCount;?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-2">
        <div class="card bg-success text-white">
          <div class="card-body ">
            <h5 class="card-title">Registered User</h5>
            <p class="card-text"><?php echo $userCount;?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-2">
        <div class="card bg-success text-white">
          <div class="card-body ">
            <h5 class="card-title">Today Trafic</h5>
            <p class="card-text">95k user Visted today</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-2">
        <div class="card bg-success text-white">
          <div class="card-body ">
            <h5 class="card-title">Total Main Categories</h5>
            <p class="card-text"><?php echo $catCount;?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-2">
        <div class="card bg-danger text-white">
          <div class="card-body">
            <h5 class="card-title">Panding Posts</h5>
            <p class="card-text">10 News Posts are Pending</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <!-- Recent posts Starts -->
       <!-- Main start -->
       <div class="col-md-12">
        <!-- Dashboard content -->
        <div class="postheading">
          <div class="row d-flex justify-content-between">
            <div class="col-md-4">
              <h4 class="mb-4"><i class="fa-solid fa-arrow-right"></i> RECENT POSTS</h4>
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
          
          
            $query="SELECT * from posts ORDER BY id DESC LIMIT 3";
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
      <!-- Main End -->
  <!-- Recent Posts Ends -->



  <div class="container mt-5">
    <h2 class="mb-4"><i class="fa-solid fa-chart-line"></i> STATISTICS</h2>
    <div class="row">
      <div class="col-md-6">
        <canvas id="userChart"></canvas>
      </div>
      <div class="col-md-6">
        <canvas id="articleChart"></canvas>
      </div>
    </div>
  </div>


  <!-- End Dashboard content -->
</div>


  <script>
    // Chart.js
    var userCtx = document.getElementById('userChart').getContext('2d');
    var userChart = new Chart(userCtx, {
      type: 'bar',
      data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
        datasets: [{
          label: 'Number of Users',
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

    var articleCtx = document.getElementById('articleChart').getContext('2d');
    var articleChart = new Chart(articleCtx, {
      type: 'line',
      data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
        datasets: [{
          label: 'Number of Articles',
          data: [8, 15, 5, 12, 10, 6],
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>




<?php

include "adminFooter.php";

?>