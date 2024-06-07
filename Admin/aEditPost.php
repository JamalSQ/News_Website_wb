<?php
include "adminHeader.php";
include "conn.php";

if (isset($_POST['submit'])){

          $id=$_GET['bid'];

          $title = $_POST['title'];
          $subcat = $_POST['cat_id'];
          $content = $_POST['content'];

          if(empty($_FILES['new-image']['name'])){
              $fileName=$_POST['old-image'];
          }else{
              $oldfile=$_POST['old-image'];
              unlink('../images/uploadedFiles/'.$oldfile);
              $file_name=htmlspecialchars_decode(trim($_FILES['new-image']['name']));
              $ext=pathinfo($file_name,PATHINFO_EXTENSION);
              $fileName=time().".".$ext;
              move_uploaded_file($_FILES['new-image']['tmp_name'],"../images/uploadedFiles/".$fileName);    
          }
    
            $sql = "UPDATE posts SET title='$title', cat_id='$subcat', content='$content', image='$fileName' WHERE id='$id'";

            $result=mysqli_query($conn,$sql);

            if($result){
                $msg=1;
            }else{
              $msg=2;
            }
      }
    
?>
      <!-- Main Content -->
      <div class="col-md-9 postContainer" style=" padding:40px;
    margin-left: 80px;
    background-color: #dad5d5;">
        <h2 class="mb-4 text-center">Edit Blog</h2>
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
                } elseif($msg == 3)  {
                  echo '<span  class="Error alert alert-danger float-end" style="">Failed To publish Post</span><br>';
                }
              }
              ?>

        <?php if (isset($_GET['bid'])) {
          $bid=$_GET['bid'];

          $query="Select * From posts where id=$bid";
          $postres=mysqli_query($conn,$query);
          while($row=mysqli_fetch_assoc($postres)){

            ?>
        <form method="POST" action="#" enctype="multipart/form-data">

          <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="<?php echo $row['title'];?>" id="title" placeholder="Enter title">
            <br>
          </div>
          <div class="form-group">
            <label for="category">Category:</label>
            <select class="form-control" name="cat_id" id="category">
      <?php 
            $catquery="SELECT * From categories";
            $catquery=mysqli_query($conn,$catquery);
            while($catrow=mysqli_fetch_assoc($catquery)){
              if($row['cat_id']==$catrow['id']){
                echo '<option selected value='.$arr["id"].'>'.$catrow['name'].'</option>';
              }
              echo '<option value='.$arr["id"].'>'.$catrow['name'].'</option>';
            }
            ?>
            </select>
            <br>
          </div>
          <div class="form-group">
            <label for="content">Content:</label>
            <textarea class="form-control" id="content" name="content" rows="10" placeholder="Enter your blog content"><?php echo $row['content'];?></textarea><br>
          </div>
          <div class="form-group">
            <label for="image">Featured Image:</label>

           <input type="file" class="form-control" id="pimg" value="" name="new-image">
           <input type="hidden" class="form-control" id="pimg" value="<?php echo $row['image'];?>" name="old-image">
    
            <?php echo  '<a href="../images/uploadedFiles/'.$row['image'].'" target="_blank"> <img src="../images/uploadedFiles/'.$row['image'].'" alt="Post Image" class="img-thumbnail" style="max-width: 100px;"></a>';
                    ?>

            <br><br>
          </div>
          <div class="form-group col-md-6">
            <label for="tags">Publish Date:</label>
            <input type="text" class="form-control" value="<?php echo $row['date'];?>"  id="tags" placeholder="Enter tags separated by commas" disabled>
          </div>
          <br>
          <div class="form-group col-md-6">
            <label for="tags">Author_Name:</label>
            <input type="text" class="form-control" value="<?php 
           $author=$row['author'];
            $AuthQuery="Select u_name From registred_users where user_id=$author";
            $res=mysqli_query($conn,$AuthQuery);
            $authname=mysqli_fetch_assoc($res);
            echo $authname['u_name']
            ?>"  id="tags" placeholder="Enter tags separated by commas" disabled>
            <br>
          </div>
          <?php
        }
      }

      ?>
          <button type="submit" name="submit" value="submit" class="btn btn-primary">Publish</button>
        </form>
      </div>     
      
      

      <?php
include "adminFooter.php";

?>


