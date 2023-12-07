<?php

include_once '../../config.php';
include_once '../../controllers/PenjualanController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])) {
    $tanggal = $_POST['tanggal'];
    $nama_admin = $_POST['nama_admin'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $nama_kurir = $_POST['nama_kurir'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $sub_total = $_POST['sub_total'];

    $penjualanController = new PenjualanController($db);
    $result = $penjualanController->createPenjualan($tanggal, $nama_admin, $nama_pelanggan, $nama_kurir, $nama_barang, $harga, $jumlah, $sub_total);

    if ($result) {
        header("Location: penjualan");
        exit();
    } else {
        header("Location: tambah.php?");
        exit();
    }
}
