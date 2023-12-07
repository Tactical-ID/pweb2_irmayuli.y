<?php

include_once '../../config.php';
include_once '../../controllers/AdminController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $adminController = new AdminController($db);
    $result = $adminController->createAdmin($nama, $alamat, $no_telepon, $email, $jenis_kelamin, $username, $password);

    if ($result) {
        header("Location: admin");
        exit();
    } else {
        header("Location: tambah.php?");
        exit();
    }
}
