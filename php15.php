<?php
# common array -
# ১ম ভেলুর সাথে ২য় ভেলুর মিল আছে কিনা -
$number1 = array(1, 4, 3, 66, 54, 7, 23, 1, 2);
$number2 = array(88, 3, 21, 44, 3, 28, 1, 2, 7);

$fruits1 = array('a'=>'apple', 'b'=>'banana', 'c'=>'lemon');
$fruits2 = array('d'=>'pineapple', 'b'=>'malta', 'd'=>'grapes', 'e'=>'lemon');

$commonNumbers = array_intersect($number1, $number2);
print_r($commonNumbers);

$commonFruits1 = array_intersect($fruits1, $fruits2);
 # only value check
 print_r($commonFruits1);

$commonFruits2 = array_intersect_assoc($fruits1, $fruits2); 
# key and value check - যদি মিলে, যেটার variable আগে বসানো হইসে সেটার value বসবে।
print_r($commonFruits2);


# ------------------------------------
# difference array -
# ১ম ভেলু সাথে ২য় ভেলুর সাথে মিল আছে কিনা - ১ম টার মান চেক করবে
$diffNumbers = array_diff($number1, $number2);
print_r($diffNumbers);

$diffFruits1 = array_diff($fruits1, $fruits2);
$diffFruits2 = array_diff($fruits2, $fruits1);
print_r($diffFruits1);
print_r($diffFruits2);

$diffFruits3 = array_diff_assoc($fruits1, $fruits2); 
# key and value check - যদি মিলে, যেটার variable আগে বসানো হইসে সেটার value বসবে।
print_r($diffFruits3);