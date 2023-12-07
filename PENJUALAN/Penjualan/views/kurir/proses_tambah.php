<?php

include_once '../../config.php';
include_once '../../controllers/KurirController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $kurirController = new KurirController($db);
    $result = $kurirController->createKurir($nama, $no_telepon, $email, $username, $password);

    if ($result) {
        header("Location: kurir");
        exit();
    } else {
        header("Location: tambah.php?");
        exit();
    }
}
