<?php

# sscanf() -

$name = "Abul Hossain 01234567891 abc@defg.com";
# এখান থেকে আমরা লাস্ট অংশটা access করতে চাই

$parts = sscanf($name, "%s %s %11d %s" );
# এখান থেকে string এর সবগুলো word ভেঙ্গে আলাদা করলাম

print_r($parts);



#.........................

# এখান থেকে যে word ভেঙ্গে আলাদা করলাম তা আলাদা আলাদা variable এ নিয়ে নিতে পারি -
sscanf($name, "%s %s %11s %s", $fname, $lname, $mobile, $email);

echo $email;
echo "\n \n";


#-------------------------------------------------
# hex_color code -> decimal_color code

$hexColor = "#FF2F44";
# string -
sscanf($hexColor, "# %2s %2s %2s", $red, $green, $blue);
echo $red . "\n";
echo $green . "\n";
echo $blue . "\n \n";

# hexa_decimal -
sscanf($hexColor, "# %2x %2x %2x", $red, $green, $blue);
echo $red . "\n";
echo $green . "\n";
echo $blue . "\n \n";









// -------------------------------
// semilar Example
$rgb = array('red', 'green', 'blue');
list($red, $green, $blue) = $rgb;
echo $green;
echo PHP_EOL;