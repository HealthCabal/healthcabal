<?php
$localhost = array("127.0.0.1", "::1");
if (in_array($_SERVER['REMOTE_ADDR'], $localhost)) {
    $homeurl = "http://localhost/healthcabal/public/";
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "healthcabal";
    $conn = new mysqli($host, $username, $password, $database);
} else {
    $host = "localhost";
    $username = "healmsuw_hcdb2020";
    $password = "northshoreofmatsushima";
    $database = "healmsuw_hcdb2020";
    $conn = new mysqli($host, $username, $password, $database);

    /***
    $homeurl = "";
    $host = "localhost";
    $username = "hubvtuco_boss";
    $password = "!@mtheb0$$";
    $database = "hubvtuco_hubdb";
    $conn = new mysqli($host, $username, $password, $database);
    **/
}



