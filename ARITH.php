<?php
$firstNumber = readline("Enter the first number: ");

$sign = readline("Enter the sign: ");

$secondNumber = readline("Enter the second number: ");

if ($sign != "+" || "-" || "*")
{
echo "Warning!You can only use these signs: +, -, *" . PHP_EOL;die();
}
echo $firstNumber . PHP_EOL;
echo $sign . $secondNumber . PHP_EOL;
echo "------" . PHP_EOL;


if ($sign === "+")
{
echo $firstNumber + $secondNumber . PHP_EOL;
} elseif ($sign === "-")
{
echo $firstNumber - $secondNumber . PHP_EOL;
} elseif($sign === "*")
{
echo $firstNumber * $secondNumber . PHP_EOL;
} else
{
echo $firstNumber / $secondNumber . PHP_EOL;
}