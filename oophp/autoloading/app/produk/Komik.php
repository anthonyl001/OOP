<?php
class Komik extends Produk implements infoProduk{
    public $jmlahhalaman;

    public function __construct($judul,$penulis,$penerbit,$harga,$jmlahhalaman){
        parent :: __construct($judul,$penulis,$penerbit,$harga);
        $this->jmlahhalaman=$jmlahhalaman;
    }
    public function getInfoProduk(){
        $str="Komik :".$this->getInfo().  "- {$this->jmlahhalaman} Halaman";
        return $str;
    }
    public function getInfo(){
        $str=" {$this->judul} |{$this->getLabel()}, (Rp. {$this->harga}) ";
        return $str;
    }
}