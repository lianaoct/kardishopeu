<?php

// deklarasi vaiabel
$host = "localhost";
$user = "root";
$pass = "";
$database = "kardishop";

$con = mysqli_connect($host, $user, $pass, $database) or die(mysqli_error("Database tidak diketemukan"));

?>