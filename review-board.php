<?php
require_once("classes/config.php");
if (isset($_REQUEST['slug'])) {
    $slug = $_REQUEST['slug'];
    $fetchMember = "SELECT * FROM hc_users WHERE user_type = 'reviewer' AND user_url = '$slug'";
    //echo $fetchMember;
    $result = $conn->query($fetchMember);
    $results = $result->fetch_assoc();
}
if(!empty($results['user_prefix'] || $results['user_prefix'] !== NULL || $results['user_prefix'] !== "NULL")){
    $postfix = ", ".$results['user_prefix'];
}

$title = "HealthCabal - " . $results['user_fname'] . " " . $results['user_lname'] . $postfix;
$description = "";
require_once("inc/mainheader.php");
?>
<?php

?>


<style>
    .doctor-dp {
        border-radius: 0px 30px 30px 30px;
    }

    .doctor-header {
        font-size: 40px;
        margin-bottom: 20px;
    }

    .doctor-info {
        padding-top: 0px;
    }

    #hero {
        background-color: #00323d;
        padding-bottom: 20px;
    }
</style>
<div id="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mt-5">
                <ul>
                    <img src="<?php echo $results['user_picture'] ?>" class="doctor-dp">
                </ul>
            </div>

            <div class="col-md-7 mt-5">
                <h1 class="doctor-header" style="color:white"><?php echo $results['user_fname'] . " " . $results['user_lname']?> <?php if(!empty($results['user_prefix'])) {echo ", " . $results['user_prefix']; }?></h1>
                <h4 class="doctor-info" style="color:white">
                    <a href="../healthcabal-review-board" style="color:white"> HealthCabal Medical Review Board Member</a>
                    <h4>
                        <h4 style="color:white"><?php echo $results['primary_practice'] ?></h4>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-md-3 mt-5">
            <ul>
                <li><strong><a href="../healthcabal-review-board" class="active">Back to Review Board</a></strong></li>
            </ul>
        </div>

        <div class="col-md-7 mt-5">
            <?php echo $results['user_about']; ?>
        </div>

        <div class="col-md-2">

        </div>
    </div>
</div>

<?php
require_once("inc/footer.php");
?>