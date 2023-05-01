<?php
//voorbeeld met echo
//echo is ook iets snelller dan print

echo "<h1>Test header</h1>";
echo "test paragraaf 1. <br>";

//Echo staatoe om meerdere parameters te gebruiken - print doet dat niet
echo "deze ", "string ", "heeft ", "meerdere parameters ";
echo "<hr />";

//Output variabelen met echo
$txt1 = "voorbeeld tekst 1";
$txt2 = "eten";
$x = 20;
$y = 30;

echo "<h2>" . $txt1 . "</h2>";
echo "Ik hou van " . $txt2 . "<br>";
echo $x + $y;

// output met print
print "<h1>Test header</h1>";
print "voorbeeld paragraaf 1. <br>";
print "<hr />";

//output variabelen met print
$txt1 = "voorbeeld tekst 1";
$txt2 = "eten";
$x = 20;
$y = 30;

print "<h2>" . $txt1 . "</h2>";
print "Ik hou van " . $txt2 . "<br>";
print $x + $y;
?>