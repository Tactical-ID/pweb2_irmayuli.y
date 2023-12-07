<?php

class HomeController{
    public function home(){
        
        header("location:http://localhost/PENJUALAN/Penjualan/index.php");
        
    }
    public function admin(){
        header("location:admin");
    }
    public function pelanggan(){
        header("location:pelanggan");
    }
    public function kurir(){
        header("location:kurir");
    }
    public function barang(){
        header("location:barang");
    }
    public function transaksi(){
        header("location:transaksi");
    }
    public function penjualan(){
        header("location:penjualan");
    }
}
?>