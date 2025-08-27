<?php
$text = "Hello World";
$count =0;
for ($i = 0; $i < strlen($text); $i++) {
    $char = strtolower($text[$i]);
  if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
    $count++;
  }
}
echo "The string \"".$text."\" has ".$count." vowels.";
?>
