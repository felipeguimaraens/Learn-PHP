<?php

// PHP supports differents types of arguments besides by reference

// Default value (optional parameter)
function square_root( $x , $y=2){
    return $x ** $y;
}

echo "square_root(2)   = " . square_root(2) . "\n";
echo "square_root(2,2) = " . square_root(2,2) . "\n";
echo "square_root(2,3) = " . square_root(2,3) . "\n";

// Union types

function concatenate(string $word, string|int $post_word){
    return $word . $post_word;   
}

echo concatenate("my number is: ", 5) . "\n";
echo concatenate("my number is: ", "26") . "\n";
echo concatenate("my number is: ", 5.25) . "\n"; // Error "Deprecated: Implicit conversion from float 5.25 to int loses precision" since float was not defined acceptable input type
