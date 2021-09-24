<?php

//jualan Produk
//Komik
//Game

class produk {
    //Property
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain;
            

    // Construktor
    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }
    // method
    public function getLebel(){
        return "$this->penulis,$this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLebel()} (Rp. {$this->harga})";
        
        return $str;
    }
}

class Komik extends produk {
    public function getInfoProduk() {
    $str = "Komik : {$this->judul} | {$this->getLebel()} (Rp. {$this->harga}) - ($this->jmlHalaman) Halaman.";
    return $str;
}
}

class Game extends produk {
    public function getInfoProduk() {
        $str = "Game : {$this->judul} | {$this->getLebel()} (Rp. {$this->harga}) ~ ($this->waktuMain) Jam.";
    return $str;
    }
}

class CetakInfoProduk{
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLebel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, null);
$produk2 = new Game("Uncharted", "Nail Drickmann", "Sony Computer", 250000, 0, 50);

// Komik : Masahi kishimoto, shonen Jump
// Game : Neil Druckmann, SSony Computer
// Naruto | Masahi Kishimoto, Shonen Jump (Rp. 30000)

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();