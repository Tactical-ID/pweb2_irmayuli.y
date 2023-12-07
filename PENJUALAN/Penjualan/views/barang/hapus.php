<?php


include_once '../../config.php';
include_once '../../controllers/BarangController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id'])) {
    $id=$_GET['id'];

    $barangController = new BarangController($db);
    $result = $barangController->deleteBarang($id);

    if ($result) {
        header("location:barang");
    } else {
        echo "Gagal menghapus data";
    }
}