<?php
// Array থেকে কিছু ডাটা বের করে আনব / extract করব এর পরে যেগুলো বের করব সেগুলো Array এর মধ্যে আর রাখব না -
// array_splice -

$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');

$someFruits = array_splice( $fruits, 2, 2 );

print_r( $someFruits );
print_r( $fruits );




// -------------------------------------------------------------------------
// Array থেকে কিছু ডাটা বের করে, সেখানে নতুন ডাটা Insert করব -

$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');

$newFruits = array('jackfruit', 'tamarind', 'pineappla');
$someFruits = array_splice( $fruits, 2, 2, $newFruits );

print_r( $someFruits );
print_r( $fruits );



