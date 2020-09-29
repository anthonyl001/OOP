<?php

class Produk{
    public $judul ="judul"
    ,$penulis="penulis"
    ,$penerbit="penerbit"
    ,$harga=0;

    public function sayHello(){
        return "Hello World";
    }

    public function getLabel(){
        return "$this->penulis,$this->penerbit";
    }

}

/*$produk1=new Produk();
$produk1->judul="naruto";
var_dump($produk1);

$produk2=new Produk();
$produk2->judul="sasuke";
$produk2->tambahProperty="tess";
var_dump($produk2);*/

$produk3=new Produk();
$produk3->judul="Naruto";
$produk3->penulis="Mashasi Kisimoto";
$produk3->penerbit="Anthony";
$produk3->harga=50000;
 
$produk4=new Produk();
$produk4->judul= "Counter Strike";
$produk4->penulis="Budiman";
$produk4->penerbit="Harianto Gunawan";
$produk4->harga=100000;

echo "Komik :".$produk3->getLabel();
echo "<br>";
echo "Game :".$produk4->getLabel();

?>
