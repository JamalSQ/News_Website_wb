<?php
include "header.php";
?>

<!-- Start News content -->
<div class="container-fluid newsnews">
    <h1 class="text-danger fw-bold animated slideInLeft">NEWS</h1>
    <hr class="full-divider">
    <?php
    include "Admin/conn.php";
    $allposts = "SELECT * FROM posts";
    $allpostsres = mysqli_query($conn, $allposts);
    while ($allpostsresrow = mysqli_fetch_assoc($allpostsres)) {
        ?>
    <div class="row pt-5">
        <div class="col-md-9">
            <div class="row">
                <div class="col-sm-12 col-md-5 mt-5 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="SinglePost.php">
                        <h2>Card title Card title Card title </h2>
                        <p>This is a wider card with supporting text below as a natural lead-in to additional content.
                            This
                            content is a little bit longer.</p>
                        <p><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        <ul>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi, exercitati</li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi, exercitati</li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi, exercitati</li>
                        </ul>
                    </a>
                </div>
                <div class="col-sm-12 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="SinglePost.php">
                        <img src="images/alesia-kazantceva-VWcPlbHglYc-unsplash (1).jpg" class="large-img-size" alt=""
                            srcset="">
                    </a>
                </div>

                <hr class="pm">
                <?php
                $query1 = "SELECT * FROM posts ORDER BY date DESC LIMIT 3";
                $res1 = mysqli_query($conn, $query1);
                while ($belowcatrow = mysqli_fetch_assoc($res1)) {
                    ?>
                    <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.1s" style="height:400px;">
                        <img src="images/uploadedFiles/<?php echo $belowcatrow['image']; ?>" class="medium-img-size" alt="...">
                        <h5>
                            <?php echo $belowcatrow['title']; ?>
                        </h5>
                        <p class="card-text mb-3">
                            <?php echo truncateText($belowcatrow['content'], 35); ?>
                        </p>
                        <p>
                            <?php echo $belowcatrow['date']; ?> |
                            <?php echo $belowcatrow['author']; ?>
                        </p>
                    </div>
                <?php } ?>
                <hr>
            </div>
        </div>
        <div class="col-md-3 border bg-light  wow fadeInUp" data-wow-delay="0.3s">
            <?php
            $query = "SELECT * FROM posts ORDER BY date DESC LIMIT 2";
            $res = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($res)) {
                ?>
                <div>
                    <img src="images/uploadedFiles/<?php echo $row['image']; ?>" class=" small-img-size" alt="...">
                    <h5>
                        <?php echo ucwords($row['title']); ?>
                    </h5>
                    <p class="card-text mb-3">
                        <?php echo truncateText($row['content'], 10); ?> <i>...Read more</i>
                    </p>
                    <p>
                        <?php echo $row['date']; ?> |
                        <?php echo $row['author']; ?>
                    </p>
                    <hr>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
    <div class="row stripe mt-5">
        <div class="col-sm-6 col-md-4 col-lg-3 wow fadeInDown" data-wow-delay="0.1s">
            <h5>Stripe ipsum dolor sit amet</h5>
            <p class="card-text mb-3">Some quick example text to build on the card title and make up the
                bulk of the
                card's content.</p>
            <p>8 hrs ago | China</p>
            <hr>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 wow fadeInLeft" data-wow-delay="0.3s">
            <h5>Lorem ipsum dolor sit amet</h5>
            <p class="card-text mb-3">Some quick example text to build on the card title and make up the
                bulk of the
                card's content.</p>
            <p>8 hrs ago | China</p>
            <hr>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 wow fadeInDown" data-wow-delay="0.5s">
            <h5>Lorem ipsum dolor sit amet</h5>
            <p class="card-text mb-3">Some quick example text to build on the card title and make up the
                bulk of the
                card's content.</p>
            <p>8 hrs ago | China</p>
            <hr>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 wow fadeInRight" data-wow-delay="0.7s">
            <h5>Lorem ipsum dolor sit amet</h5>
            <p class="card-text mb-3">Some quick example text to build on the card title and make up the
                bulk of the
                card's content.</p>
            <p>8 hrs ago | China</p>
            <hr>
        </div>
    </div>
</div>
<!-- End News content -->

<!-- Start Feaatures and analysis content -->
<div class="container-fluid pt-5">
    <hr class="full-divider">
    <h3 class="py-2 text-danger wow animate fadeInUp" data-wow-delay="0.3s">Featured And Analysis</h3>

    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-sm-12 col-md-5 mt-5">
                    <h2>Card title Card title Card title </h2>
                    <p>This is a wider card with supporting text below as a natural lead-in to additional content.
                        This
                        content is a little bit longer.</p>
                    <p><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    <ul>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi, exercitati</li>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi, exercitati</li>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi, exercitati</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-7">
                    <img src="images/alesia-kazantceva-VWcPlbHglYc-unsplash (1).jpg" class="large-img-size" alt=""
                        srcset="">
                </div>
                <hr class="pm">

                <div class="col-sm-6 col-md-4">
                    <img src="images/andrew-small-EfhCUc_fjrU-unsplash.jpg" class="medium-img-size" alt="...">
                    <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                    <p class="card-text mb-3">Some quick example text to build on the card title and make up the
                        bulk of the
                        card's content.</p>
                    <p>8 hrs ago | China</p>
                    <hr>
                </div>
                <div class="col-sm-6 col-md-4">
                    <img src="images/kimberly-farmer-lUaaKCUANVI-unsplash.jpg" class="medium-img-size" alt="...">
                    <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                    <p class="card-text mb-3">Some quick example text to build on the card title and make up the
                        bulk of the
                        card's content.</p>
                    <p>8 hrs ago | China</p>
                    <hr>
                </div>
                <div class="col-sm-6 col-md-4">
                    <img src="images/samantha-gades-BlIhVfXbi9s-unsplash.jpg" class="medium-img-size" alt="...">
                    <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                    <p class="card-text mb-3">Some quick example text to build on the card title and make up the
                        bulk of the
                        card's content.</p>
                    <p>8 hrs ago | China</p>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-md-3 border bg-light">
            <div>
                <img src="images/wp3022773-3d-wallpaper-for-laptop.jpg" class="small-img-size" alt="...">
                <h5>jamal ipsum dolor sit amet, consectetur</h5>
                <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of
                    the
                    card's content.</p>
                <p>8 hrs ago | China</p>
                <hr>
            </div>
            <div>
                <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of
                    the
                    card's content.</p>
                <p>8 hrs ago | China</p>
            </div>
            <div>
                <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of
                    the
                    card's content.</p>
                <p>8 hrs ago | China</p>

            </div>
        </div>
    </div>
</div>
<!-- End Feaatures and analysis content -->

<!-- Start Most Watched section -->
<div class="container-fluid pt-5">
    <hr class="full-divider">
    <h3 class="py-2 text-danger">Most Watched</h3>
    <div class="row margin-auto stripe">
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="col-md-2">
                <i class="fa-solid fa-1 fa-xl icon-color"></i>
            </div>
            <div class="col-md-10">
                <p class="card-text mb-3"><b><i class="fa-brands fa-google-play"></i>WATCH </b>Some quick
                    example text to build on the card title and make up the
                    bulk of the
                    card's content.</p>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="col-md-2">
                <i class="fa-solid fa-2 fa-xl icon-color"></i>
            </div>
            <div class="col-md-10">
                <p class="card-text mb-3"><b><i class="fa-brands fa-google-play"></i>WATCH </b>Some quick
                    example text to build on the card title and make up the
                    bulk of the
                    card's content.</p>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="col-md-2">
                <i class="fa-solid fa-3 fa-xl icon-color"></i>
            </div>
            <div class="col-md-10">
                <p class="card-text mb-3"><b><i class="fa-brands fa-google-play"></i>WATCH </b>Some quick
                    example text to build on the card title and make up the
                    bulk of the
                    card's content.</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="col-md-2">
                <i class="fa-solid fa-4 fa-xl icon-color"></i>
            </div>
            <div class="col-md-10">
                <p class="card-text mb-3"><b><i class="fa-brands fa-google-play"></i>WATCH </b>Some quick
                    example text to build on the card title and make up the
                    bulk of the
                    card's content.</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="col-md-2">
                <i class="fa-solid fa-5 fa-xl icon-color"></i>
            </div>
            <div class="col-md-10">
                <p class="card-text mb-3"><b><i class="fa-brands fa-google-play"></i>WATCH </b>Some quick
                    example text to build on the card title and make up the
                    bulk of the
                    card's content.</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="col-md-2">
                <i class="fa-solid fa-6 fa-xl icon-color"></i>
            </div>
            <div class="col-md-10">
                <p class="card-text mb-3"><b><i class="fa-brands fa-google-play"></i>WATCH </b>Some quick
                    example text to build on the card title and make up the
                    bulk of the
                    card's content.</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="col-md-2">
                <i class="fa-solid fa-7 fa-xl icon-color"></i>
            </div>
            <div class="col-md-10">
                <p class="card-text mb-3"><b><i class="fa-brands fa-google-play"></i>WATCH </b>Some quick
                    example text to build on the card title and make up the
                    bulk of the
                    card's content.</p>
            </div>
        </div>
    </div>
</div>
<!-- End Most Watched section -->

<!-- Start Also News content -->
<div class="container-fluid pt-5">
    <hr class="full-divider">
    <h3 class="py-2 text-danger">Also In News</h3>

    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-sm-12 col-md-5 mt-5">
                    <h2>Biden hosts star-studded NYC fundraiser with Obama and Clinton </h2>
                    <p>This is a wider card with supporting text below as a natural lead-in to additional content.
                        This
                        content is a little bit longer.</p>
                    <p><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    <ul>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi, exercitati</li>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi, exercitati</li>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi, exercitati</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-7">
                    <img src="images/alesia-kazantceva-VWcPlbHglYc-unsplash (1).jpg" class="large-img-size" alt=""
                        srcset="">
                </div>
                <hr class="pm">

                <div class="col-sm-6 col-md-4">
                    <img src="images/andrew-small-EfhCUc_fjrU-unsplash.jpg" class="medium-img-size" alt="...">
                    <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                    <p class="card-text mb-3">Some quick example text to build on the card title and make up the
                        bulk of the
                        card's content.</p>
                    <p>8 hrs ago | China</p>
                    <hr>
                </div>
                <div class="col-sm-6 col-md-4">
                    <img src="images/kimberly-farmer-lUaaKCUANVI-unsplash.jpg" class="medium-img-size" alt="...">
                    <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                    <p class="card-text mb-3">Some quick example text to build on the card title and make up the
                        bulk of the
                        card's content.</p>
                    <p>8 hrs ago | China</p>
                    <hr>
                </div>
                <div class="col-sm-6 col-md-4">
                    <img src="images/samantha-gades-BlIhVfXbi9s-unsplash.jpg" class="medium-img-size" alt="...">
                    <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                    <p class="card-text mb-3">Some quick example text to build on the card title and make up the
                        bulk of the
                        card's content.</p>
                    <p>8 hrs ago | China</p>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-md-3 border bg-light">
            <div>
                <img src="images/wp3022773-3d-wallpaper-for-laptop.jpg" class=" small-img-size" alt="...">
                <h5>jamal ipsum dolor sit amet, consectetur</h5>
                <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of
                    the
                    card's content.</p>
                <p>8 hrs ago | China</p>
                <hr>
            </div>
            <div>
                <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of
                    the
                    card's content.</p>
                <p>8 hrs ago | China</p>
            </div>
            <div>
                <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of
                    the
                    card's content.</p>
                <p>8 hrs ago | China</p>

            </div>
        </div>
    </div>
</div>
<!-- End Also News content -->

<!-- Start Israel-Gaza war category section -->
<div class="container-fluid pt-5">
    <hr class="full-divider">
    <h3 class="py-2 text-danger">Israel-Gaza War</h3>
    <div class="row margin-auto">
        <div class="col-sm-6 col-md-4 col-lg-3">
            <img src="images/andrew-small-EfhCUc_fjrU-unsplash.jpg" class="small-img-size" alt="...">
            <h5>Lorem ipsum dolor sit amet, consectetur</h5>
            <p class="card-text mb-3">Some quick example text to build on the card title and make up the
                bulk of the
                card's content.</p>
            <p>8 hrs ago | China</p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <img src="images/kimberly-farmer-lUaaKCUANVI-unsplash.jpg" class="small-img-size" alt="...">
            <h5>Lorem ipsum dolor sit amet, consectetur</h5>
            <p class="card-text mb-3">Some quick example text to build on the card title and make up the
                bulk of the
                card's content.</p>
            <p>8 hrs ago | China</p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <img src="images/samantha-gades-BlIhVfXbi9s-unsplash.jpg" class="small-img-size" alt="...">
            <h5>Lorem ipsum dolor sit amet, consectetur</h5>
            <p class="card-text mb-3">Some quick example text to build on the card title and make up the
                bulk of the
                card's content.</p>
            <p>8 hrs ago | China</p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <img src="images/alesia-kazantceva-VWcPlbHglYc-unsplash (1).jpg" class="small-img-size" alt="...">
            <h5>Lorem ipsum dolor sit amet, consectetur</h5>
            <p class="card-text mb-3">Some quick example text to build on the card title and make up the
                bulk of the
                card's content.</p>
            <p>8 hrs ago | China</p>
        </div>
    </div>

</div>
<!-- End Israel-Gaza war section -->

<!-- End Most read section -->
<div class="container-fluid my-5">
    <hr class="full-divider">
    <h3 class="py-2 text-danger">Most Read</h3>
    <div class="row margin-auto stripe">
        <div class="col-md-3 d-inline-flex">
            <div class="col-md-2">
                <i class="fa-solid fa-1 fa-xl icon-color"></i>
            </div>
            <div class="col-md-10">
                <p class="card-text mb-3">Some quick example text to build on card's content.</p>
            </div>
        </div>
        <div class="col-md-3 d-inline-flex">
            <div class="col-md-2">
                <i class="fa-solid fa-2 fa-xl icon-color"></i>
            </div>
            <div class="col-md-10">
                <p class="card-text mb-3">Some quick example text to build on card's content.</p>
            </div>
        </div>
        <div class="col-md-3 d-inline-flex">
            <div class="col-md-2">
                <i class="fa-solid fa-3 fa-xl icon-color"></i>
            </div>
            <div class="col-md-10">
                <p class="card-text mb-3">Some quick example text to build on card's content.</p>
            </div>
        </div>
        <div class="col-md-3 d-inline-flex">
            <div class="col-md-2">
                <i class="fa-solid fa-4 fa-xl icon-color"></i>
            </div>
            <div class="col-md-10">
                <p class="card-text mb-3">Some quick example text to build on card's content.</p>
            </div>
        </div>
        <div class="col-md-3 d-inline-flex">
            <div class="col-md-2">
                <i class="fa-solid fa-5 fa-xl icon-color"></i>
            </div>
            <div class="col-md-10">
                <p class="card-text mb-3">Some quick example text to build on card's content.</p>
            </div>
        </div>
        <div class="col-md-3 d-inline-flex">
            <div class="col-md-2">
                <i class="fa-solid fa-6 fa-xl icon-color"></i>
            </div>
            <div class="col-md-10">
                <p class="card-text mb-3">Some quick example text to build on card's content.</p>
            </div>
        </div>
        <div class="col-md-3 d-inline-flex">
            <div class="col-md-2">
                <i class="fa-solid fa-7 fa-xl icon-color"></i>
            </div>
            <div class="col-md-10">
                <p class="card-text mb-3">Some quick example text to build on card's content.</p>
            </div>
        </div>
        <div class="col-md-3 d-inline-flex">
            <div class="col-md-2">
                <i class="fa-solid fa-8 fa-xl icon-color"></i>
            </div>
            <div class="col-md-10">
                <p class="card-text mb-3">Some quick example text to build on card's content.</p>
            </div>
        </div>
    </div>
</div>
<!-- End Most read section -->

<!-- End sport News content -->
<div class="container-fluid">
    <hr class="full-divider">
    <h3 class="py-2 text-danger">Sports</h3>

    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-sm-12 col-md-5 mt-5">
                    <h2>Biden hosts star-studded NYC fundraiser with Obama and Clinton </h2>
                    <p>This is a wider card with supporting text below as a natural lead-in to additional content.
                        This
                        content is a little bit longer.</p>
                    <p><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    <ul>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi, exercitati</li>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi, exercitati</li>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi, exercitati</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-7">
                    <img src="images/alesia-kazantceva-VWcPlbHglYc-unsplash (1).jpg" class="large-img-size" alt=""
                        srcset="">
                </div>
                <hr class="pm">

                <div class="col-sm-6 col-md-4">
                    <img src="images/andrew-small-EfhCUc_fjrU-unsplash.jpg" class="medium-img-size" alt="...">
                    <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                    <p class="card-text mb-3">Some quick example text to build on the card title and make up the
                        bulk of the
                        card's content.</p>
                    <p>8 hrs ago | China</p>
                    <hr>
                </div>
                <div class="col-sm-6 col-md-4">
                    <img src="images/kimberly-farmer-lUaaKCUANVI-unsplash.jpg" class="medium-img-size" alt="...">
                    <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                    <p class="card-text mb-3">Some quick example text to build on the card title and make up the
                        bulk of the
                        card's content.</p>
                    <p>8 hrs ago | China</p>
                    <hr>
                </div>
                <div class="col-sm-6 col-md-4">
                    <img src="images/samantha-gades-BlIhVfXbi9s-unsplash.jpg" class="medium-img-size" alt="...">
                    <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                    <p class="card-text mb-3">Some quick example text to build on the card title and make up the
                        bulk of the
                        card's content.</p>
                    <p>8 hrs ago | China</p>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-md-3 border bg-light">
            <div>
                <img src="images/wp3022773-3d-wallpaper-for-laptop.jpg" class=" small-img-size" alt="...">
                <h5>jamal ipsum dolor sit amet, consectetur</h5>
                <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of
                    the
                    card's content.</p>
                <p>8 hrs ago | China</p>
                <hr>
            </div>
            <div>
                <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of
                    the
                    card's content.</p>
                <p>8 hrs ago | China</p>
            </div>
            <div>
                <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of
                    the
                    card's content.</p>
                <p>8 hrs ago | China</p>

            </div>
        </div>
    </div>
</div>
<!-- End sport News content -->
<?php

include "footer.php";

?>