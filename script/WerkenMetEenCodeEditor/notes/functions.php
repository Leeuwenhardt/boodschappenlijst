<?php
namespace Codecademy;

// Write your code below:
function calculateDistance($num, $num2) {
 return abs($num - $num2);
}

echo calculateDistance(-1, 4);

function calculateTip($total) {
  return round($total * 1.18);
}

echo calculateTip(4);

function convertToShout($string) {
    return strtoupper($string) . "!";
   }
   
   echo convertToShout("hi");
   
   function tipGenerously($num) {
     return ceil($num * 1.2);
   }
   
   echo tipGenerously(50);
   echo"\n";
   
   function calculateCircleArea($dia) {
     return pi() * ($dia/2)**2;
   }
   
   echo calculateCircleArea(26);

   $string_var = "Check it out";
echo strtoupper($string_var) . "!\n";

echo ceil(8.873);
echo "\n";
  
echo pi();
echo "\n";

echo str_pad("PHP", 30, "*^*-", STR_PAD_BOTH);
echo "\n";

echo getrandmax();
echo "\n";

echo rand();
echo "\n";

echo rand(1, 52);
echo "\n";

echo abs(-1287);
echo "\n";

echo round(8723.999);
echo "\n";

echo substr_count($string_var, " ");
echo "\n";

echo strrev("\n.pu ti peeK .taerg gniod er'uoY");

echo strtolower("SOON, tHiS WILL Look NoRmAL.\n");

echo str_repeat("There's no place like home.\n", 3);

echo gettype($string_var);
echo "\n";
echo var_dump($string_var);