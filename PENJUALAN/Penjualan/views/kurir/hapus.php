<?php


include_once '../../config.php';
include_once '../../controllers/KurirController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id'])) {
    $id=$_GET['id'];

    $kurirController = new KurirController($db);
    $result = $kurirController->deleteKurir($id);

    if ($result) {
        header("location:kurir");
    } else {
        echo "Gagal menghapus data";
    }
}