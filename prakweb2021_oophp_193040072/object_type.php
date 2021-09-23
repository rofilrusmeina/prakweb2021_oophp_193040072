<?php

//jualan Produk
//Komik
//Game

class produk {
    //Property
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    // Construktor
    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    // method
    public function getLebel(){
        return "$this->penulis,$this->penerbit";
    }
}


class CetakInfoProduk{
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLebel()} (Rp.{$produk->harga})";
        return $str;
    }
}


$produk1 = new produk("Naruto", "Masashi Kishimoto", "Shonen Jump", "30000");
$produk2 = new produk("Uncharted", "Nail Drickmann", "Sony Computer", "250000");

echo "Komik : ". $produk1->getLebel();
echo "<br>";
echo "Game : ". $produk2->getLebel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
