<?php

include_once '../../models/Pelanggan.php';

class PelangganController
{
    private $model;
    
    public function __construct($db)
    {
        $this->model = new Pelanggan ($db);
    }

    public function getAllPelanggan()
    {
        return $this->model->getAllPelanggan();
    }

    public function createPelanggan($nama, $alamat, $no_telepon, $email, $username, $password)
    {
        return $this->model->createPelanggan($nama, $alamat, $no_telepon, $email, $username, $password);
    }

    public function getPelangganById($id)
    {
        return $this->model->getPelangganById($id);
    }

    public function updatePelanggan($id, $nama, $alamat, $no_telepon, $email, $username, $password)
    {
        return $this->model->updatePelanggan($id, $nama, $alamat, $no_telepon, $email, $username, $password);
    }

    public function deletePelanggan($id)
    {
        return $this->model->deletePelanggan($id);
    }
}