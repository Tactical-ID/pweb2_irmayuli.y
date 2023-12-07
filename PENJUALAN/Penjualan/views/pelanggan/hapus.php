<?php


include_once '../../config.php';
include_once '../../controllers/PelangganController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id'])) {
    $id=$_GET['id'];

    $pelangganController = new PelangganController($db);
    $result = $pelangganController->deletePelanggan($id);

    if ($result) {
        header("location:pelanggan");
    } else {
        echo "Gagal menghapus data";
    }
}