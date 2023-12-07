<?php

class Admin
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }
    public function getAllAdmin()
    {
        $query = "SELECT * FROM `admin`";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createAdmin($nama, $alamat, $no_telepon, $email, $jenis_kelamin, $username, $password)
    {
        $query = "INSERT INTO `admin` (nama,alamat,no_telepon,email,jenis_kelamin,username,`password`)
        VALUES('$nama','$alamat','$no_telepon','$email','$jenis_kelamin','$username','$password')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else {
            return false;
        }
    }


    public function getAdminById($id)
    {
        $query = "SELECT * FROM `admin` where id =$id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateAdmin($id, $nama, $alamat, $no_telepon, $email, $jenis_kelamin, $username, $password)
    {
        $query = "UPDATE `admin` set nama='$nama', alamat='$alamat', no_telepon='$no_telepon', email='$email',
        jenis_kelamin='$jenis_kelamin', username='$username', `password`='$password' where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
 
    public function deleteAdmin($id){
        $query = "DELETE FROM `admin` WHERE id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else {
            return false;
        }
    }
}