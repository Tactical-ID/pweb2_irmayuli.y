<?php

class Transaksi
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }
    public function getAllTransaksi()
    {
        $query = "SELECT * FROM transaksi";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createTransaksi($nama_pelanggan, $nama_barang, $harga, $jumlah, $total)
    {
        $query = "INSERT INTO transaksi (nama_pelanggan,nama_barang,harga,jumlah,total) VALUES('$nama_pelanggan', '$nama_barang', '$harga', '$jumlah', '$total')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else {
            return false;
        }
    }

    public function getTransaksiById($id)
    {
        $query = "SELECT * FROM transaksi where id =$id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateTransaksi($id, $nama_pelanggan, $nama_barang, $harga, $jumlah, $total)
    {
        $query = "UPDATE transaksi set nama_pelanggan='$nama_pelanggan',nama_barang='$nama_barang',harga='$harga',jumlah='$jumlah',total='$total' where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
 
    public function deleteTransaksi($id){
        $query = "DELETE FROM transaksi WHERE id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else {
            return false;
        }
    }
}