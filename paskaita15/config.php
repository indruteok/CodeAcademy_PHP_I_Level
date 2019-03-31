<?php

function connect() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "prisijungimas";
    $conn = mysqli_connect($host, $user, $pass, $db);
    mysqli_set_charset($conn, "utf8");
    return $conn;
}

$connection = connect();
