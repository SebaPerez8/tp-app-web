<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "inmobiliaria";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    error_reporting(E_ALL ^ E_NOTICE);
?>
