<?php 

include "database_conn.php";

if (count($_POST) > 0) {
    // ambil id dari customer sebagai penanda 
    $id_item = $_POST["id_item"]; 
    $nama_item = $_POST["nama_item"]; 
    $jumlah_item = $_POST["jumlah_item"]; 
    $harga_item = $_POST["harga_item"];

    $query =
        "UPDATE barang set id_item='" . 
        $id_item .  
        "', nama_item='" . 
        $nama_item . 
        "', jumlah_item='" . 
        $jumlah_item . 
        "', harga_item='" .
        $harga_item . 
        "' WHERE id_item='" . 
        $id_item . 
        "'";

    if (mysqli_query($db_connect, $query)) {
        $message = 2;
    } else {
        $message = 4;
    }
}

header("Location:index.php?message=" . $message . "");

?>