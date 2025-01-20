<?php

// variables can be assign as a copy of another variable or by using reference (&)


$my_variable = "Hello";

$copy_variable = $my_variable;
$reference_variable =& $my_variable;

$my_variable .= " World!"; // . is Append .= works like assign operation: $my_variable = $my_variable . " string";

echo "Copy of original variable: " . $copy_variable;
echo "\nReference to original variable: " . $reference_variable;