<?php


include_once '../../config.php';
include_once '../../controllers/PenjualanController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id'])) {
    $id=$_GET['id'];

    $penjualanController = new PenjualanController($db);
    $result = $penjualanController->deletePenjualan($id);

    if ($result) {
        header("location:penjualan");
    } else {
        echo "Gagal menghapus data";
    }
}