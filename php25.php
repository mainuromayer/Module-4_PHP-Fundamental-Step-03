<?php

$string = "Hello World";

# $string এর লেখাটা কে কিভাবে reverse করব -

# 1st way -
$length = strlen($string) - 1;

for ($i=$length; $i>=0; $i--){
    echo $string[$i];
}
echo "\n";


#------------------------------------
# 2nd way -
$length = strlen($string);

for ($i=1; $i<=$length; $i++){
    echo $string[$i * -1];
}
echo "\n";


#------------------------------------
# 3rd way -
echo strrev($string);
echo "\n";



#------------------------------------
# olleH dlroW
$str = "Hello World";

$part1 = substr($str, 0, 5);
echo strrev($part1) . " ";

$part2 = substr($str, -5);
echo strrev($part2);
