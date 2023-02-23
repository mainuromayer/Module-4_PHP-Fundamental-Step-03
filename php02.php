<?php

// Arrey Menupulation -

# Arrey is meutable.

$student = [
    "rahim",
    "karim",
    123,
    "monir",
];

echo $student[3];

$student[2] = "shafik";     // ২ নং index টাতে অন্য value বসানো হইসে।


$n = count($student);
for ($i=0; $i<$n; $i++){
    echo $student[$i]."\n";
}
echo "\n";

/* 
Output :
--------
rahim
karim
shafik
monir

*/



// ------------------------------------------------------------------
/**  Arrey এর মধ্যে ডাটা অপারেশন এর জন্য ৪ টা function রয়েছে -
 * array_shift();    # arrey এর শুরু থেকে ডাটা remove করে এবং return করে
 * array_unshift();  # arrey শুরুতে ডাটা এন্ট্রি করার জন্য।
 * array_pop();      # arrey এর শেষ থেকে remove বের করে এবং return করে
 * array_push();     # arrey শেষে ডাটা এন্ট্রি করার জন্য।
 */
// ------------------------------------------------------------------



// ------------------------------------------------------------------
/**  
 * array_shift();    # start -> remove -> return
 * array_unshift();  # start -> Entry
 * array_pop();      # end -> remove -> return
 * array_push();     # end -> entry
 */
// ------------------------------------------------------------------


// ...................................................................
// Arrey Pop

$section = [
    "section-1",
    "section-2",
    "section-3",
];
/* 
 arrey_pop arrey এর শেষ থেকে একটা ডাটা রিমোভ করে রিটার্ন করে দেয়।
*/
$pop = array_pop($section);

$n = count($section);
for ($i=0; $i<$n; $i++){
    echo $section[$i]."\n";
}

echo "return value ".$pop;


echo "\n";
echo "\n";

/* 
output:
-------
section-1
section-2
return value section-3
*/




// ...................................................................
// Arrey Shift -

$class = [
    "class-1",
    "class-2",
    "class-3",
];
/* 
 arrey_shift arrey এর শুরু থেকে একটা ডাটা রিমোভ করে রিটার্ন করে দেয়।
*/
$shift = array_shift($class);

$n = count($class);
for ($i=0; $i<$n; $i++){
    echo $class[$i]."\n";
}


echo "return value ".$shift;
echo "\n";
echo "\n";

/* 
output:
-------
class-2
class-3
return value class-1
*/




// ...................................................................
// Arrey Push -

$number = [
    "number-1",
    "number-2",
    "number-3",
];
/* 
 arrey_push arrey এর শেষে ডাটা insert করে।
*/
$push_A = array_push($number, "number-4");

/* -------------------------------------------------- */
// another way data insert -
$push_B = $number[] = "number-5";
/* -------------------------------------------------- */

$n = count($number);
for ($i=0; $i<$n; $i++){
    echo $number[$i]."\n";
}

echo $push_A;
echo "\n";

echo $push_B;
echo "\n";

/* 
output:
-------
number-1
number-2
number-3
number-4
number-5
4
number-5
*/



// ...................................................................

// Arrey unshift -

$gmail = [
    "message-1",
    "message-2",
    "message-3",
];
/* 
 arrey_unshift arrey এর শুরুতে ডাটা insert করে। 
*/
$unshift_A = array_unshift($gmail, "message-4");
$unshift_B = array_unshift($gmail, "message-5");


$n = count($gmail);
for ($i=0; $i<$n; $i++){
    echo $gmail[$i]."\n";
}


echo "return value ".$unshift_A;
echo "\n";
echo "return value ".$unshift_B;
echo "\n";

/* 
output:
-------
message-5
message-4
message-1
message-2
message-3
return value 4
return value 5
*/


