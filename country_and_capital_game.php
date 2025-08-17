// Scenario: You're making a quiz game. Given a country, the user needs to guess its capital. Your
// script should be able to check if the answer is correct.
// • Topics Covered: Associative Arrays, Functions, Conditionals.
// • Sample Input:
// PHP
// $capitals = [
//  "USA" => "Washington D.C.",
//  "Japan" => "Tokyo",
//  "Bangladesh" => "Dhaka"
// ];
// $country = "Japan";
// $userGuess = "Tokyo";
// • Expected Output:
// • Correct! The capital of Japan is Tokyo.



<?php
$capitals = [
 "USA" => "Washington D.C.",
 "Japan" => "Tokyo",
 "Bangladesh" => "Dhaka"
];
$country = "Japan";
$userGuess = "Tokyo";
foreach ($capitals as $key => $value) {
    if ($key == $country && $userGuess == $value)
    {
        echo "Correct! The Capital of ".$key." is ".$value;
        return 0;
    }
} 
echo "The Answer is wrong."
?>
