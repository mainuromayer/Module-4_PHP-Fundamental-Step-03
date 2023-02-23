<?php

$fruits = array( 'a'=>'apple', 'b'=>'banana', 'f'=>'orange', 'p'=>'plum', 'd'=>'dates', 'm'=>'mango' );

$numbers = array( 1, 11, 2, 56, '3', 4, 22, 77, 5, 2 );

# চেক করতে হবে, 56 এই array তে আছে কিনা -
// if ( in_array( 56, $numbers ) ) {
//     echo "56 is Found\n";
// }
# .........................
// if ( in_array( 3, $numbers, true ) ) { # type check | straight check
//     echo "3 is Found (Straight Check)\n";
// }

// if ( in_array( 3, $numbers ) ) { # type check | lose check
//     echo "3 is Found (Luse Check)\n";
// }
# .........................
# চেক করতে হবে, apple এই array তে আছে কিনা -
// if ( in_array( 'apple', $fruits ) ) {
//     echo "Apple is Found\n";
// }

# ----------------------------------------------------

# চেক করতে হবে, 56 এই array তে কোন index key তে আছে -
// $offset = array_search( 56, $numbers );
// echo $offset;
// echo "\n";
# .........................
# চেক করতে হবে, 2 এই array তে কোন index key তে আছে -
# যে array খুঁজছি সেটা যদি multiple থাকে, তাহলে শুধু প্রথম index position টাকেই নিবে -
$offset = array_search( 2, $numbers );
echo $offset;
echo "\n";
# .........................
# চেক করতে হবে, banana এই array তে কোন index key তে আছে -
// $index = array_search( 'banana', $fruits );
// echo $index;