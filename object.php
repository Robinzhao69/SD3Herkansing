
<?php 
// public betekend dat het overal toegankelijk is

// private is alleen maar toegankelijk tot de class waarin het zit 

// protected betekend dat het alleen maar toegankelijk is voor zijn eigen class en de parent classes waarin het zit


// gemaakte class

class person {
    // gemaakte properties voor de class (variables zitten van aan het object)
    public $firstname;
    public $lastname;
    public $age;

    // values geven aan de property variables
    public function __construct($firstname, $lastname, $age) {
        $this->firstname = $firstname;  
        $this->lastname = $lastname;
        $this->age = $age;  
    }

    // method gemaakt (het i een functie dat gebonden zit aan een object)
    public function hello() {
        return "Ik ben " . $this->firstname . " " . $this->lastname . ", mijn leeftijd is: " . $this->age . ""; 
    }
}
// voorbeeld personen worden aangemaakt
$person1 = new Person('Robin', 'Hu', 18);
$person2 = new Person('Bob', 'Jansen', 27);

// print uit wat de hello method returned
echo $person1->hello();
echo "<br>";
echo $person2->hello();
?>
