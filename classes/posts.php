<?php

require_once("crud.php");

class Posts extends Crud
{
    function featuredPostData($conn, $value, $columnName, $tablename, $item)
    {
        if ($this->fetchDataWhere($conn, $value, $columnName, $tablename) != "dataexists") {
            $postData = $this->fetchDataWhere($conn, $value, $columnName, $tablename);
            echo $postData[$item];
        } else {
            echo "nothing was found.";
        }
    }



    function fetchTopRightPosts($conn, $start, $end)
    {
        $query = "SELECT * FROM hc_posts WHERE post_home_featured = 1 AND post_status = 1 ORDER BY ID DESC LIMIT $start, $end";
        $result  = $conn->query($query);
        while ($featuredPostVertical = $result->fetch_assoc()) {
            echo '<a href="' . $featuredPostVertical['post_slug'] . '"><h6 class="grow titletext mt-1">' . $featuredPostVertical['post_title'] . '</h6></a>';
        }
    }


    function fetchRelatedPosts($conn, $postSlug, $postCat)
    {
        $query = "SELECT * FROM hc_posts WHERE post_child_cat = $postCat AND post_status = 1 ORDER BY ID DESC LIMIT 8";
        //die($query);
        $related = $conn->query($query);
        $relatedPosts[] = $related->fetch_array();
        return $relatedPosts;
    }


    function runrelated($conn, $tableName, $columnName, $value, $start, $end)
    {
        return  $this->fetchDataWithLimit($conn, $tableName, $columnName, $value, $start, $end);
    }


    function fetchFeaturedPosts($conn, $start, $end, $homeurl)
    {
        $query = "SELECT hc_posts.ID, hc_posts.post_featured_img, hc_posts.post_category, hc_posts.post_title, hc_posts.post_slug, hc_categories.cat_name, hc_categories.ID, hc_posts.post_author, hc_posts.fact_checked_by FROM hc_posts, hc_categories WHERE hc_categories.ID = hc_posts.post_category AND hc_posts.post_home_featured = 1 ORDER BY hc_posts.ID DESC LIMIT $start, $end";
        //die($query);
        $result  = $conn->query($query);
        while ($featuredPosts = $result->fetch_assoc()) {



            if ($featuredPosts['post_author'] == 0) {
                $review_or_author = "Written by " . $featuredPosts['fact_checked_by'];
            } else {
                $author = $featuredPosts['post_author'];
                $author_id = $conn->query('SELECT * FROM hc_users WHERE ID = ' . $author);
                $authorName = $author_id->fetch_assoc();
                //echo "<strong>Written by " . $authorName['user_fname'] . " " . $authorName['user_lname'] . "</strong><br>";

                $review_or_author = "Medically reviewed by " . $authorName['user_fname'] . " " . $authorName['user_lname'] . ", MD";
            }
            echo '
            <div class="row col-md col-sm-12">
            <div class="col-md top-right-col  shadow-right second-row-home">
            <img src="' . $featuredPosts['post_featured_img'] . '" alt="' . $featuredPosts['post_title'] . '">
                <div style="height:auto" class="posttitle"><br>
                    <p>' . $featuredPosts['cat_name'] . '</p>
                    <a href="' . $homeurl . $featuredPosts['post_slug'] . '">
                    <h5 class="grow titletext mt-1"> ' . substr($featuredPosts['post_title'], 0, 60) . ' . . .</h5></a>' .
                '<div style="position: absolute; 
                bottom: 0; 
                width: 100%; 
                height: 50px; 
                //border: 1px solid red;">' .
                $review_or_author . '
                     </div>
                </div>
            </div>

        </div>';
            //echo '<h6 class="grow titletext mt-1">' . $featuredPostVertical['post_title'] . '</h6>';
        }
    }
}
//Query to get related posts
//SELECT hc_categories.ID, hc_posts.post_title, hc_posts.post_category, hc_posts.post_featured_img, hc_categories.cat_name FROM hc_categories, hc_posts WHERE hc_posts.post_category = hc_categories.ID LIMIT 0, 5
$postHandler = new Posts();
