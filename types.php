<?php

// var_dump wordt gebruikt om de waardes en raw data te zien van de variable

// string
$x = "Hello world";
$y = 'Hello world';
echo $x;
echo "<br>";
echo $y;
echo "<hr />";

// integer

// regels
// moet op zijn minst een cijfer bevatten
// mag geen decimaal punt bevatten
// kan zowel positief als negatief zijn
 
$num = 6000;
var_dump($num);
echo "<hr />";

// float
$num2 = 20.565;
var_dump($num2);
echo "<hr />";

// array
$sports = array("voetbal", "basketbal", "tennis", "zwemmen");
var_dump($sports);
echo "<hr />";

// null

// null is een variable dat geen value heeft anders dan null
$color = "blauw"; // value is blauw
$color = null; // value van $color wordt naar null gezet
var_dump($color);

// boolean

// boolean kan maar 2 values hebben het is true of false
// merendeels gebruikt voor conditional statements
$x = true; 
$y = false;
var_dump($x);
var_dump($y);
?>