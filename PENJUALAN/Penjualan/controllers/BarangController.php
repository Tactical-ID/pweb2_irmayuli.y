<?php

include_once('../../models/Barang.php');

class BarangController
{
    private $model;
    
    public function __construct($db)
    {
        $this->model = new Barang ($db);
    }

    public function getAllBarang()
    {
        return $this->model->getAllBarang();
    }

    public function createBarang($nama_barang, $harga, $stok)
    {
        return $this->model->createBarang($nama_barang, $harga, $stok);
    }

    public function getBarangById($id)
    {
        return $this->model->getBarangById($id);
    }

    public function updateBarang($id, $nama_barang, $harga, $stok)
    {
        return $this->model->updateBarang($id, $nama_barang, $harga, $stok);
    }

    public function deleteBarang($id)
    {
        return $this->model->deleteBarang($id);
    }
}