<?php
class Game extends Produk implements infoProduk{
    public $waktumain;
    public function __construct($judul,$penulis,$penerbit,$harga,$waktumain){
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktumain=$waktumain;

    }
    public function getInfoProduk(){
        $str="Game :" .$this->getInfo(). "- {$this->waktumain} Jam";
        return $str;
    }
    public function getInfo(){
        $str=" {$this->judul} |{$this->getLabel()}, (Rp. {$this->harga}) ";
        return $str;
    }

}