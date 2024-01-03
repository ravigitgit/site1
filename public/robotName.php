<?php

/* Robot Name
  Manage robot factory settings. When a robot comes off the factory floor, it has no name.
  The first time you turn on a robot, a random name is generated in the format of two uppercase letters followed by three digits, such as RX837 or BC811.
  Create a function that generates names with this format. The names must be random: they should not follow a predictable sequence.


   Here are the steps you can take to complete this exercise:
   1. Generate an array of characters A-Z. Check out the links below for a function to use.
   2. Randomize the items in the array. Check out the links below for a function to use.
   3. Generate a random number between 100-999. Check out the links below for a function to use.
   4. Return a string with the first two items from the array and a random number.
   Check out these functions for helping you curate a solution to this challenge:
   ⚫ range() - For generating letters A-Z
   ⚫ shuffle() - For randomizing the letters.
   ⚫ mt rand() - For generating a random number between 100-999

*/

declare(strict_types=1);

function getNewName()
{
$letters = range('A','Z');
shuffle($letters);
$numbers = mt_rand(100,999);

return "{$letters[0]}{$letters[1]}{$numbers}";

}
var_dump(getNewName());
