// Scenario: A teacher has a list of student scores from a test and needs to calculate the class
// average.
// • Topics Covered: Indexed Arrays, Looping (foreach), Array Functions (count, array_sum).
// • Sample Input:
// PHP
// $scores = [88, 92, 75, 68, 95];
// • Expected Output:
// • The average score is 83.6.

<?php
 $scores = [88, 92, 75, 68, 95];
 $count = 0;
 for ($i=0; $i<count($scores); $i++){
     $count += $scores[$i];
 }
 echo "The average score is ".($count/count($scores));
?>
