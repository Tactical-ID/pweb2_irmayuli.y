<?php

include_once('../../models/Penjualan.php');

class PenjualanController
{
    private $model;
    
    public function __construct($db)
    {
        $this->model = new Penjualan ($db);
    }

    public function getAllPenjualan()
    {
        return $this->model->getAllPenjualan();
    }

    public function createPenjualan($tanggal, $nama_admin, $nama_pelanggan, $nama_kurir, $nama_barang, $harga, $jumlah, $sub_total)
    {
        return $this->model->createPenjualan($tanggal, $nama_admin, $nama_pelanggan, $nama_kurir, $nama_barang, $harga, $jumlah, $sub_total);
    }

    public function getPenjualanById($id)
    {
        return $this->model->getPenjualanById($id);
    }

    public function updatePenjualan($id, $tanggal, $nama_admin, $nama_pelanggan, $nama_kurir, $nama_barang, $harga, $jumlah, $sub_total)
    {
        return $this->model->updatePenjualan($id, $tanggal, $nama_admin, $nama_pelanggan, $nama_kurir, $nama_barang, $harga, $jumlah, $sub_total);
    }

    public function deletePenjualan($id)
    {
        return $this->model->deletePenjualan($id);
    }
}