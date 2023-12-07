<?php


include_once '../../config.php';
include_once '../../controllers/TransaksiController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id'])) {
    $id=$_GET['id'];

    $transaksiController = new TransaksiController($db);
    $result = $transaksiController->deleteTransaksi($id);

    if ($result) {
        header("location:transaksi");
    } else {
        echo "Gagal menghapus data";
    }
}