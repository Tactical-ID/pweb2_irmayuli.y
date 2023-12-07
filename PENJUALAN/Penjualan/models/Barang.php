<?php

class Barang
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }
    public function getAllBarang()
    {
        $query = "SELECT * FROM barang";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createBarang($nama_barang, $harga, $stok)
    {
        $query = "INSERT INTO barang (nama_barang,harga,stok) VALUES('$nama_barang', '$harga', '$stok')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else {
            return false;
        }
    }

    public function getBarangById($id)
    {
        $query = "SELECT * FROM barang where id =$id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateBarang($id, $nama_barang, $harga, $stok)
    {
        $query = "UPDATE barang set nama_barang='$nama_barang',harga='$harga',stok='$stok' where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
 
    public function deleteBarang($id){
        $query = "DELETE FROM barang WHERE id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else {
            return false;
        }
    }
}