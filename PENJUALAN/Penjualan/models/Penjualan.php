<?php

class Penjualan
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }
    public function getAllPenjualan()
    {
        $query = "SELECT * FROM jual";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createPenjualan($tanggal, $nama_admin, $nama_pelanggan, $nama_kurir, $nama_barang, $harga, $jumlah, $sub_total)
    {
        $query = "INSERT INTO jual (tanggal,nama_admin,nama_pelanggan,nama_kurir,nama_barang,harga,jumlah,sub_total) VALUES ('$tanggal' , '$nama_admin', '$nama_pelanggan', '$nama_kurir', '$nama_barang', '$harga', '$jumlah', '$sub_total')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else {
            return false;
        }
    }

    public function getPenjualanById($id)
    {
        $query = "SELECT * FROM jual where id =$id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updatePenjualan($id, $tanggal, $nama_admin, $nama_pelanggan, $nama_kurir, $nama_barang, $harga, $jumlah, $sub_total)
    {
        $query = "UPDATE jual set tanggal='$tanggal', nama_admin='$nama_admin', nama_pelanggan='$nama_pelanggan', nama_kurir='$nama_kurir', nama_barang='$nama_barang', harga='$harga', jumlah='$jumlah', sub_total='$sub_total' where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
 
    public function deletePenjualan($id){
        $query = "DELETE FROM jual WHERE id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else {
            return false;
        }
    }
}