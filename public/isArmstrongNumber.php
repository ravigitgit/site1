<?php

declare(strict_types=1);

function cube($n)
{
    return ($n * $n * $n);
}
function isArmstrongNumber($numbers)
{
  $number = str_split($numbers);
  $a = array_map('cube',$number);
  $b = array_sum($a);

  return ($numbers == $b);
}



$c = isArmstrongNumber('153');
var_dump($c);
// str_split(string $string, int $length = 1): array
//
// array_map(?callable $callback, array $array, array ...$arrays): array
//
// count(Countable|array $value, int $mode = COUNT_NORMAL): int
//
// array_sum(array $array): int|float
