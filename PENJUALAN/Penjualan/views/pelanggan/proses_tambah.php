<?php

include_once '../../config.php';
include_once '../../controllers/PelangganController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $pelangganController = new PelangganController($db);
    $result = $pelangganController->createPelanggan($nama, $alamat, $no_telepon, $email, $username, $password);

    if ($result) {
        header("Location: pelanggan");
        exit();
    } else {
        header("Location: tambah.php?");
        exit();
    }
}
