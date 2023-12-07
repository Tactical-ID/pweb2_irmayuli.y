<?php

include_once('../../models/Transaksi.php');

class TransaksiController
{
    private $model;
    
    public function __construct($db)
    {
        $this->model = new Transaksi ($db);
    }

    public function getAllTransaksi()
    {
        return $this->model->getAllTransaksi();
    }

    public function createTransaksi($nama_pelanggan, $nama_barang, $harga, $jumlah, $total)
    {
        return $this->model->createTransaksi($nama_pelanggan, $nama_barang, $harga, $jumlah, $total);
    }

    public function getTransaksiById($id)
    {
        return $this->model->getTransaksiById($id);
    }

    public function updateTransaksi($id, $nama_pelanggan, $nama_barang, $harga, $jumlah, $total)
    {
        return $this->model->updateTransaksi($id, $nama_pelanggan, $nama_barang, $harga, $jumlah, $total);
    }

    public function deleteTransaksi($id)
    {
        return $this->model->deleteTransaksi($id);
    }
}