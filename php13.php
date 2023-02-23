<?php
# sort ------------------
// $fruits = array('apple', 'banana', 'f'=>'orange', 'plum', 'dates', 'mango');
// $numbers = array(11, 2, 56, 3, 4, 2, 77, 5);

// sort($fruits);
// print_r($fruits);

// sort($numbers);
// print_r($numbers);
// /* শুধু value গুলোকে serialized করবে, আর key গুলোকে ফেলে দিবে */

# rsort ------------------
// $fruits = array('apple', 'banana', 'f'=>'orange', 'plum', 'dates', 'mango');
// $numbers = array(11, 2, 56, 3, 4, 2, 77, 5);

// rsort($fruits);
// print_r($fruits);

// rsort($numbers);
// print_r($numbers);
// /* শুধু value গুলোকে serialized করবে উল্টোতে,আর key গুলোকে ফেলে দিবে */

# asort ------------------
// $fruits = array('a'=>'apple', 'b'=>'banana', 'f'=>'orange', 'plum', 'dates', 'mango');
// $numbers = array(11, 2, 56, 3, 4, 2, 77, 5);

// asort($fruits);
// print_r($fruits);

// asort($numbers);
// print_r($numbers);
// /**
//  * এবার key গুলোসহ serialized করবে, আর যেগুলোতে key নেই, সেগুলো indexed অনুসারে নিয়ে নিবে।
//  * value গুলো serialized হবে, কিন্তু value এর উপরে নির্ভর করে key indexing করবে।
//  **/

// echo "actual number position.\n";
// for($i=0; $i<count($numbers); $i++){
//     echo $numbers[$i]."\n";
// }

// echo "shorting after position.\n";
// foreach($numbers as $number){
//     echo $number."\n";
// }

# arsort ------------------
// $fruits = array('a'=>'apple', 'b'=>'banana', 'f'=>'orange', 'plum', 'dates', 'mango');
// $numbers = array(11, 2, 56, 3, 4, 2, 77, 5);

// arsort($fruits);
// print_r($fruits);

// arsort($numbers);
// print_r($numbers);
// /**
//  * এবার key গুলোসহ serialized করবে উল্টোতে, আর যেগুলোতে key নেই, সেগুলো indexed অনুসারে নিয়ে নিবে।
//  * value গুলো serialized হবে উল্টোতে, কিন্তু value এর উপরে নির্ভর করে key indexing করবে।
//  **/

// echo "actual number position.\n";
// for($i=0; $i<count($numbers); $i++){
//     echo $numbers[$i]."\n";
// }

// echo "shorting after position.\n";
// foreach($numbers as $number){
//     echo $number."\n";
// }

# ksort ------------------
// $fruits = array('a'=>'apple', 'b'=>'banana', 'f'=>'orange', 'plum', 'dates', 'mango');
// $numbers = array(11, 2, 56, 3, 4, 2, 77, 5);

// ksort($fruits);
// print_r($fruits);

// ksort($numbers);
// print_r($numbers);
// /**
//  * key এর উপরে বেস করে indexing করে নিবে।
//  * এখানে, প্রথমে যেগুলোতে key নেই, সেগুলোকে সিরিয়ালি indexing করে key বসিয়ে নিবে, যেগুলোতে key আছে, সেগুলোকে সিরিয়ালি indexing করে নিবে।
//  **/

// echo "actual number position.\n";
// for($i=0; $i<count($numbers); $i++){
//     echo $numbers[$i]."\n";
// }

// echo "shorting after position.\n";
// foreach($numbers as $number){
//     echo $number."\n";
// }

# krsort ------------------
// $fruits = array('a'=>'apple', 'b'=>'banana', 'f'=>'orange', 'plum', 'dates', 'mango');
// $numbers = array(11, 2, 56, 3, 4, 2, 77, 5);

// krsort($fruits);
// print_r($fruits);

// krsort($numbers);
// print_r($numbers);
// /** 
//  * key এর উপরে বেস করে indexing করে নিবে উল্টোতে।
//  * এখানে, প্রথমে যেগুলোতে key আছে, সেগুলোকে সিরিয়ালি indexing করে নিবে উল্টোতে, তারপরে যেগুলোতে key নেই , সেগুলোকে সিরিয়ালি indexing করে নিবে উল্টোতে।
//  **/


// echo "actual number position.\n";
// for($i=0; $i<count($numbers); $i++){
//     echo $numbers[$i]."\n";
// }

// echo "shorting after position.\n";
// foreach($numbers as $number){
//     echo $number."\n";
// }

/* ====================================================== */

# sort ------------------
// $fruits = array('a'=>'aa', 'b'=>'bb', 'f'=>'aaa', 'ac', 'daa', 'baa');
// $numbers = array(111, 21, 1, 211, 4, 2, 77, 11);

// sort($fruits, SORT_STRING);
// print_r($fruits);

// sort($numbers, SORT_STRING);
// print_r($numbers);

// /** 
//  * এখানে value এর উপরে বেস করে indexing করে নিবে, কিন্তু সিরিয়াল অনুসারে letter/number এর উপরে বেস করে।
//  **/

# ...........................
// $fruits = array('a'=>'apple', 'b'=>'banana', 'f'=>'painapple', 'Apple', 'Painapple', 'Banana');
// $numbers = array(111, 21, 1, 211, 4, 2, 77, 11);

// sort($fruits, SORT_STRING);
// print_r($fruits);

// sort($numbers, SORT_STRING);
// print_r($numbers);

// /** 
//  * এখানে value এর উপরে বেস করে indexing করে নিবে,এবং ASCII table এর উপরে বেস করে indexing করে নিবে।
//  * এটা হচ্ছে case sensitive sorting.
//  **/

// ...........................
$fruits = array('a'=>'apple', 'b'=>'banana', 'f'=>'painapple', 'Apple', 'Painapple', 'Banana');
$numbers = array(111, 21, 1, 211, 4, 2, 77, 11);

sort($fruits, SORT_STRING | SORT_FLAG_CASE);
print_r($fruits);

sort($numbers, SORT_STRING | SORT_FLAG_CASE);
print_r($numbers);

/** 
 * এখানে value এর উপরে বেস করে indexing করে নিবে,এবং small letter এর পরে capital lettle বসবে। a, A, b, B, ...
 * এটা হচ্ছে case insensitive sorting.
 **/
