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

      $keys = array($key, $key2);
      $current_numbers = array($number, $number2);

      foreach ($numbers as $key3 => $number3)
      {
         if (in_array($key3, $keys))
         {
            continue;
         }
         if (array_sum($current_numbers) + $number3 == 2020)
         {
            $solution = array_product($current_numbers) * $number3;
            break 3;
         }
      }
   }
}
echo "Solution is $solution";