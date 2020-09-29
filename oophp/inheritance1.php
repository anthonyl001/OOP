<?php

class Produk{
    public $judul ="judul"
    ,$penulis="penulis"
    ,$penerbit="penerbit"
    ,$harga,$jmlahhalaman,
    $waktumain,
    $tipe;

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

    public function getInfoLengkap(){
        $str="{$this->tipe} | {$this->getLabel()}, (Rp. {$this->harga}) ";
        if($this->tipe=="Komik"){
            $str .= "{$this->jmlahhalaman} Halaman";
        }else if($this->tipe=="Game"){
            $str .= "{$this->waktumain} Jam";
        }
        return $str;
    }

}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str="{$produk->judul} | {$produk->getLabel()}{$produk->harga}";
        return $str;
    }

}
 

$produk1=new Produk("Naruto","Mashasi Kisimpto","Anthony",50000,100,0,"Komik");
$produk2=new Produk("Counter Strike","Gaben","Budiman",100000,0,100,"Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

?>
