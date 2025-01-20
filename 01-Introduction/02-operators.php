<?php 

// Operations works using PEMDAS order
/*  1- Parenthesis
    2- Exponential
    3- Multiplication
    4- Division
    5- Add
    6- Subtraction
 */

echo 1 + 2 ** 2; // 5 instead of 9
echo "\n";
echo (1 + 2) ** 2; // returns 9
echo "\n";

/* Exercise 
I’m trying to figure out how much money I should have. At the start of the day I had $94.    
    I spent $4.25 on coffee
    A friend gave me $7 that he owed me
    I went out for a meal. The bill was $23.50, but I also gave a 20% tip.
    Some friends and I found $20 on the ground and split it four ways
*/

echo 94 - 4.25 + 7 - 23.5 - (23.5 * 0.20) + (20/4);
echo "\n";

// PHP also supports assignment operators
/*
Operation: 	Long Syntax: 	Short Syntax:
Add 	$x = $x + $y 	$x += $y
Subtract 	$x = $x - $y 	$x -= $y
Multiply 	$x = $x * $y 	$x *= $y
Divide 	$x = $x / $y 	$x /= $y
Mod 	$x = $x % $y 	$x %= $y

and increment/decrement operators like
*/

$var = 7;
$var++;
echo $var; // 8
echo "\n";
$var--;
$var--;
echo $var; // 6
echo "\n";
