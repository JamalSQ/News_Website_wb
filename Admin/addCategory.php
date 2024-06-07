


<!-- <style>
  /* custome soft button design start*/

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #e0e0e0;
    font-family: Arial, sans-serif;
    margin: 0;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 100%;
}

.soft-button {
    padding: 15px 30px;
    font-size: 16px;
    color: #333;
    background-color: #e0e0e0;
    border: none;
    border-radius: 10px;
    box-shadow: 9px 9px 16px #bebebe,
                -9px -9px 16px #ffffff;
    outline: none;
    cursor: pointer;
    transition: all 0.3s ease;
}

.soft-button:hover {
    box-shadow: 4px 4px 8px #bebebe,
                -4px -4px 8px #ffffff;
}

.soft-button:active {
    box-shadow: inset 4px 4px 8px #bebebe,
                inset -4px -4px 8px #ffffff;
}



/* custome soft button design End*/
</style> -->

<?php
include "conn.php";
include "adminHeader.php";


if (isset($_POST['addcategory'])) {
  $cat = $_POST['category'];

  if ($cat == "") {
    $msg = 2;
  } else {
    $query = "SELECT * from categories where name='$cat'";
    $res1 = mysqli_query($conn, $query);
    if (mysqli_num_rows($res1) > 0) {
      $msg = "found";
    } else {
      $query1 = "Insert into categories(name)Values('$cat')";
      $res = mysqli_query($conn, $query1);
      if ($res) {
        $msg = 1;
      } else {
        $msg = 0;
      }
    }
  }
}

if (isset($_POST['addsubcategory'])) {

  $subcat = $_POST['subcategory'];
  $maincat = $_POST['mainCat'];

  print_r($maincat);

  if ($subcat == "" || $maincat == "") {
    $msg1 = 2;
  } else {
    $query = "SELECT * FROM subcategories where name='$subcat'";
    $res1 = mysqli_query($conn, $query);
    if (mysqli_num_rows($res1) > 0) {
      $msg1 = "found";
    } else {
      $query1 = "INSERT INTO subcategories(name,main_cat_id)values('$subcat','$maincat')";
      $res = mysqli_query($conn, $query1);
      if ($res) {
        $msg1 = 1;
      } else {
        $msg1 = 0;
      }
    }
  }
}
?>
      <div class="col-md-10">
        <div class="row">

            <!-- Main Content start -->
          <div class="col-md-5 postContainer rounded bg-light" style="max-height:50vh; box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1); margin-top:50px; border:1px solid #F8F4E1;">
            <h2 class="mb-4 text-center">Add Main Category</h2>
            <form method="POST" action="">
              <div class="form-group">
                <label for="currentPassword">Name</label>
                <input type="text" class="form-control" name="category" id="category">
              </div>
              <br>
              <button type="submit" name="addcategory" class="btn btn-success">Add</button>
              <?php
              if (isset($msg)) {
                if ($msg == 1) {
                  echo '<span  class="fw-bold alert alert-success" style="">Category Added Successfull</span><br>';
                } elseif ($msg == 2) {
                  echo '<span  class="Error alert alert-danger" style="">Please fill the field.</span><br>';
                } elseif ($msg == "found") {
                  echo '<span  class="Error alert alert-danger" style="">Category Already Exist.</span><br>';
                } else {
                  echo '<span  class="Error alert alert-danger" style="">Failed To Add Category</span><br>';
                }
              }
              ?>
            </form>
          </div>

          <div class="col-md-5 postContainer rounded bg-light" style="max-height:50vh; margin-top:50px; border:1px solid #F8F4E1; box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);">
            <h2 class="mb-4 text-center">Add Sub Category</h2>
            <form method="POST" action="">
              <div class="form-group">
                <label for="currentPassword">Sub Category Name</label>
                <input type="text" class="form-control" name="subcategory" id="category">
              </div>
              <br>
              <label for="">Choose Main Category</label>
              <?php
              $query2 = "SELECT * FROM categories";
              $catdata = mysqli_query($conn, $query2);
              if ((mysqli_num_rows($catdata)) > 0) {
                echo '<select name="mainCat">';
                while ($arr = $catdata->fetch_assoc()) {
                  ?>
                  <option value="<?php echo $arr['id']; ?>">
                    <?php echo $arr['name']; ?>
                  </option>';
                <?php }
                echo '</select>';
              } else {
                echo "No category Found";
              }
              ?>
              <br>
              <br>
              <div class="container">
                <button type="submit" name="addsubcategory" class="btn btn-success soft-button">Add</button>
              </div>
              <?php
              if (isset($msg1)) {
                if ($msg1 == 1) {
                  echo '<span  class="fw-bold alert alert-success" style="">Category Added Successfull</span><br>';
                } elseif ($msg1 == 2) {
                  echo '<span  class="Error alert alert-danger" style="">Please fill the field.</span><br>';
                } elseif ($msg1 == "found") {
                  echo '<span  class="Error alert alert-danger" style="">Category Already Exist.</span><br>';
                } else {
                  echo '<span  class="Error alert alert-danger" style="">Failed To Add Category</span><br>';
                }
              }
              ?>
            </form>
          </div>
            
          <div class="col-md-10 mx-auto">
            <table class="table caption-top">
            
              <caption class="fw-bold my-4 ms-2 text-dark"><i class="fa-solid fa-table me-3"></i>LIST OF CATEGORIES AND THEIR SUB-CATEGORIES</caption>
              <thead>
                <tr>
                  <th scope="col">#ID</th>
                  <th scope="col"><i class="fas fa-folder me-2"></i>Category Name</th>
                  <th scope="col"><i class="fa-solid fa-layer-group me-2"></i>Sub-Categories</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = "SELECT categories.id as cat_id, 
                    categories.name as cat_name, 
                    GROUP_CONCAT(subcategories.name SEPARATOR ', ') as subcategorie
                    FROM categories 
                    LEFT JOIN subcategories ON subcategories.main_cat_id = categories.id
                    GROUP BY categories.id";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                      <th scope="row">
                        <?php echo $row['cat_id']; ?>
                      </th>
                      <td>
                        <?php echo $row['cat_name']; ?>
                      </td>
                      <td>
                        <?php echo $row['subcategorie']; ?>
                      </td>
                    </tr>
                    <?php
                  }
                } else {
                  ?>
                  <tr>
                    <td colspan="3">No categories found.</td>
                  </tr>
                  <?php
                }
                ?>
              </tbody>
            </table>
          </div>

        </div>
      </div>
      

 <?php
include "adminFooter.php";
?>