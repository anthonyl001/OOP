<?php
/*require_once'app/produk/infoProduk.php';
require_once'app/produk/Produk.php';
require_once'app/produk/Komik.php';
require_once'app/produk/Game.php';
require_once'app/produk/CetakInfoProduk.php';*/

spl_autoload_register(function($class){
    require_once'produk/'.$class.'.php';
});