<?php

include_once '../../config.php';
include_once '../../controllers/TransaksiController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])) {
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $total = $_POST['total'];

    $transaksiController = new TransaksiController($db);
    $result = $transaksiController->createTransaksi($nama_pelanggan, $nama_barang, $harga, $jumlah, $total);

    if ($result) {
        header("Location: transaksi");
        exit();
    } else {
        header("Location: tambah.php?");
        exit();
    }
}
