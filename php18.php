<?php

# list function ব্যবহার করে array এর প্রতিটা element কে আলাদা আলাদা variable এ assign করব।

$color = array(122, 233, 65, 34);

// $red = $color[0];
// $green = $color[1];
// $blue = $color[2];

list($red, $green, $blue) = $color;
echo $green;

echo "\n";


#-------------------------------------------------
$student = array('Fname', 'Lname', 'Email', 'MobileNumbe');

list($f, $l, $e, $m) = $student = array('Fname', 'Lname', 'Email', 'MobileNumbe');

echo $l;
