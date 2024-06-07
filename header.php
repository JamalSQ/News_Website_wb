<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/custom.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>News Website</title>
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
                <li><a href="#">Home</a></li>
                <li><a href="#">About US</a></li>
                <li><a href="#">Contact US</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Travels</a></li>
                <li><a href="#">Contact US</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Travels</a></li>                
            </ul>
            <hr>
        </div>
        <div class="row sub-heading">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About US</a></li>
                <li><a href="#">Contact US</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Travels</a></li>
                <li><a href="#">Contact US</a></li>
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

            <div class="dropdown drawer-main-heeading">
                <div class="btnbar">
                    <button class="fw-bold">Home</button>
                    <i class="fa-solid fa-angle-down float-end"></i>
                </div>
                <ul>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="dropdown drawer-main-heeading">
                <div class="btnbar">
                    <button class="fw-bold">Sport</button>
                    <i class="fa-solid fa-angle-down float-end"></i>
                </div>
                <ul>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="dropdown drawer-main-heeading">
                <div class="btnbar">
                    <button class="fw-bold">News</button>
                    <i class="fa-solid fa-angle-down float-end"></i>
                </div>
                <ul>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="dropdown drawer-main-heeading">
                <div class="btnbar">
                    <button class="fw-bold">Bussiness</button>
                    <i class="fa-solid fa-angle-down float-end"></i>
                </div>
                <ul>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="dropdown drawer-main-heeading">
                <div class="btnbar">
                    <button class="fw-bold">Innovation</button>
                    <i class="fa-solid fa-angle-down float-end"></i>
                </div>
                <ul>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="dropdown drawer-main-heeading">
                <div class="btnbar">
                    <button class="fw-bold">Culture</button>
                    <i class="fa-solid fa-angle-down float-end"></i>
                </div>
                <ul>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="dropdown drawer-main-heeading">
                <div class="btnbar">
                    <button class="fw-bold">Travel</button>
                    <i class="fa-solid fa-angle-down float-end"></i>
                </div>
                <ul>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="dropdown drawer-main-heeading">
                <div class="btnbar">
                    <button class="fw-bold">Earth</button>
                    <i class="fa-solid fa-angle-down float-end"></i>
                </div>
                <ul>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                </ul>
            </div>           

        </div>
    </div>
    <!-- End Aside bar -->