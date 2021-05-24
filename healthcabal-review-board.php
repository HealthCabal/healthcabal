<?php
$title = "HealthCabal - About Us";
require_once("classes/config.php");
require_once("inc/mainheader.php");
?>


<div class="" style="background-color: #00323D; height: 300px">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="inner-banner" style="padding-top:100px">
                    <h1 class="text-center" style="color:white;">Our Medical Review Board</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-2 mt-5">
            <ul>
                <li><strong><a href="about">About Us</a></strong></li>
                <li><strong><a href="healthcabal-review-board" class="active">Review Board</a></strong></li>
            </ul>
        </div>

        <div class="col-md-8 mt-5">
            <p>Your journey to health and wellness is one on which we have gladly joined you.
                Information abounds today, and the internet relentelessly floods us with more
                and more of it everyday. Because of this, getting trustworthy, accurate information
                can be a huge challenge.
            </p>

            <p>This is a challenge we thoroughly understand, and we have come up with a way to overcome it
                in the health niche. We have assembled a team of medical professionals who review content
                on our website to ensure it aligns with the latest advancements in medicine.
            </p>


            <div class="container mt-5">
                <div class="row">
                    <?php
                    $fetchReviewers = "SELECT * FROM hc_users WHERE user_status = 1 AND user_type = 'reviewer' LIMIT 4";
                    $getReviewers = $conn->query($fetchReviewers);
                    while ($reviewBoard = $getReviewers->fetch_object()) {
                        echo '
    <div class="col-md-3">
    <img style="border-radius:10%; height:150px" src="' . $reviewBoard->user_picture . '">
    </div>
    <div class="col-md-3">
    <h6 class="h6">' . $reviewBoard->user_fname . ' ' . $reviewBoard->user_lname . ', ' . $reviewBoard->user_prefix . '</h6>
    ' . $reviewBoard->primary_practice . '
    ' . substr($reviewBoard->user_about, 0, 90) . '. . .
    <button class="mt-1 mb-5 btn btn-secondary" style="background-color: #00323D; height:50px; padding-left:20px; padding-right:20px">Read more</button>
    </div>';
                    }

                    ?>


                </div>
            </div>
        </div>

        <div class="col-md-2">

        </div>
    </div>
</div>

<?php
require_once("inc/footer.php");
?>