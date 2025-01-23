<?php

// 
/*
- gettype()
- strrev(str)
- strtolower(str)
- str_repeat(str, count)
- substr_count(haystack, needle)
- abs(int|float)
- round(int|float)
- rand(*int|float,*int|float) // * Optional
- getrandmax()
*/

$string_var = "Check it out";
echo strtoupper($string_var) . "!\n";

echo ceil(8.873);
echo "\n";
  
echo pi();
echo "\n";

echo str_pad("PHP", 30, "*^*-", STR_PAD_BOTH);
echo "\n";

echo getrandmax();
echo "\n";

echo rand();
echo "\n";

echo rand(1, 52);
echo "\n";

echo abs(-1287);
echo "\n";

echo round(8723.999);
echo "\n";

echo substr_count($string_var, " ");
echo "\n";

echo strrev("\n.pu ti peeK .taerg gniod er'uoY");

echo strtolower("SOON, tHiS WILL Look NoRmAL.\n");

echo str_repeat("There's no place like home.\n", 3);

echo gettype($string_var);
echo "\n";
echo var_dump($string_var);