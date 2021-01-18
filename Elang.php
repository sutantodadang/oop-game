<?php

require_once('Gabungan.php');



class Elang extends Gabungan
{

    // use Gabungan;
    public $nama = "Elang Sakti";
    public $jumlahKaki = 2;
    public $keahlian = "terbang tinggi";
    public $attackPower = 10;
    public $defensePower = 5;
    public $darah = 50;

    public function getInfoHewan()
    {
        echo "Nama Hewan ini : $this->nama <br>";
        echo "Jumlah kakinya : $this->jumlahKaki <br>";
        echo "Keahliannya : $this->keahlian <br>";
        echo "Kekuatan Serangnya : $this->attackPower <br>";
        echo "Kekuatan Bertahanya : $this->defensePower <br>";
        echo "Darahnya : $this->darah <br>";
    }
}
