<?php
// Outputting to the screen
echo "Hello World!\n";

// Variables
// $<variable-name> = <value>
$a = 'Hello';
echo $a;
echo "\n";
$a = 12;
echo $a;
echo "\n";

// Operations
$num1 = 12;
$num2 = 13; 

$num3 = $num1 + $num2;
$num4 = $num1 - $num2;
$num5 = $num1 * $num2;
$num6 = $num1 / $num2;
$num7 = $num2 % $num1;  // Remainder operation (modulo)

echo "${num1} + ${num2} = ${num3}\n";
echo "${num1} - ${num2} = ${num4}\n";
echo "${num1} * ${num2} = ${num5}\n";
echo "${num1} / ${num2} = ${num6}\n";
echo "${num2} % ${num1} = ${num7}\n";

?>