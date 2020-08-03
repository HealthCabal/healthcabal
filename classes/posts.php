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
        $query = "SELECT * FROM hc_posts WHERE post_home_featured = 1 LIMIT $start, $end";
        $result  = $conn->query($query);
        while($featuredPostVertical = $result->fetch_assoc()) {
            echo '<h6 class="grow titletext mt-1">'.$featuredPostVertical['post_title'].'</h6>';
        }
    }


    function fetchRelatedPosts($conn, $postSlug, $postCat){
        $query = "SELECT * FROM hc_posts WHERE post_child_cat = $postCat";
        //die($query);
        $related = $conn->query($query);
        $relatedPosts[] = $related->fetch_array();
        return $relatedPosts;
    }


    function runrelated($conn, $tableName, $columnName, $value, $start, $end){
      return  $this->fetchDataWithLimit($conn, $tableName, $columnName, $value, $start, $end);
    }
}


$postHandler = new Posts();
