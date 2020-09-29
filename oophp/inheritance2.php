<?php

class Produk{
    public $judul ="judul"
    ,$penulis="penulis"
    ,$penerbit="penerbit"
    ,$harga,$jmlahhalaman,
    $waktumain ;

    public function sayHello(){
        return "Hello World";
    }

    public function __construct($judul,$penulis,$penerbit,$harga,$jmlahhalaman=0,$waktumain=0,$tipe){
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
        $this->jmlahhalaman=$jmlahhalaman;
        $this->waktumain=$waktumain;
        $this->tipe=$tipe;
    }

    public function getLabel(){
        return "$this->penulis,$this->penerbit";
    }

    public function getInfoProduk(){
        $str=" {$this->getLabel()}, (Rp. {$this->harga}) ";
        return $str;
    }

}

class Komik extends Produk{
    public function getInfoProduk(){
        $str="Komik : {$this->tipe} | {$this->getLabel()}, (Rp. {$this->harga}) - {$this->jmlahhalaman} Halaman";
        return $str;
    }
}

class Game extends Produk{
    public function getInfoProduk(){
        $str="Game : {$this->tipe} | {$this->getLabel()}, (Rp. {$this->harga}) - {$this->waktumain} Jam";
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str="{$produk->judul} | {$produk->getLabel()}{$produk->harga}";
        return $str;
    }

}
 

$produk1=new Komik("Naruto","Mashasi Kisimpto","Anthony",50000,100,0,"Komik");
$produk2=new Game("Counter Strike","Gaben","Budiman",100000,0,100,"Game");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

?>
