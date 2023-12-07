<?php

class Pelanggan
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }
    public function getAllPelanggan()
    {
        $query = "SELECT * FROM pelanggan";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createPelanggan($nama, $alamat, $no_telepon, $email, $username, $password)
    {
        $query = "INSERT INTO pelanggan (nama,alamat,no_telepon,email,username,`password`)
        VALUES('$nama','$alamat','$no_telepon','$email','$username','$password')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else {
            return false;
        }
    }


    public function getPelangganById($id)
    {
        $query = "SELECT * FROM pelanggan where id =$id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updatePelanggan($id, $nama, $alamat, $no_telepon, $email, $username, $password)
    {
        $query = "UPDATE pelanggan set nama='$nama', alamat='$alamat', no_telepon='$no_telepon', email='$email',
        username='$username', `password`='$password' where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
 
    public function deletePelanggan($id){
        $query = "DELETE FROM pelanggan WHERE id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else {
            return false;
        }
    }
}