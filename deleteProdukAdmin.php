<?php
require "koneksi.php";
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "DELETE FROM produk WHERE id = $id";
    $con->query($sql);
}

header("location: adminProduk.php");
exit();
?>