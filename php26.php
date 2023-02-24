<?php
# PHP তে আমরা একটা বড় string কে word-এ বিভক্ত করব -
# 1st way -
$string = "Hello World, How are you";
$string2 = "Quick brown fox jumps over the lazy dog";
$parts = explode( " ", $string );
print_r($parts);

#.....................
$_parts01 = preg_split('/(,|, | )/', $string);
print_r($_parts01);


$_parts02 = preg_split('~(\s|, | )~', $string2);
print_r($_parts02);



#.....................
$_parts2 = strtok($string, " ,");
while($_parts2 !== false){
    echo $_parts2 . "\n";  // iterator
    $_parts2 = strtok(" ,");
}
echo "\n";

#.....................
$_parts3 = strtok($string2, " ");
while($_parts3 !== false){
    echo $_parts3 . "\n"; // iterator
    $_parts3 = strtok(" ");
}
echo "\n";

/** strtok -
 * এটা হচ্ছে একটা iterator,
 * এটা object return করে,
 * এটার মাধ্যমে count করা যাবে না
 */


#---------------------------------------------------
# আবার জোড়া দিব -
# join = implode => alias(ওরফে, অন্য নাম)
// $orginal = join(" ", $parts);
$orginal = implode(" ", $parts);
print_r($orginal);



#---------------------------------------------------
# PHP তে আমরা একটা বড় string কে character-এ বিভক্ত করব -
$string = "Hello World, How are you";
$parts2 = str_split($string);
print_r($parts2);



#---------------------------------------------------
# এখানে H, e, l, o কয়টা আছে কিভাবে বের করব -
$string = "Hello World, How are you";
$string_parts = str_split($string);

function find_H($char){
        return $char == "H";
}
function find_e($char){
        return $char == "e";
}
function find_l($char){
        return $char == "l";
}
function find_o($char){
        return $char == "o";
}

$result_H = array_filter($string_parts, 'find_H');
print_r($result_H);
$result_e = array_filter($string_parts, 'find_e');
print_r($result_e);
$result_l = array_filter($string_parts, 'find_l');
print_r($result_l);
$result_o = array_filter($string_parts, 'find_o');
print_r($result_o);




#---------------------------------------------------