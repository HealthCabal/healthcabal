<?php
$localhost = array("127.0.0.1", "192.168.43.115", "::1");
if (in_array($_SERVER['REMOTE_ADDR'], $localhost)) {
    $homeurl = "http://localhost/healthcabal/";
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "healthcabal";
    $conn = new mysqli($host, $username, $password, $database);
} else {
    $homeurl = "http://demo.healthcabal.com/";
    $host = "localhost";
    $username = "healmsuw_dbboss";
    $password = "northshoreofmatsushima";
    $database = "healmsuw_hcdb2020";
    $conn = new mysqli($host, $username, $password, $database);

    // $homeurl = "http://192.168.43.115/healthcabal/";
    // $host = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "healthcabal";
    // $conn = new mysqli($host, $username, $password, $database);

    /***
    $homeurl = "";
    $host = "localhost";
    $username = "hubvtuco_boss";
    $password = "!@mtheb0$$";
    $database = "hubvtuco_hubdb";
    $conn = new mysqli($host, $username, $password, $database);
    **/
}



