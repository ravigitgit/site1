<?php

// 1. Set a default value
// 2. Use string interpolation to return the message 


declare(strict_types=1);

function twoFer(string $name="you"): string
{

  return "One for {$name}, one for me.";
}
$n = twoFer();
var_dump($n);
