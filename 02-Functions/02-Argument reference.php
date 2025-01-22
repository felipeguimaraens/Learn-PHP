<?php
// PHP functions receive arguments as a copy (changes that happens within function scope doesn't change the variables)
// Unless we pass arguments as a reference (&)



function change_string_wrong($my_string){
    $my_string .= " Text appended by function.";
}

function change_string_correct(&$my_string){
    $my_string .= " Text appended by function.";
}

$text = "Hi there!";
echo "Original text: " . $text . "\n";

change_string_wrong($text);
echo "First attempt to change: " . $text . "\n";
change_string_correct($text);
echo "Second attempt to change: " . $text . "\n";