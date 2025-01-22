<?php
/*
Our travels have made us wise and weary, and we want to ensure we’re being treated fairly. Can you help?
Write a program to calculate exactly how much cash in USD we should end up with after it has all been exchanged. 
*/
  
$riel = 2103942; //Cambodia
$kyat = 19092; //Myanmar
$krones = 109; //Norway
$lek = 9094; //Albania

echo "Riel: $riel\nKyat: $kyat\nKrones: $krones\nLek: $lek\n";

$USDtoRiel = 4029.91;
$USDtoKyat = 2103;
$USDtoKrones = 11.26;
$USDtoLek = 94.09;

echo "\nUSD(Riel): ". (1 + ($riel / $USDtoRiel));
echo "\nUSD(Kyat): ". (1 + ($kyat / $USDtoKyat));
echo "\nUSD(Krones): ". (1 + ($krones / $USDtoKrones));
echo "\nUSD(Lek): ". (1 + ($lek / $USDtoLek));