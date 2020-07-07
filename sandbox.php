<h1>Hello, Sandbox!</h1>

<?php

/*

require_once("classes/config.php");
require_once("classes/posts.php");

$tableName = "hc_posts";
$columnName = "post_status";
$value = 1;
$start = 0;
$end = 5;
$postHandler->fetchTopRightPosts($conn, $tableName, $columnName, $value, $start, $end);






<?php

require_once("classes/config.php");

if (isset($_REQUEST['post_slug'])) {
    $postSlug = $_GET['post_slug'];
    $fetchPost = "SELECT * FROM  hc_posts WHERE post_slug = '$postSlug'";
    $result = $conn->query($fetchPost);
}
if ($conn->affected_rows > 0) {
    require_once("inc/articleheader.php");
    require_once("classes/posts.php");
    $postData = $result->fetch_array();
    echo $postData['post_content'];


    require_once("inc/footer.php");
    die();
} else {
    require_once("inc/mainheader.php");
    require_once("classes/posts.php");
    $value = 1;
    $tablename = "hc_posts";
    $columnName = "post_home_hero";

*/

?>