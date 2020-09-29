<?php
abstract class Produk{
    protected $judul ="judul"
        ,$penulis="penulis"
        ,$penerbit="penerbit",
        $harga,
        $diskon=0;
    

    public function getJudul(){
       return $this->judul;
    }

    public function setJudul($judul){
        if(!is_string($judul)){
            throw new Exception ("Judul harus string");
        }
        $this->judul=$judul;
    }
    public function setPenulis($penulis){
        $this->penulis=$penulis;
    }
    public function getPenulis(){
         return $this->penulis;
    } 
    public function setPenerbit($penerbit){
        $this->penerbit=$penerbit;
    }
    public function getPenerbit(){
        return $this->penerbit;
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

    abstract public function getInfo();
    

    public function getHarga(){
        return $this->harga -($this->harga * $this->diskon/100);
    }

    public function setHarga($harga){
        $this->harga=$harga;
    }
    public function setDiskon($diskon){
        $this->diskon=$diskon;
    }
    
    public function getDiskon($diskon){
        return $this->diskon=$diskon;
    }
   
}