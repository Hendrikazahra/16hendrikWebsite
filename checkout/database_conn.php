<?php

$hostname ="localhost";
$database_username = "root";
$database_password = "";
$database_name = "keranjang";

$db_connect = mysqli_connect($hostname, $database_username, $database_password, $database_name);
if(!$db_connect){
    die("Tidak dapat terhubung ke database: " . mysqli_connect_error());

}