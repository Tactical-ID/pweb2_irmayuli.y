<?php

include_once '../../config.php';
include_once '../../controllers/BarangController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])) {
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $barangController = new BarangController($db);
    $result = $barangController->createBarang($nama_barang, $harga, $stok);

    if ($result) {
        header("Location: barang");
        exit();
    } else {
        header("Location: tambah.php?");
        exit();
    }
}
