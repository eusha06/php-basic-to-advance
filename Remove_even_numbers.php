
<!-- Scenario: You have a list of numbers and want to create a new list containing only the odd
numbers from the original list.
• Topics Covered: Arrays, Looping, Conditionals.
• Sample Input:
PHP
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
• Expected Output: (The output is an array, you can print it using print_r or a loop)
• Array
• (
• [0] => 1
• [1] => 3
• [2] => 5
• [3] => 7
• [4] => 9
• ) -->



<?php
 $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
 $array=[];
 for ($i=0; $i<sizeof($numbers); $i++){
    if ($numbers[$i] & 1) {
        $array[] = $numbers[$i];
    }
 }
 print_r($array);
?>
