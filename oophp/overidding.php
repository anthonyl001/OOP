<?php

class Produk{
    public $judul ="judul"
    ,$penulis="penulis"
    ,$penerbit="penerbit"
    ,$harga ;

    public function sayHello(){
        return "Hello World";
    }

    public function __construct($judul,$penulis,$penerbit,$harga){
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
    }

    public function getLabel(){
        return "$this->penulis,$this->penerbit";
    }

    public function getInfoProduk(){
        $str=" {$this->judul} |{$this->getLabel()}, (Rp. {$this->harga}) ";
        return $str;
    }

}

class Komik extends Produk{
    public $jmlahhalaman;

    public function __construct($judul,$penulis,$penerbit,$harga,$jmlahhalaman){
        parent :: __construct($judul,$penulis,$penerbit,$harga);
        $this->jmlahhalaman=$jmlahhalaman;
    }
    public function getInfoProduk(){
        $str="Komik :". parent::getInfoProduk().  "- {$this->jmlahhalaman} Halaman";
        return $str;
    }
}

class Game extends Produk{
    public $waktumain;
    public function __construct($judul,$penulis,$penerbit,$harga,$waktumain){
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktumain=$waktumain;

    }
    public function getInfoProduk(){
        $str="Game :" .parent::getInfoProduk(). "- {$this->waktumain} Jam";
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str="{$produk->judul} | {$produk->getLabel()}{$produk->harga}";
        return $str;
    }

}
 

$produk1=new Komik("Naruto","Mashasi Kisimpto","Anthony",50000,100);
$produk2=new Game("Counter Strike","Gaben","Budiman",100000,100);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

?>
