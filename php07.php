<?php
// Arrey Clone -

$person = array('fname' => 'Hello', 'lname' => 'World');
$newPerson = $person;
$newPerson['lname'] = 'Pluto';

print_r($person);
print_r($newPerson);

// copy by value
// deep copy


// ..................................
// Function using -
$person = array('fname' => 'Hello', 'lname' => 'World');
    function printPerson($person){
        $person['fname'] .= " Changed";
        print_r($person);
    }

    printPerson($person);
    print_r($person);





// ----------------------------------------------------

$name = array('first' => '1st', 'second' => '2nd');
$newName = &$name;
$newName['first'] = ' New';

print_r($name);
print_r($newName);


// copy by reference
// shallow copy


// .................................................
// Function using -
$name = array('first' => '1st', 'second' => '2nd');
function printName(&$name){
    $name['first'] .=' New';
    print_r($name);
}

printName($name);
print_r($name);