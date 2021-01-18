<?php

require_once('Hewan.php');
require_once('Harimau.php');
require_once('Elang.php');
require_once('Fight.php');
require_once('Gabungan.php');


$harimau = new Harimau();
$elang = new Elang();

echo "Hewan ini adalah : $elang->nama <br>";
$elang->atraksi();
$harimau->atraksi();

$elang->serang($harimau->nama);
$harimau->diserang($elang->nama, $elang->attackPower);



$elang->serang($harimau->nama);
$harimau->diserang($elang->nama, $elang->attackPower);

$elang->serang($harimau->nama);
$harimau->diserang($elang->nama, $elang->attackPower);

$elang->serang($harimau->nama);
$harimau->diserang($elang->nama, $elang->attackPower);

$harimau->getInfoHewan();
