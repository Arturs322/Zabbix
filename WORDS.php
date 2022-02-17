<?php
$firstWord = readline("Enter the first word: ");

$secondWord = readline("Enter the second word: ");

$thirdWord = readline("Enter the third word: ");

$lastCharFirst = substr($firstWord, -1) . PHP_EOL;
$firstCharSecond = $secondWord[0] . PHP_EOL;
$lastCharSecond = substr($secondWord, -1) . PHP_EOL;
$firstCharThird = $thirdWord[0] . PHP_EOL;

if ($lastCharFirst == $firstCharSecond && $lastCharSecond == $firstCharThird)
{
    echo "Ordering is possible." . PHP_EOL;
} else
{
    echo "The door cannot be opened." . PHP_EOL;
}