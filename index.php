<?php

    require_once("classes/config.php");
    require_once('classes/posts.php');

    if (isset($_REQUEST['post_slug'])) {
        $postSlug = $_GET['post_slug'];
        $fetchPost = "SELECT * FROM  hc_posts WHERE post_slug = '$postSlug'";
        //die($fetchPost);
        $result = $conn->query($fetchPost);
    }
    if ($conn->affected_rows > 0) {
        $postData = $result->fetch_array();
        require_once("inc/articleheader.php");
        require_once("classes/posts.php");
    ?>
<div class="col-lg-12" id="topbar" style="background-color:mintcream; padding-top:0px">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md">
                <br>
                <!--img src="https://tpc.googlesyndication.com/simgad/4917489439033249397"-->
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>

<div class="col-lg-12" id="topbar" style="background-color: white;">
    <div class="container">
        <div class="row">
            <?php
            echo "<p class='h1 text-dark articleheader'>" . $postData['post_title'] . "</p>";
            ?>
        </div>
        <div style="display: inline-block; margin-top:30px; margin-bottom: 30px">
            <p> <?php

                if ($postData['post_author'] == 0) {
                    echo "Medically Reviewed By <strong>" . $postData['fact_checked_by'] . ", MD</strong><br>";
                    $publishedDate = strtotime($postData['post_date']);
                    echo date('F j, Y', $publishedDate);
                    //echo $postData['post_date'];
                } else {
                    $author = $postData['post_author'];
                    $author_id = $conn->query('SELECT * FROM hc_users WHERE ID = ' . $author);
                    $authorName = $author_id->fetch_assoc();
                    echo "<strong>Written by " . $authorName['user_fname'] . " " . $authorName['user_lname'] . "</strong><br>";

                    $publishedDate = strtotime($postData['post_date']);
                    echo date('F j, Y', $publishedDate);
                }

                ?>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <img class="img-fluid fit-image" src="<?php echo $postData['post_featured_img']; ?>" alt="<?php echo $postData['post_title']; ?>">


            <div class="row">
                <div class="col-sm-3" style="padding-top:30px">
                    <!--img src=""-->
                    <?php
                    $series = array("", "NULL", NULL, 0);
                    if (!in_array($postData['post_series'], $series)) {
                        $series = $postData['post_series'];
                        $query = "SELECT post_series_heading, post_slug FROM hc_posts WHERE post_series = $series ORDER BY series_priority ASC";
                        //die($query);
                        $fetchHeadings = $conn->query($query);
                        while ($seriesHeadings = $fetchHeadings->fetch_assoc()) {
                            $curURL_s =  "https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
                            $curURL =  "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
                            if ($curURL_s == $homeurl . $seriesHeadings['post_slug'] || $curURL ==  $homeurl . $seriesHeadings['post_slug']) {
                                $activeClass = "active-class";
                            } else {
                                $activeClass = "";
                            }

                            echo '<a href="' . $homeurl . $seriesHeadings['post_slug'] . '"><button class="btn btn-sm series-buttons ' . $activeClass . '">' . $seriesHeadings['post_series_heading'] . '</button></a><br>';
                        }
                    }

                    ?>
                </div>

                <div class="col-sm" style="padding-top:30px">
                    <?php echo $postData['post_content']; ?>



                    <!--Mailchimp starts here-->
                    <div class="container" style="background-color: #05e4c0; border-radius: 0px 20px 0px 20px; margin-top: 50px; margin-bottom:20">
                        <!-- Begin Mailchimp Signup Form -->
                        <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
                        <style type="text/css">
                            #mc_embed_signup {
                                background: transparent;
                                clear: left;
                                font: 14px Helvetica, Arial, sans-serif;
                                width: 100%;
                                color: #00323d;
                                padding-top: 30px;
                                padding-bottom: 50px;
                                /* padding-right: 30px;
                                    padding-left: 100px; */
                            }

                            /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                        </style>
                        <div id="mc_embed_signup">
                            <h2>Stay Updated!</h2>
                            <p>Subscribe to our newsletter.
                            <h5>Get a weekly roundup of our top articles and stay informed about the latest and best practices to keep you healthy and strong.</h5>
                            <form action="https://healthcabal.us1.list-manage.com/subscribe/post?u=b3c0b9b27da524abe9acfd0df&amp;id=6749df06cb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll" style="width: 100%;">
                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b3c0b9b27da524abe9acfd0df_6749df06cb" tabindex="-1" value=""></div>
                                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" style="background-color: #00323d;"></div>
                                </div>
                            </form>
                            <strong class="center">Follow us on <a href="https://twitter.com/healthcabal" target="_blank">Twitter</a> and <a href="https://facebook.com/healthcabal" target="_blank"> Facebook</a>.</strong>

                        </div>

                        <!--End mc_embed_signup-->

                    </div>
                </div>

            </div>

        </div>


        <div class="col-md ad-sidebar article-right-sidebar" style="margin: 0 auto; width:300px">
            <!--Trying to navigate social interaction during a summer-->

            <a href="!#"><img src="https://res.cloudinary.com/healthcabal/image/upload/v1630961783/articleimages/WellXo-banner_zrvcze.png" style="position:static"></a>
        </div>
    </div>
