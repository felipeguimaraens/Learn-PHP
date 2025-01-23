<?php

// Project based on Douglas Adams book: "Hitchhiker's guide to the galaxy"
// https://hitchhikers.fandom.com/wiki/42
// Just a bunch of usages of Math built-ins (https://www.php.net/manual/en/book.math.php)

$initial = '555';

$a = octdec($initial);
$b = deg2rad($a);
$c = cos($b);
$d = round($c, 3);
$e = log($d);
$f = abs($e);
$g = acos($f);
$h = rad2deg($g);
$i = floor($h);
$j = $i - 47;
echo $j;