<?php 
// PHPs function are created by using "function" keyword.
// It's not required to provide the return type or arguments type

function new_line(){
    echo "\n";
}

function print_word($word){
    echo "The word is: " . $word;
    return 1;
}

echo print_word("hello"); // return 1
new_line();
echo print_word("hello"); // return 1