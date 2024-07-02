<?php

include "adminHeader.php";

include "conn.php";

// Check if form is submitted
if (isset($_POST['postPublish'])) {
  $title = $_POST['title'];
  $subcat = $_POST['subcat'];
  $content = $_POST['content'];
  $currentDateTime = date('Y-m-d H:i:s');
  $author=$_SESSION['logedUser'];


  $query3="SELECT * FROM posts where title='$title'";
  $res2=mysqli_query($conn,$query3);

  if($title=="" || $subcat=="" || $content==""){
    $msg="fields";
  }else{
      if(mysqli_num_rows($res2)>0){
        $msg="found";
      }else{

      if(empty($_FILES['image']['name'])){
          $msg="fields";
      }else{
          $file_name=htmlspecialchars_decode(trim($_FILES['image']['name']));
          $ext=pathinfo($file_name,PATHINFO_EXTENSION);
          $fileName=time().".".$ext;
          move_uploaded_file($_FILES['image']['tmp_name'],"../images/uploadedFiles/".$fileName);    
      }
          $sql = "INSERT INTO posts (title, cat_id, content, image,date,author) VALUES ('$title','$subcat','$content','$fileName','$currentDateTime','$author')";

          // $result=mysqli_query($conn,$sql);
          if($result){
              $msg=1;
          }else{
            $msg=2;
          }
      }
  }
}
?>
      <!-- Main Content -->
      <div class="col-md-9 postContainer animsition">

      <div class="row">
        <div class="col-md-4">
        <h4 class="mb-4 text-center fw-bold animate__animated animate__rubberBand">NEWS POST EDITOR</h4>
        </div>
        <div class="col-md-8">
        <?php
              if (isset($msg)) {
                if ($msg == 1) {
                  echo '<span  class="fw-bold alert alert-success float-end" style="">Post Published Successfull</span><br>';
                } elseif ($msg == 2) {
                  echo '<span  class="Error alert alert-danger float-end" style="">Error While Loading The File</span><br>';
                }elseif ($msg == "fields") {
                  echo '<span  class="Error alert alert-danger float-end" style="">Please fill all the fields</span><br>';
                } elseif ($msg == "found") {
                  echo '<span  class="Error alert alert-danger float-end" style="">Post Already Exist With the same title.</span><br>';
                } else {
                  echo '<span  class="Error alert alert-danger float-end" style="">Failed To publish Post</span><br>';
                }
              }
              ?>
        </div>
      </div>

        
     
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
            <br>
          </div>
          <div class="form-group">
            <label for="category">Category:</label>
            <select name="subcat" class="form-control" id="category">
              <?php
            $query="SELECT * FROM subcategories";
            $res=mysqli_query($conn,$query);
            if(mysqli_num_rows($res)>0){
              while($arr=$res->fetch_assoc()){
                ?>
                <option value="<?php echo $arr['id'];?>"><?php echo $arr['name'];?></option>
                <?php
              }
            }else{
              echo "No category found";
            }
              ?>             
            </select>
            <br>
          </div>
          <div class="form-group">
            <label for="content">Content:</label>
            <textarea class="form-control" id="content" name="content" rows="10" placeholder="Enter your blog content"></textarea><br>
          </div>
          <div class="form-group">
            <label for="image">Featured Image:</label>
            <input type="file" class="form-control-file" name="image" id="image">
            <br><br>
          </div>
          <!-- <div class="form-group">
            <label for="tags">Tags:</label>
            <input type="text" class="form-control" name="tags" id="tags" placeholder="Enter tags separated by commas">
            <br>
          </div> -->
          <button type="submit" name="postPublish" class="btn btn-primary">Publish</button>
          
        </form>
      
      </div>

      <?php

include "adminFooter.php";

?>


