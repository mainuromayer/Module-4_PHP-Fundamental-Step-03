<?php

$first_name = "Mainur";
$last_name = "Rahaman";


# direct print করে
printf("Your first name : %s and last name : %s", $first_name, $last_name);
echo PHP_EOL;


# কোন একটা variable এ store করে রাখে -
$str = sprintf("Your first name : %s and last name : %s", $first_name, $last_name);
echo $str;
echo PHP_EOL;

# কোন একটা variable এ store করে রাখে -
vprintf("Your first name : %s and last name : %s", array($first_name, $last_name));

echo PHP_EOL;