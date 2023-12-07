<?php

include_once '../../models/Kurir.php';

class KurirController
{
    private $model;
    
    public function __construct($db)
    {
        $this->model = new Kurir ($db);
    }

    public function getAllKurir()
    {
        return $this->model->getAllKurir();
    }

    public function createKurir($nama, $no_telepon, $email, $username, $password)
    {
        return $this->model->createKurir($nama, $no_telepon, $email, $username, $password);
    }

    public function getKurirById($id)
    {
        return $this->model->getKurirById($id);
    }

    public function updateKurir($id, $nama, $no_telepon, $email, $username, $password)
    {
        return $this->model->updateKurir($id, $nama, $no_telepon, $email, $username, $password);
    }

    public function deleteKurir($id)
    {
        return $this->model->deleteKurir($id);
    }
}