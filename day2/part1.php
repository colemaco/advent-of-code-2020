<?php
// Advent of Code 2020 - Day 2 Part 1
$passwords = file('input.txt');
$valid_password_count = 0;
foreach ($passwords as $line)
{
   if (preg_match('/^([0-9]{1,2})-([0-9]{1,2})\s(.)\:\s(.+)/', $line, $matches))
   {
      $min = $matches[1];
      $max = $matches[2];
      $character = $matches[3];
      $password = $matches[4];
      $occurrences = substr_count($password, $character);
      if ($occurrences >= $min && $occurrences <= $max)
      {
         $valid_password_count++;
      }
   }
}
echo "Valid passwords: $valid_password_count \n";