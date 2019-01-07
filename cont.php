<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webfood";

    $con = mysqli_connect($host, $username, $password, $dbname);
    mysqli_set_charset($con,"utf8");
?>