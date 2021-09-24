<?php

//jualan Produk
//Komik
//Game

class produk {
    //Property
    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;

            

    // Construktor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function getPenulis($penulis) {
        return $this->penulis;
    }

    public function setPenerbit($penerbit) {
        $this->pernerbit = $penerbit;
    }

    public function getPenerbit($penerbit) {
        return $this->penerbit;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getDiskon($diskon) {
        return $this->diskon;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    // method
    public function getLebel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLebel()} (Rp. {$this->harga})";
        
        return $str;
    }
}

class Komik extends produk {
    public $jmlHalaman;

    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
    $str = "Komik : " . parent::getInfoProduk() . " - ($this->jmlHalaman) Halaman.";
    return $str;
}
}

class Game extends produk {
    public $waktuMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct( $judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    } 

    

    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . "  ~ ($this->waktuMain) Jam.";
    return $str;
    }
}


class CetakInfoProduk{
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLebel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Nail Drickmann", "Sony Computer", 250000, 50);

// Komik : Masahi kishimoto, shonen Jump
// Game : Neil Druckmann, SSony Computer
// Naruto | Masahi Kishimoto, Shonen Jump (Rp. 30000)

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";


$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";


echo $produk1->getJudul();
