<?php
    $server = "localhost";
    $name = "root";
    $passworddb = "";
    $database = "shbs";

    $conn = new mysqli($server, $name, $passworddb, $database);

    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }
?>