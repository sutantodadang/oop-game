<?php
require_once('Gabungan.php');




class Harimau extends Gabungan
{

    // use Gabungan;
    public $nama = "Harimau Sakti";
    public $jumlahKaki = 4;
    public $keahlian = "lari cepat";
    public $attackPower = 7;
    public $defensePower = 8;
    // public $darah = 50;


    public function getInfoHewan()
    {
        echo "Nama Hewan ini : $this->nama <br>";
        echo "Jumlah kakinya : $this->jumlahKaki <br>";
        echo "Keahliannya : $this->keahlian <br>";
        echo "Kekuatan Serangnya : $this->attackPower <br>";
        echo "Kekuatan Bertahannya : $this->defensePower <br>";
        echo "Darahnya : $this->darah <br>";
    }
}
