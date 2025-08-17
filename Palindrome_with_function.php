// ## 10. Palindrome Checker
// Scenario: A palindrome is a word that reads the same forwards and backward (e.g., "madam",
// "level"). Create a function that checks if a given word is a palindrome.
// • Topics Covered: Functions, String Manipulation (strrev, strtolower).
// • Sample Input:
// PHP
// // Calling the function
// checkPalindrome("Racecar");
// • Expected Output:
// • "Racecar" is a palindrome.

<?php
function checkPalindrome($text){
  $text1 = strtolower($text);
  $text2 = strrev($text1);
  if ($text1 == $text2) echo "\"".$text."\" is a palindrome.";
  else echo "\"".$text."\" is not a palindrome."; 
}

checkPalindrome("Racecar");
?>
