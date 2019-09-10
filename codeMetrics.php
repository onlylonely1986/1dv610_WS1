<?php

$input = $_POST["input"];

$inputLength = strlen($input);

$countWords = str_word_count($input);

echo "<p>Count letters: " . $inputLength . "</p>";
echo "<p>Count words: " . $countWords . "</p>";



