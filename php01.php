<?php

// 2 style arrey write system -
// 1st way -
$student = array(
    "Rahim",
    "Karim",
    123,
    "monir"
);


// 2nd way -
$student = [
    "Rahim",
    "Karim",
    123,
    "monir"
];


// ........................
echo $student[0];
// echo variable_name[offset];
echo PHP_EOL;


// ........................
echo count($student);
echo PHP_EOL;


// ........................
// এভাবে array এর ভিতর কি আছে সবকিছু চেক করতে পারি -
var_dump($student);
echo PHP_EOL;
echo PHP_EOL;


// ........................
// এভাবে array এর সবগুলো item দেখতে পারি -
$count = count($student);
for($i=0; $i < $count; $i++){
    echo $student[$i];
    echo PHP_EOL;
}
echo PHP_EOL;


// ........................
// এভাবে array এর সবগুলো item কে উল্টোভাবে দেখতে পারি -

for($i=$count-1; $i >= 0; $i--){
    echo $student[$i];
    echo PHP_EOL;
}
echo PHP_EOL;