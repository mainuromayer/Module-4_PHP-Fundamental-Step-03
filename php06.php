<?php

$student = array(
    'fname'   => 'Jamal',
    'lname'   => 'Ahmed',
    'age'     => '22',
    'class'   => 9,
    'section' => 'B',
);

print_r( $student );
echo $student['fname'] . ' ' . $student['lname'] . "\n";
printf( "%s %s \n", $student['fname'], $student['lname'] );
echo "\n";

// -----------------------------------------------
// Associative array convert to string -
echo join( ', ', $student ); // this is not right way
echo "\n";

$serialized = serialize( $student );
echo $serialized;
echo "\n";
echo "\n";

$newStudent = unserialize( $serialized );
print_r( $newStudent );
echo "\n";




// -----------------------------------------------
// Associative array convert to string - JSON
/**
 * JSON [JavaScript Object Notation]
 */
$jsondata = json_encode( $student );
echo $jsondata;

$student2 = json_decode( $jsondata );
print_r($student2);
echo "\n";

/**
 * JSON ডাটা জাভাস্ক্রিপ্ট সহজে ব্যবহার করতে পারে। 
 * JSON যখন কোন ডাটাকে কনভার্ট করে, তখন সে সেটাকে object এ কনভার্ট করে ফেলে।
 */
// এখন JSON থেকে যদি ডাটাকে Arrey হিসেবে পেতে চাই তাহলে -
$student3 = json_decode( $jsondata, true );
print_r($student3);