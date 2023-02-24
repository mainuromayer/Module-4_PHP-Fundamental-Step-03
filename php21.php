<?php

$fruits = array('a'=>'Array', 'b'=>'Banana', 'c'=>'Cherry', 'd'=>'Dates');
/* 
shuffle($fruits);
print_r($fruits);

# এভাবে করলে data loss হবে,
কারণ -
Associative arrary এর key গুলো আর থাকবে না।
আর arrary এর key গুলো shuffle হয়ে যাবে।
 */

 $key = array_rand($fruits);
 echo $key; // rendom ভাবে key সিলেক্ট করতে পারি
 echo "\n";
 print_r($fruits[$key]); // rendom ভাবে value সিলেক্ট করতে পারি

 


 
 
#-------------------------------------------------------------
# আমরা আর একটা variable এ নিয়ে shuffle করে ব্যবহার করতে পারি -
$fruits = array('a'=>'Array', 'b'=>'Banana', 'c'=>'Cherry', 'd'=>'Dates');
$_fruits = $fruits;
shuffle($_fruits);

print_r($_fruits);