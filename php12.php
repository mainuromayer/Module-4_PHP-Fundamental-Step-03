<?php
# Concatenating several arrays -

// --------------------------------------------------------------------------
# Indexed Array
# দুইটা array কে যুক্ত করব -

$fruits = array( 'apple', 'banana', 'orange', 'plum', 'dates', 'mango' );

// ...............................................
# 1st way -
// $newFruits1 = array_slice($fruits, 0, 3);
// $newFruits2 = array_slice($fruits, 3);

// $newFruits = array_merge($newFruits1, $newFruits2);

// // print_r($fruits);
// print_r($newFruits1);
// print_r($newFruits2);
// print_r($newFruits);

// ...............................................
# 2nd way -
// $newFruits1 = array_slice($fruits, 0, 3, true);
// $newFruits2 = array_slice($fruits, 3, null, true);

// $newFruitsPlus = $newFruits1 + $newFruits2;

// // print_r($fruits);
// print_r($newFruits1);
// print_r($newFruits2);
// print_r($newFruitsPlus);

// --------------------------------------------------------------------------
# Associative Array
# দুইটা array কে যুক্ত করব -
$random = array( 'a' => 12, 'b' => 45, 'c' => 34, 'd' => 22, 'e' => 77, 'f' => 31, 12 => 78, 'g' => 87 );

// ..............................................
# problem this way -
$randomData = array_splice( $random, 2, 2, array( 'j' => 45, 'k' => 12 ) );
print_r( $randomData );
print_r( $random );

echo "-----------------------\n";

// ..............................................
# right way -
$r1 = array_slice( $random, 0, 2, true );
$r2 = array_slice( $random, 4, null, true );
$r3 = array( 'j' => 45, 'k' => 12 );

$randomCorrectWay = $r1 + $r3 + $r2;
print_r( $r1 );
print_r( $r2 );

print_r( $randomCorrectWay );

# merge way - problem this way
$merge = array_merge( $r1, $r3, $r2 );
print_r( $merge );
