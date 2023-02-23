<?php
/**
 *  PHP variable এ কোন arrey তে ডাটা আছে কিনা চেক করার জন্য ২ টা function use হয়
 * -> isset
 * -> empty
 * */

// -----------------------------------
//  types of different isset / empty -

// $name; // Not set
$name = 0; // Name is set
// $name=1; // Name is set
// $name=-1; // Name is set
// $name=true; // Name is set
// $name=false; // Name is set
// $name=''; // Name is set
// $name=null; // Not set

if ( isset( $name ) ) {
    echo "Name is set";
} else {
    echo "Not set";
}
echo "\n";

// ................................
// $name; // Name is empty
$name = 0; // Name is empty
// $name=1; // Not empty
// $name=-1; // Not empty
// $name=true; // Not empty
// $name=false; // Name is empty
// $name=''; // Name is empty
// $name=null; // Name is empty

if ( empty( $name ) ) {
    echo "Name is empty";
} else {
    echo "Not empty";
}
echo "\n";



// ------------------------------------
$name = 0;
// $name = '';
// $name = false;
if ( isset( $name ) && is_numeric( $name ) || $name != '' ) {
    echo "Name is set and it's not empty";
} else {
    echo 'Name is either not set or it\'s empty';
}

// এটা হচ্ছে সঠিক উপায়, যদি আমি ০ সহ চেক করতে চাই।
