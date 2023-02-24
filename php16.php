<?php
# callback function :
# একটি callback function হল একটি ফাংশন যা একটি argument হিসাবে অন্য ফাংশনে পাস করা হয়

# array_walk(array_variable, callback_function)
# array_map(callback_function, array_variable)
# array_filter(array_variable, callback_function)



#-----------------------------------------------------------


# array_walk -> echo, printf

/** Square (Alt + 0178)
 * 1² = 1 * 1
 * 2² = 2 * 2
 * 3² = 3 * 3
 * .....
 */

/** Cube (Alt + 0179)
 * 1³ = 1 * 1 * 1
 * 2³ = 2 * 2 * 2
 * 3³ = 3 * 3 * 3
 * .....
 */
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12); 

function square1($n){
    printf("Square is %d is %d \n", $n, $n*$n);
}

function cube1($n){
    printf("Cube is %d is %d \n", $n, $n*$n*$n);
}

array_walk($numbers, 'square1');
# number array তে প্রতিটা element এর জন্য square function run করা হইসে।

array_walk($numbers, 'cube1');
# number array তে প্রতিটা element এর জন্য cube function run করা হইসে।




# --------------------------------------------------
# array_map -> print_r, var_dump

/** Square (Alt + 0178)
 * 1² = 1 * 1
 * 2² = 2 * 2
 * 3² = 3 * 3
 * .....
 */

/** Cube (Alt + 0179)
 * 1³ = 1 * 1 * 1
 * 2³ = 2 * 2 * 2
 * 3³ = 3 * 3 * 3
 * .....
 */
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12); 

function square2($n){
    return $n * $n;
}

function cube2($n){
    return $n * $n * $n;
}

$squareArray = array_map('square2', $numbers);
# array_map এ প্রতিটা element এর উপর square function run করে এবং যেটা বের হয় সেটা return করে দেয়।
print_r($squareArray);

$cubeArray = array_map('cube2', $numbers);
# array_map এ প্রতিটা element এর উপর cube function run করে এবং যেটা বের হয় সেটা return করে দেয়।
print_r($cubeArray);




# --------------------------------------------------
# array_filter -> true return করে

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12); 

function even($n){
    return $n%2 == 0;
}
function odd($n){
    return $n%2 == 1;
}

$evenNumber = array_filter($numbers, 'even');
print_r($evenNumber);

$oddNumber = array_filter($numbers, 'odd');
print_r($oddNumber);




# --------------------------------------------------
# আমি s দিয়ে শুরু এমন নাম গুলো দেখতে চাচ্ছি -
$person = array('sujon', 'kabir', 'sabab', 'salim', 'roni', 'jamal', 'kamal', 'sayma');

function filterByS($name){
    return $name[0] == 's';
}

$newPersons = array_filter($person, 'filterByS');
print_r($newPersons);