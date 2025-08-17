// Scenario: Your web application needs to display a user's profile information, which is stored in a
// structured way.
// • Topics Covered: Associative Arrays, foreach loop.
// • Sample Input:
// PHP
// $userProfile = [
//  "firstName" => "John",
//  "lastName" => "Doe",
//  "email" => "john.doe@example.com",
//  "city" => "New York"
// ];
// • Expected Output:
// • First Name: John
// • Last Name: Doe
// • Email: john.doe@example.com
// • City: New York


<?php
$userProfile = [
 "firstName" => "John",
 "lastName" => "Doe",
 "email" => "john.doe@example.com",
 "city" => "New York"
];
echo "First Name: ".$userProfile["firstName"];
echo "<br>";
echo "Last Name: ".$userProfile["lastName"];
echo "<br>";
echo "Email: ".$userProfile["email"];
echo "<br>";
echo "City: ".$userProfile["city"];
echo "<br>";

foreach ($userProfile as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
}
?>
