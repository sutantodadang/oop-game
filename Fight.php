<?php

require_once('Hewan.php');

trait Fight
{

    use Hewan;
    public $attackPower;
    public $defensePower;

    public function serang($nama_diserang)
    {
        echo "$this->nama Sedang Menyerang $nama_diserang <br>";
    }

    public function diserang($nama_penyerang, $attack)
    {
        $darahbaru = $this->darah - ($attack / $this->defensePower);
        $this->darah = $darahbaru;
        echo "$this->nama Sedang diserang  $nama_penyerang <br>";
    }
}
