<?php
    require_once 'abstract.php';
    class Segitiga extends Bentuk2D{
        public $alas;
        public $tinggi;
        public function __construct($alas, $tinggi){
            $this->alas = $alas;
            $this->tinggi = $tinggi;
        }
        public function namaBidang(){
            return 'Segitiga';
        }
        public function luasBidang(){
            $luas = $this->alas * $this->tinggi;
            return $luas;
        }
        public function kelilingBidang(){
            $keliling = 3 * $this->alas;
            return $keliling;
        }
    }
?>