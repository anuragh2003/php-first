<?php 
echo "Jidige Anuragh<br>"; //first answer 
echo "Hello I am 'John Doe'<br>";//second answer
echo "Hello I'am \"John Doe\"";
 const num=7;//third answer 
$p=1;
$t=2;
$r=2;
$sp=$p*$t*$r/100;
echo "<br>sp:".$sp;//fourth answer 
// echo "Enter a number: ";
// $number = trim(fgets(STDIN)); // Take input from user
// $square = $number * $number;
// echo "The square of $number is $square.\n";//fifth answer(doubt)

echo "Enter your first name: ";
$first = trim(fgets(STDIN));

echo "Enter your last name: ";
$last = trim(fgets(STDIN));

$fullName = $first . " " . $last;
echo "Your full name is: $fullName\n";//sixth answer

$a=2;
$b=1;
$quo=$a/$b;
echo "<br>q:".$quo; 
$rem=$a%$b;
echo "<br>r:".$rem; //seventh answer
echo "Enter first number: ";
$a = trim(fgets(STDIN));

echo "Enter second number: ";
$b = trim(fgets(STDIN));

echo "Before swap: a = $a, b = $b\n";

$temp = $a;
$a = $b;
$b = $temp;

echo "After swap: a = $a, b = $b\n";//eight answer
echo "Enter a string: ";
$input = trim(fgets(STDIN));

// Removes all whitespace (spaces, tabs, newlines)
$noWhitespace = preg_replace('/\s+/', '', $input);

echo "String without whitespaces: $noWhitespace\n";//ninth answer



?>
