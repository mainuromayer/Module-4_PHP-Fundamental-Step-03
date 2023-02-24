<?php
# array_reduce -
# array এর সবগুলো element কে যোগ করে ছোট করে ফেলবে।
$number = array(1, 2, 3, 4, 5, 6);

# এখানে oldValue 0 সেট করে দিসি -
// function sum($oldValue=0, $newValue){
//     return $oldValue + $newValue;
// }

# কিছুই না পাঠালে oldValue 0 দিয়ে শুরু -
function sum($oldValue, $newValue){
    return $oldValue + $newValue;
}

# এখানে oldValue 1 argument এর মাধ্যমে পাস করালাম -
// $sum = array_reduce($number, 'sum',1);

$sum = array_reduce($number, 'sum');
echo $sum;



/** How can It work -
 * sum(0, 1);  // 1
 * sum(1, 2);  // 3
 * sum(3, 3);  // 6
 * sum(6, 4);  // 10
 * sum(10, 5);  // 15
 * sum(15, 6);  // 21
 * এখানে প্রথমবার কল করার পর যে ভেলু রিটার্ন পাবে, পরেরবার কল করার সময় oldValue তে আগের ভেলু পাস করিয়ে দিবে।
 */

 echo "\n";


#------------------------------------------------------------
# জোড় সংখ্যা গুলোর যোগফল -
$number = array(1, 2, 3, 4, 5, 6);

function values($oldValue, $newValue){
    if($newValue%2 == 0){
        return $oldValue + $newValue;
    }
    return $oldValue;
}

$sum = array_reduce($number, 'values');
echo $sum;

echo "\n";



#------------------------------------------------------------

# বিজোড় সংখ্যা গুলোর যোগফল -
$number = array(1, 2, 3, 4, 5, 6);

function numbers($oldValue, $newValue){
    if($newValue%2 == 1){
        return $oldValue + $newValue;
    }
    return $oldValue;
}

$sum = array_reduce($number, 'numbers');
echo $sum;