<?php


// 1. Check if Year is evenly divisible by 4
// 2. Check if Year is evenly divisible by 100
// 3. Unless evenly divisible by 400
// 4. Return false on passing conditions
// 5. otherwise return true


declare(strict_types=1);

function isleap(int $year): bool
{$b = null;
  if ($year % 4 !== 0)
  {
    return false;
  }
  if ($year % 100 === 0 && $year % 400 !== 0)
  {
    return false;
  }
return true;
}

$y = isleap(1996);
var_dump($y);



// alternate solutions


// function isLeap(int $year): bool
// {
//   return (!($year % 4) && ($year % 100) || !($year % 400);
// }


// function isLeap(int $year): bool
// {
//   if ($year % 4 == 0)
//   {
//     if($year % 100 == 0)
//     {
//       if ($year % 400 == 0)
//       {
//         return true;
//       }
//       return false;
//     }
//     return true;
//   }
//   return false;
// }
