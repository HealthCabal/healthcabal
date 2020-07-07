<?php

require_once("classes/config.php");

if (isset($_REQUEST['post_slug'])) {
    $postSlug = $_GET['post_slug'];
    $fetchPost = "SELECT * FROM  hc_posts WHERE post_slug = '$postSlug'";
    $result = $conn->query($fetchPost);
}
if ($conn->affected_rows > 0) {
    $postData = $result->fetch_array();
    require_once("inc/articleheader.php");
    require_once("classes/posts.php");
    echo $postData['post_content'];


    //require_once("inc/footer.php");
    die();
} elseif (!isset($_REQUEST['post_slug'])) {
    $title = "HealthCabal - Credible Health Information Anytime, Anywhere";
    require_once("inc/mainheader.php");
    require_once("classes/posts.php");
    $value = 1;
    $tablename = "hc_posts";
    $columnName = "post_home_hero";



?>



    <div class="col-lg-12" id="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <br>
                    <h5 class="headtext">Trusted source of health information</h5>
                    <p class="headsub small">Health is life. Read from the right source</p>
                </div>
                <div class="col-sm">
                    <br>
                    <h5 class="headtext"> Professionally written</h5>
                    <p class="headsub small">Medically reviewed.</p>
                </div>

                <div class="col-sm">
                    <br>
                    <h5 class="headtext"> Talk with a doctor</h5>
                    <p class="headsub small"><span class="icon icon-message"></span> Chat | <span class="icon icon-phone"></span> Voice | <span class="icon icon-camera-video"></span> Video</p>

                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">

            <div class="col-md-6 shadow-right" id="homefeatured">
                <div id="homefeaturedimg">
                    <img class="grow img-fluid fit-image" src="<?php $postHandler->featuredPostData($conn, $value, $columnName, $tablename, "post_featured_img"); ?>"></img>
                </div>
                <div id="homefeaturedtitle">
                    <!--h6 class="headsub">CANCERS</h6--->
                    <a href="<?php $postHandler->featuredPostData($conn, $value, $columnName, $tablename, "post_slug"); ?>">
                        <h4 class="grow titletext"><?php $postHandler->featuredPostData($conn, $value, $columnName, $tablename, "post_title"); ?></h4>
                    </a>
                </div>

            </div>
            <div class="row col-md-3 col-sm-12">
                <div class="col-md top-right-col  shadow-right homeboxes" style="height:490px;" id="home-right">
                    <div class="homefeaturedimgs">
                        <img class="grow img-fluid fit-image" src="https://images.theconversation.com/files/325615/original/file-20200406-103690-wgn3l7.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=1200&h=1200.0&fit=crop">
                    </div>
                    <div style="height:auto" class="posttitle">
                        <h6 class="grow titletext mt-1">All you need to know about ventilators</h6>
                    </div>


                    <div style="height:auto" class="posttitle">
                        <?php
                        $start = 0;
                        $end = 5;
                        $postHandler->fetchTopRightPosts($conn, $start, $end);
                        ?>
                    </div>
                </div>

                <!-- Force next columns to break to new line at md breakpoint and up >
            <div class="w-100 d-none d-md-block"></div-->

                <!--div class="col-md shadow-right mobile-divs-home" style="height: auto; padding-top:0px;">
                <div class="homefeaturedimgs" style="height:100px">
                    <img class="grow img-fluid fit-image" src="https://i.guim.co.uk/img/media/4cdefdd5d3ea3beed021f40dd79836a1006585ab/0_214_5100_3060/master/5100.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=8ecdddf6b7f76c8a0b3b4ed605b749b6">
                </div>
                <div style="height:auto" class="posttitle mt-1 mb-4">
                    <h6 class="grow titletext">Living with colds: How some have coped with it</h6>
                    <p class="grow titletext">By Ezra Chimezie</p>
                </div>
            </div-->
            </div>
            <div class="col-md-3 shadow-right" style="height:490px; margin-top:10px; border-radius:10px 10px 10px 0px; background-color:white">
                <ul class="list-group-flush" style="margin-top:10px; border-top-right-radius:10px">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                </ul>
            </div>


        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="row col-md col-sm-12">
                <div class="col-md top-right-col  shadow-right second-row-home">
                    <div style="height:auto" class="posttitle"><br>
                        <p>Test Category</p>
                        <h5 class="grow titletext mt-1">All you need to know about ventilators and how they work - lorem ipsum dolor sit amet</h5>
                    </div>
                </div>

            </div>


            <div class="row col-md col-sm-12">
                <div class="col-md top-right-col  shadow-right second-row-home">
                    <div style="height:auto" class="posttitle"><br>
                        <p>Test Category</p>
                        <h5 class="grow titletext mt-1">All you need to know about ventilators and how they work - lorem ipsum dolor sit amet</h5>
                    </div>
                </div>

            </div>

            <div class="row col-md col-sm-12">
                <div class="col-md top-right-col  shadow-right second-row-home">
                    <div style="height:auto" class="posttitle"><br>
                        <p>Test Category</p>
                        <h5 class="grow titletext mt-1">All you need to know about ventilators and how they work - lorem ipsum dolor sit amet</h5>
                    </div>
                </div>

            </div>

            <div class="row col-md col-sm-12">
                <div class="col-md top-right-col  shadow-right second-row-home" style="background-color: #48EADD;">
                    <div style="height:auto" class=""><br>
                        <p>Test Category</p>
                        <h5 class="grow titletext mt-1">All you need to know about ventilators and how they work - lorem ipsum dolor sit amet</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <br>
        <br>
        <div class="row">
            <br>
            <h5 class="titletext">FEATURED HEALTH CONDITIONS</h5>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col featured-conditions mr-2">
                <img src="assets/images/hc_heart.svg">
                <h6 class="titletext center">HEART ATTACK</h6>
            </div>
            <div class="col-md featured-conditions mr-2">
                <img class="img-responsive" src="assets/images/hc_diabetes.svg">
                <h6 class="titletext center">DIABETES</h6>
            </div>
            <div class="col-md featured-conditions mr-2">
                Hello world
            </div>
            <div class="col-md featured-conditions mr-2">
                Hello world
            </div>
            <div class="col-md featured-conditions mr-2">
                Hello world
            </div>
            <div class="col-md featured-conditions">
                Hello world
            </div>
        </div>
    </div>
<?php

    require_once("inc/footer.php");
} else {
    $title = "404 - Page Not Found";
    require_once("inc/mainheader.php");
    require_once("404.php");
    require_once("inc/footer.php");
}
//require_once("inc/footer.php");
?>