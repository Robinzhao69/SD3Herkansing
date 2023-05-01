<?php

$x = "global"; // global scope

function firstTest() {
    // echo $x; geeft fout melding omdat dit in local scope zit
    global $x; // global keyword zorgt ervoor dat de ik de global vars kan gebruiken binnen functions.
    echo $x . "<br>";
}
firstTest();

echo $x . "<br>"; //print de global variable.

// Local scope voorbeeld

function secondTest() {
    $y = "local"; //local scope var kunnen alleen in functions gebruikt worden
    echo $y ."<br>";// print local scope var uit 
}
secondTest();

echo $y ."<br>"; //dit is buiten de local scope dus dit gaat zorgen voor een foutmelding

//static keyword voorbeeld

function staticTest() {
    static $s = 10; //De static keyword onthoud de waarde van de variable
    echo $s;
    $s++; //increment elke keer dat de function wordt gebruikt
}
staticTest();
echo "<br>";
staticTest();
echo "<br>";
staticTest();
// hierbij zie je dat de waarde wordt onthouden en met de increment steeds een hoger getal wordt.


?>