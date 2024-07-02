<?php
function truncateText($text, $num_words) {
    $words = explode(" ", $text);
    $truncated_text = implode(" ", array_slice($words, 0, $num_words));
    return $truncated_text;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate/animate.css">
    <link rel="stylesheet" href="js/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>News Website</title>
    <style>
        #menu {
            display: none;
        }

        #menu.show {
            display: block;
        }
    </style>
</head>

<body>
    <!-- Start of header -->
    <div class="container-fluid header bgColor-primary ">
        <div class="row pt-3">

            <div class="col-sm-2 col-md-5">

                <a id="hamburg"><i class="fa-solid fa-bars fa-xl pe-3"></i></a>
                <i class="fa-solid fa-magnifying-glass fa-xl"></i>
            </div>
            <div class="col-sm-8 col-md-4">
                <h3>World Wide News</h3>
            </div>
            <div class="col-md-3 signlogin">
                <a href="registration.php" class="text-white"><button class="btn btn-dark">Register</button></a>
                <a href="login.php" class="ps-3"><button class="btn btn-outline-primary text-black">SignIn</button></a>
            </div>
        </div>
        <div class="row main-heading">
            <hr>
            <ul>
                <?php
                include "Admin/conn.php";
                $query = "SELECT id,name FROM categories";
                $res = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                    <li><a href="<?php echo $row['id']; ?>">
                            <?php echo ucwords($row['name']); ?>
                        </a></li>
                <?php } ?>
            </ul>
            <hr>
        </div>
        <div class="row sub-heading">
            <ul>
                <?php
                include "Admin/conn.php";
                $query = "SELECT id,name FROM subcategories";
                $res = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                    <li><a href="<?php echo $row['id']; ?>">
                            <?php echo ucwords($row['name']); ?>
                        </a></li>
                <?php } ?>
            </ul>
            <hr>
        </div>
    </div>
    <!-- End of header -->

    <!-- start Aside bar -->
    <div id="drawercontent" class="bg-light">
        <div class="bg-info p-5 text-white">

            <button type="button" id="closebtn" class="btn-close text-reset float-end" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            <h5>World Wide News</h5>
            <hr>
            <div class="col-md-3 signloginindrawer">
                <a href="registration.php" class="text-white"><button class="btn btn-dark">Register</button></a>
                <a href="login.php"><button class="btn btn-outline-primary text-black">SignIn</button></a>
            </div>
        </div>

        <div class="drawer-body pt-3">
                     <?php
                    include "Admin/conn.php";
                    $query = "SELECT id,name FROM categories";
                    $res = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($res)) {
                        ?>
            <div class="dropdown drawer-main-heeading">
                <div class="btnbar">
                   
                        <button class="fw-bold">
                            <?php echo ucwords($row['name']); ?>
                        </button>
                    
                    <i class="fa-solid fa-angle-down float-end"></i>
                </div>
                <ul>
                    <?php  
                    $id=$row['id'];
                    $query1 = "SELECT id,name FROM subcategories where main_cat_id=$id";
                    $res1 = mysqli_query($conn, $query1);
                    
                    while ($subCat = mysqli_fetch_assoc($res1)) {
                        ?>
                    <li><a href="<?php echo $subCat['id']; ?>"> <?php echo ucwords($subCat['name']); ?></a></li>
                   <?php }?> 

                </ul>
            </div>
            <?php } ?>





        </div>
    </div>
    <!-- End Aside bar -->