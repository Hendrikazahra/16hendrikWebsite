<?php

include "database_conn.php"; 
$id_item = $_GET["id_item"];

$query = "DELETE FROM barang WHERE id_item='" . $id_item. "'";

if(mysqli_query($db_connect, $query)){
    $message = 3; 
} else {
    $message = 4;
}

header("Location:index.php?message=" . $message . "");

?>