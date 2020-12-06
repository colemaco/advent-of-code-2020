<?php
$numbers = file('input.txt');
$solution = NULL;
foreach ($numbers as $key => $number)
{
   foreach ($numbers as $key2 => $number2)
   {
      // Prevent testing the same number
      if ($key == $key2)
      {
         continue;
      }
      // Test the sum
      if ($number + $number2 == 2020)
      {
         // Found the solution
         $solution =  $number * $number2;
         break;
      }
   }
}
echo "Solution is $solution";