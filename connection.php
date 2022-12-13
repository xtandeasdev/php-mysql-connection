<?php
    $connection = mysqli_connect("localhost", "MYSQL_USER", "MYSQL_PASSWORD", "DB_NAME");
    $connection->set_charset("utf8");
    if(mysqli_connect_errno()){
        die("Failed to connect mysql");
    }
?>