</div>





<div class="container">
    <div class="row">


        <?php
        if (!empty($postData['post_child_cat']) || $postData['post_child_cat'] !== 0 || $postData['post_child_cat'] !== NULL) {


            $post_category_id = $postData['post_category'];
            $queryRelated = "SELECT * FROM hc_posts WHERE post_category = $post_category_id LIMIT 0,7";
            $runQuery = $conn->query($queryRelated);
            while ($similarPosts = $runQuery->fetch_assoc()) {
                echo '
            <div class="row col-md-3 col-sm-12" style="padding-right:20px">
            <div class="col-md top-right-col  shadow-right second-row-home" style="height:auto; padding-left:0px; padding-right:0px; padding-top:15px">
            <a href="' . $homeurl . $similarPosts["post_slug"] . '">    
            <div>
                    <img src="' . $similarPosts['post_featured_img'] . '" class="homefeaturedimgs">
                </div>
                <div class="posttitle mobile-related" style="padding:20px"><br>
                    <!--p>Test Category</p-->
                    <h5 class="grow titletext mt-1">' . $similarPosts['post_title'] . '</h5>

                </div>
                </a>
            </div>

        </div>';
            }
        }
        ?>



    </div>
</div>


<?php



        require_once("inc/footer.php");
        die();
    } elseif (!isset($_REQUEST['post_slug'])) {
        $title = "Healthcabal - Reimagining Health Information";
        $description = "HealthCabal is a leading health information website, providing unbiased health information that is written and verified by health professionals.";
        require_once("inc/mainheader.php");
        require_once("classes/posts.php");
        $value = 1;
        $tablename = "hc_posts";
        $columnName = "post_home_hero";



?>



    <div class="col-lg-12" id="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <br>
                    <h5 class="headtext">Reimagining Health Information</h5>
                    <p class="headsub">Trusted Source of Health Information</p>
                </div>
                <div class="col-sm-4">
                    <br>
                    <h5 class="headtext"> Written By Health Professionals</h5>
                    <p class="headsub">Reviewed By Certified Physicians</p>
                </div>

                <div class="col-sm">
                    <br>
                    <h5 class="headtext"> <a href="!#" target="_blank" style="color:white"> Talk With a Doctor</a></h5>
                    <p class="headsub"><span class="icon icon-message"></span> Chat | <span class="icon icon-phone"></span> Voice | <span class="icon icon-camera-video"></span> Video</p>

                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">

            <div class="col-md-6 shadow-right" id="homefeatured">
                <a href="<?php $postHandler->featuredPostData($conn, $value, $columnName, $tablename, "post_slug"); ?>">
                    <div id="homefeaturedimg">
                        <img class="grow img-fluid fit-image" src="<?php $postHandler->featuredPostData($conn, $value, $columnName, $tablename, "post_featured_img"); ?>"></img>
                    </div>
                    <div id="homefeaturedtitle">
                        <!--h6 class="headsub">CANCERS</h6--->

                        <h4 class="grow titletext"><?php $postHandler->featuredPostData($conn, $value, $columnName, $tablename, "post_title"); ?></h4>
                        <p> <?php

                            $query = "SELECT * FROM hc_posts WHERE post_home_hero = 1";
                            $result = $conn->query($query);
                            $featuredPostInfo = $result->fetch_assoc();
                            if ($featuredPostInfo['post_author'] == 0) {
                                echo "Medically Reviewed By " . $featuredPostInfo['fact_checked_by'] . ", MD";
                            } else {
                                $author_id = $featuredPostInfo['post_author'];
                                $query = "SELECT * FROM hc_users WHERE ID = " . $author_id;
                                $result = $conn->query($query);
                                $authorInfo = $result->fetch_assoc();
                                if (empty($authorInfo['user_prefix'])) {
                                    $title = "";
                                } else {
                                    $title = ", " . $authorInfo['user_prefix'];
                                }
                                echo "By " . $authorInfo['user_fname'] . " " . $authorInfo['user_lname'];
                            }

                            ?>
                        </p>
                    </div>
                </a>

            </div>
            <div class="row col-md-3 col-sm-12">
                <div class="col-md top-right-col  shadow-right homeboxes" style="height:490px;" id="home-right">
                    <?php
                    $query = "SELECT * FROM hc_posts WHERE post_home_featured = 1 AND post_status = 1 ORDER BY ID DESC LIMIT 1, 1";
                    $fetchRight = $conn->query($query);
                    while ($topRight = $fetchRight->fetch_assoc()) {
                        echo ' <div class="homefeaturedimgs">
                        <img class="grow img-fluid fit-image" src="' . $topRight['post_featured_img'] . '">
                    </div>
                    <div style="height:auto" class="posttitle">
                       <a href="' . $topRight['post_slug'] . '"> <h6 class="grow titletext mt-1">' . $topRight['post_title'] . '</h6></a>
                    </div>';
                    }
                    ?>
                    <div style="height: 40px">
                    </div>
                    <?php
                    $query = "SELECT * FROM hc_posts WHERE post_home_featured = 1 AND post_status = 1 ORDER BY ID DESC LIMIT 2, 21";
                    $fetchRight = $conn->query($query);
                    while ($topRight = $fetchRight->fetch_assoc()) {
                        echo ' <div class="homefeaturedimgs">
                        <img class="grow img-fluid fit-image" src="' . $topRight['post_featured_img'] . '">
                    </div>
                    <div style="height:auto" class="posttitle">
                       <a href="' . $topRight['post_slug'] . '"> <h6 class="grow titletext mt-1">' . $topRight['post_title'] . '</h6></a>
                    </div>';
                    }
                    ?>



                </div>


            </div>
            <div class="col-md-3 shadow-right" id="mostpopular">
                <h4 style="padding-top:10px">Check out the most popular topics</h4>
                <p style="color:black">These are the most-read topics at the moment.</p>

                <button class="btn btn-sm home-buttons" style="background-color:#053641">
                    Stroke
                </button>

                <button class="home-buttons btn btn-sm " style="background-color:#053641;">
                    High Blood Pressure
                </button>

                <button class="home-buttons btn btn-sm " style="background-color:#053641">
                    Diabetes
                </button>

                <button class="home-buttons btn btn-sm " style="background-color:#053641">
                    Heart Attack
                </button>
            </div>


        </div>
    </div>


    <div class="container">


        <div class="row">


            <?php
            $start = 0;
            $end = 4;
            $postHandler->fetchFeaturedPosts($conn, $start, $end, $homeurl)
            ?>
            <!--div class="row col-md col-sm-12">
                <div class="col-md top-right-col  shadow-right second-row-home">
                    <div style="height:auto" class="posttitle"><br>
                        <p>Test Categoryjhjh</p>
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

            </div-->

        </div>
    </div>
    <div class="container">
        <br>
        <br>
        <div class="row">
            <br>
            <!--h5 class="titletext">FEATURED HEALTH CONDITIONS</h5-->
        </div>
    </div>


    <div class="featuredhealth-conditions">
        <h5 class="featuredhealth-conditions-features titletext">FEATURED HEALTH CONDITIONS</h5>

        <div class="featuredhealth-conditions-section">



            <div class="featuredhealth-conditions-content">
                <div class="featuredhealth-conditions-content-sub">
                    <img src="assets/images/hc_heart-attack.png" alt="Heart attack" class="featuredhealth-conditions-content-image">
                </div>

                <div class="healthcondition-title">
                    <span class="healthcondition-tile-content"><strong>HEART ATTACK</strong></span>
                    <!-- <p class="featuredhealth-conditions-content-title">HEART ATTACK -->
                    </p>
                </div>
            </div>

            <div class="featuredhealth-conditions-content">
                <div class="featuredhealth-conditions-content-sub">
                    <img src="assets/images/hc_diabetes.png" alt="Diabetes" class="featuredhealth-conditions-content-image">
                </div>

                <div class="healthcondition-title">
                    <span class="healthcondition-tile-content"><strong>DIABETES</strong></span>
                    <!-- <p class="featuredhealth-conditions-content-title">HEART ATTACK -->
                    </p>
                </div>
            </div>

            <div class="featuredhealth-conditions-content">
                <div class="featuredhealth-conditions-content-sub">
                    <img src="assets/images/hc_cancer.png" alt="Cancer" class="featuredhealth-conditions-content-image">
                </div>

                <div class="healthcondition-title">
                    <span class="healthcondition-tile-content"><strong>CANCER</strong></span>
                    <!-- <p class="featuredhealth-conditions-content-title">HEART ATTACK -->
                    </p>
                </div>
            </div>

            <div class="featuredhealth-conditions-content">
                <div class="featuredhealth-conditions-content-sub">
                    <img src="assets/images/hc_stroke.png" alt="Stroke" class="featuredhealth-conditions-content-image">
                </div>

                <div class="healthcondition-title">
                    <span class="healthcondition-tile-content"><strong>STROKE</strong></span>
                    <!-- <p class="featuredhealth-conditions-content-title">HEART ATTACK -->
                    </p>
                </div>
            </div>

            <div class="featuredhealth-conditions-content">
                <div class="featuredhealth-conditions-content-sub">
                    <img src="assets/images/hc_fever.png" alt="Fever" class="featuredhealth-conditions-content-image">
                </div>

                <div class="healthcondition-title">
                    <span class="healthcondition-tile-content"><strong>FEVER</strong></span>
                    <!-- <p class="featuredhealth-conditions-content-title">HEART ATTACK -->
                    </p>
                </div>
            </div>

            <div class="featuredhealth-conditions-content">
                <div class="featuredhealth-conditions-content-sub">
                    <img src="assets/images/hc_std.png" alt="STDs" class="featuredhealth-conditions-content-image">
                </div>

                <div class="healthcondition-title">
                    <span class="healthcondition-tile-content"><strong>STDs</strong></span>
                    <!-- <p class="featuredhealth-conditions-content-title">HEART ATTACK -->
                    </p>
                </div>
            </div>





        </div>
    </div>





    <!--div class="container" id="desktopconditions">
        <div class="row">
            <div class="col-sm featured-conditions mr-2">
                <img class="img-fluid featured-conditions" src="assets/images/hc_heart-attack.png">
                <h6 class="titletext center">HEART ATTACK</h6>
            </div>
            <div class="col-sm featured-conditions mr-2">
                <img class="img-fluid featured-conditions" src="assets/images/hc_diabetes.png">
                <h6 class="titletext center">DIABETES</h6>
            </div>
            <div class="col-sm featured-conditions mr-2">
                <img class="img-fluid featured-conditions" src="assets/images/hc_cancer.png">
                <h6 class="titletext center">CANCER</h6>
            </div>
            <div class="col-sm featured-conditions mr-2">
                <img class="img-fluid featured-conditions" src="assets/images/hc_stroke.png">
                <h6 class="titletext center">STROKE</h6>
            </div>
            <div class="col-sm featured-conditions mr-2">
                <img class="img-fluid featured-conditions" src="assets/images/hc_fever.png">
                <h6 class="titletext center">FEVER</h6>
            </div>
            <div class="col-sm featured-conditions">
                <img class="img-fluid featured-conditions" src="assets/images/hc_std.png">
                <h6 class="titletext center">STDs</h6>
            </div>
        </div>
    </div-->


    <!--div class="container" id="mobileconditions">
        <div class="row">
            <div class="col-sm text-center">
                <img style="border-radius:50%; height:100px" src="assets/images/hc_heart-attack.png">
                <div class="w-100"></div>
                <h6 class="h6">HEART ATTACK</h6>
            </div>

            <div class="col-sm text-center">
                <img style="border-radius:50%; height:100px" src="assets/images/hc_diabetes.png">
                <div class="w-100"></div>
                <h6 class="h6">DIABETES</h6>
            </div>

            <div class="col-sm text-center">
                <img style="border-radius:50%; height:100px" src="assets/images/hc_cancer.png">
                <div class="w-100"></div>
                <h6 class="h6">CANCER</h6>
            </div>

            <div class="col-sm text-center">
                <img style="border-radius:50%; height:100px" src="assets/images/hc_stroke.png">
                <div class="w-100"></div>
                <h6 class="h6">STROKE</h6>
            </div>

            <div class="col-sm text-center">
                <img style="border-radius:50%; height:100px" src="assets/images/hc_fever.png">
                <div class="w-100"></div>
                <h6 class="h6">FEVER</h6>
            </div>

            <div class="col-sm text-center">
                <img style="border-radius:50%; height:100px" src="assets/images/hc_std.png">
                <div class="w-100"></div>
                <h6 class="h6">STDs</h6>
            </div>
        </div>
    </div-->


    </div>
    <div class="container">
        <br>
        <br>
        <div class="row">
            <br>

        </div>
    </div>
    <div class="container" id="ourpromise">

        <h5 class="titletext text-center" style="color: white; padding-top: 20px">THE HEALTHCABAL PROMISE</h5>
        <p class="text-center white" style="color: white; padding-top: 30px">
            Our processes are optimized to ensure information of the highest quality.
        </p>

        <div class="row text-center">
            <!--div class="col-sm mt-5">
                <h4 style="color:white">
                    Our processes are optimized to ensure
                    information of the highest quality.
                </h4>
                <a href="healthcabal-editorial-process"><button class="btn btn-primary text-center">More on our process</button></a>
            </div-->
            <div class="col-sm mt-5"">
            <img src=" assets/images/hc_doctor.svg" style="width:150px">
                <h5 class="text-center" style="color:white">Written by health experts</h5>
            </div>

            <div class="col-sm mt-5">
                <img src="assets/images/hc_research.svg" style="width:150px">
                <h5 class="text-center" style="color:white">Reviewed medically by certified physicians</h5>
            </div>
            <div class="col-sm mt-5">
                <img src="assets/images/hc_update.svg" style="width:150px">
                <h5 class="text-center" style="color:white">Updated to reflect latest Medical findings</h5>
            </div>
            <div class="col-sm mt-5"">
            <img src=" assets/images/hc_science.svg" style="width:150px">
                <h5 class="text-center" style="color:white">Fact-checked for updated science research</h5>
            </div>
        </div>

    </div>

    <div class="container shadow-right" style="margin-top:60px; background-color:white; padding-top:10px; border-radius: 20px 20px 20px 0px; padding-bottom:20px">
        <div class="row">
            <div class="col text-center" id="teamblurb">
                <h4>
                    Our medical review team is made up of medical doctors who always ensure
                    that our content is medically accurate.
                    Get to know our team.
                </h4>
                <a href="healthcabal-review-board"><button class="btn btn-primary">Meet our team</button></a>
            </div>
            <div class="col-md" id="ourteam">
                <div class="row">

                    <?php
                    $fetchReviewers = "SELECT * FROM hc_users WHERE user_status = 1 AND user_type = 'reviewer' ORDER BY RAND() LIMIT 4";
                    $getReviewers = $conn->query($fetchReviewers);
                    while ($reviewBoard = $getReviewers->fetch_object()) {
                        echo '
                        <div class="col-sm text-center">
                        <img style="border-radius:50%; height:100px" src="' . $reviewBoard->user_picture . '">
                        <div class="w-100"></div>
                        <a href="review-board/' . $reviewBoard->user_url . '"><h6 class="h6">' . $reviewBoard->user_fname . ' ' . $reviewBoard->user_lname . ', ' . $reviewBoard->user_prefix . '</h6></a>
                        <div class="w-100"></div>
                        ' . $reviewBoard->primary_practice . '
                    </div>';
                    }

                    ?>


                    <div class="w-100"></div>


                </div>
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