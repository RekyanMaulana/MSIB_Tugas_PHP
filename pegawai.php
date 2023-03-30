<?php
class Pegawai{
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    static $jml = 0;
    const PT = 'PT. HTP Indonesia';

    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
    }
    public function setGajiPokok($jabatan){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager': $gapok = 15000000; break;
            case 'Asisten Manager': $gapok = 10000000; break;
            case 'Kepala Bagian': $gapok = 7000000; break;
            case 'Staff': $gapok = 5000000; break;
            default: $gapok;
        }
        return $gapok;
    }
    public function setTunJab(){
        $tunjab = $this->setGajiPokok($this->jabatan) * 0.2;
        return $tunjab;
    }
    public function setTunKel(){
        $tunkel = ($this->status == 'Menikah')? 0.1*$this->setGajiPokok($this->jabatan) : 0;
        return $tunkel;
    }
    public function GajiKotor(){
        $gajikotor = $this->setGajiPokok($this->jabatan) + $this->setTunJab() + $this->setTunKel();
        return $gajikotor;
    }
    public function setZakat(){
        $zakat = ($this->agama == 'Islam' && $this->GajiKotor() >= 6000000)? 0.025 * $this->setGajiPokok($this->jabatan) : 0;
        return $zakat;
    }
    public function GajiBersih(){
        $gajibersih = $this->GajiKotor() - $this->setZakat();
        return $gajibersih;
    }

    public function cetak(){
        echo 'NIP : '.$this->nip;
        echo '<br> Nama Pegawai : '.$this->nama;
        echo '<br> Jabatan : '.$this->jabatan;
        echo '<br> Agama : '.$this->agama;
        echo '<br> Status : '.$this->status;
        echo '<br> Gaji Pokok : Rp.'.number_format($this->setGajiPokok($this->jabatan),0,',','.');
        echo '<br> Tunjangan Jabatan : Rp.'.number_format($this->setTunJab(), 0, ',', '.');
        echo '<br> Tunjangan Keluarga : Rp.'.number_format($this->setTunKel(), 0, ',', '.');
        echo '<br> Gaji Kotor : Rp.'.number_format($this->GajiKotor(), 0, ',', '.');
        echo '<br> Zakat : Rp.'.number_format($this->setZakat(), 0, ',', '.');
        echo '<br> Gaji Bersih : Rp.'.number_format($this->GajiBersih(), 0, ',', '.');
        echo '<hr>';
    }
}
?>