<?php

class Kurir
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }
    public function getAllKurir()
    {
        $query = "SELECT * FROM kurir";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createKurir($nama, $no_telepon, $email, $username, $password)
    {
        $query = "INSERT INTO kurir (nama,no_telepon,email,username,`password`) VALUES('$nama','$no_telepon','$email','$username','$password')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else {
            return false;
        }
    }


    public function getKurirById($id)
    {
        $query = "SELECT * FROM kurir where id =$id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateKurir($id, $nama, $no_telepon, $email, $username, $password)
    {
        $query = "UPDATE kurir set nama='$nama', no_telepon='$no_telepon', email='$email', username='$username', `password`='$password' where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
 
    public function deleteKurir($id){
        $query = "DELETE FROM kurir WHERE id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else {
            return false;
        }
    }
}