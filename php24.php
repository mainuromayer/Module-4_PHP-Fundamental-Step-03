<?php

# PHP তে একটা string এর কোন character কে array এর মত করে access করব

$string = "Hello World";

echo $string[0];    # string এর first value
echo $string[-1];   # string এর last value
echo "\n";

#---------------------------------------------
# substr -
# যদি string এর প্রথম ৫ টা value access করতে চাই -
echo substr($string, 0, 5);
echo "\n";

# যদি string এর শে্য ৫ টা value access করতে চাই -
echo substr($string, -5);
echo "\n";

#---------------------------------------------
# strlen -
# যদি string কয়টা value আছে বের করতে চাই -
$length = strlen($string);
echo $length;
echo "\n";

# strlen এর মাধ্যমে string এর প্রথম থেকে value access করা যাবে না, শেষ ৫ টা value access করব -
$string = "Hello World";
$_length = strlen($string);

echo substr($string,$length-5);

