<?php
/* In this project, we’ll use PHP to write a function to fill in a Mad Libs story! Mad Libs are short stories with blank spaces, which get filled in by the user. */
// Project info: https://www.codecademy.com/paths/php-skill/tracks/php-functions/modules/introduction-to-functions-in-php-sp/projects/mad-lib-functions-php

$story = "The woods are lovely, dark, and deep.
But I have promises to keep,
And miles to go before I sleep,
And miles to go before I sleep.
";

function generateStory($singular_noun, $verb, $color, $distance_unit){
  $story = "The ${singular_noun}s are lovely, $color, and deep.\nBut I have promises to keep,\nAnd $distance_unit to go before I $verb,\nAnd $distance_unit to go before I $verb.\n\n";
  return $story;
}

// Custom function using Global variable
function generateCustom($OldWord, $NewWord){
  global $story;
  $story = str_replace($OldWord, $NewWord, $story);
}

echo generateStory("Guy", "fish", "blue", "meters");
echo generateStory("Prince", "rain", "purple", "centimeters");
echo generateStory("Magali", "eat", "yellow", "miles");

// Custom replacement
generateCustom("miles","milimeters");
generateCustom("sleep","run");
echo $story;