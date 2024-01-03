<?php


declare(strict_types=1);




function slices(string $series, int $size) : array
{
  $seriesLength = strlen($series);

  if ($size > $seriesLength || $size < 1){
    return [];
  }

  $results = [];

  for ($i = 0; $i <= $seriesLength - $size; $i++) {
  $results[] = substr($series, $i, $size);
}

return $results;
}

$a = slices('54321',3);
var_dump($a);
