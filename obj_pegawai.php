<?php
require 'pegawai.php';

//Deklarasi Data Pegawai
$pegawai1 = new Pegawai('001','Andi','Manager','Islam','Menikah');
$pegawai2 = new Pegawai('002','Deni','Asisten Manager','Kristen','Menikah');
$pegawai3 = new Pegawai('003','Niken','Kepala Bagian','Islam','Belum Menikah');
$pegawai4 = new Pegawai('004','Raul','Staff','Kristen','Menikah');
$pegawai5 = new Pegawai('005','Figo','Staff','Islam','Belum menikah');

//Masukkan Data pegawai ke dalam array
$ar_pegawai = [$pegawai1, $pegawai2, $pegawai3, $pegawai4, $pegawai5];

foreach($ar_pegawai as $pegawai){
    $pegawai->cetak();
}
?>