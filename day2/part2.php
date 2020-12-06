<?php
// Advent of Code 2020 - Day 2 Part 2
$passwords = file('input.txt');
$valid_password_count = 0;
foreach ($passwords as $line)
{
   if (preg_match('/^([0-9]{1,2})-([0-9]{1,2})\s(.)\:\s(.+)/', $line, $matches))
   {
      // Parse line off password file
      $positions = array($matches[1] - 1, $matches[2] - 1);
      $character = $matches[3];
      $password = $matches[4];
      // Check how many position matches
      $occurrences = 0;
      foreach ($positions as $position)
      {
         if (substr($password, $position, 1) == $character)
         {
            $occurrences++;
         }
      }
      // Check if valid
      if ($occurrences === 1)
      {
         $valid_password_count ++;
      }
   }
}
echo "Valid passwords: $valid_password_count \n";