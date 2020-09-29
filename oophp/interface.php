<?php

interface infoProduk{
    public function getInfoProduk();
}
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

class CetakInfoProduk{
    public $daftarProduk=array();

    public function tambahProduk( Produk $produk ){
        $this->daftarProduk[]=$produk;
    }

    public function cetak(){
        $str="Daftar Produk : <br>";
        foreach($this->daftarProduk as $p){
            $str.=" - {$p->getInfoProduk()}<br>";
        }
        return $str;
    }

}
 


$produk1=new Komik("Naruto","Mashasi Kisimpto","Anthony",50000,100);
$produk2=new Game("Counter Strike","Gaben","Budiman",100000,100);

$cetakProduk=new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();



?>
