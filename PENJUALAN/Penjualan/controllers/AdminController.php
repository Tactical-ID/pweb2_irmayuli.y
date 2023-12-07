<?php

include_once '../../models/Admin.php';

class AdminController
{
    private $model;
    
    public function __construct($db)
    {
        $this->model = new Admin ($db);
    }

    public function getAllAdmin()
    {
        return $this->model->getAllAdmin();
    }

    public function createAdmin($nama, $alamat, $no_telepon, $email, $jenis_kelamin, $username, $password)
    {
        return $this->model->createAdmin($nama, $alamat, $no_telepon, $email, $jenis_kelamin, $username, $password);
    }

    public function getAdminById($id)
    {
        return $this->model->getAdminById($id);
    }

    public function updateAdmin($id, $nama, $alamat, $no_telepon, $email, $jenis_kelamin, $username, $password)
    {
        return $this->model->updateAdmin($id, $nama, $alamat, $no_telepon, $email, $jenis_kelamin, $username, $password);
    }

    public function deleteAdmin($id)
    {
        return $this->model->deleteAdmin($id);
    }
}