<?php
$score = 85;
echo "Your grade is:";
if ($score >= 90 && $score <= 100) {
    echo " A";
} elseif ($score >= 80 && $score <= 89) {
    echo " B";
} elseif ($score >= 70 && $score <= 79) {
    echo " C";
} elseif ($score >= 60 && $score <= 69) {
    echo " D";
} else {
    echo " F";
}
?>
