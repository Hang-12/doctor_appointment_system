<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "wdtg30";

    $connection = mysqli_connect($hostname, $user, $password, $database);
    if (!$connection ) {
        die("<script>alert('Connection Failed.')</script>");
    }