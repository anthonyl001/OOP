<?php

class Produk{
    public $judul ="judul"
    ,$penulis="penulis"
    ,$penerbit="penerbit"
    ,$harga=0;

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

}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str="{$produk->judul} | {$produk->getLabel()}{$produk->harga}";
        return $str;
    }

}
 

$produk1=new Produk("Naruto","Mashasi Kisimpto","Anthony",50000);
$produk2=new Produk("Counter Strike","Gaben","Budiman",100000);

echo "Komik :".$produk1->getLabel();
echo "<br>";
echo "Game :".$produk2->getLabel();
echo "<br>";
$infoproduk1=new CetakInfoProduk();
echo $infoproduk1->cetak($produk1);

?>
