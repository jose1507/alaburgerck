<?php

$servername = "utpserver1.mysql.database.azure.com";
$database = "alaburgerck";
$username = "joseenrique";
$password = "@enrique1507";
// Create connection
$conectar = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conectar) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
