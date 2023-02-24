<?php

# strpos   -> case sensitive
# strrpos  -> case sensitive
# stripos  -> case insensitive
# strripos -> case insensitive


# string এর ভিতরে কিভাবে string খোঁজা যাবে - 
$string = "fox Quick brown Fox jumps over the lazy dog fox";

# কত নং index থেকে fox শুরু হয়েছে সেটা খুজবো -
# এখানে Fox প্রথম থেকে খুঁজা শুরু করেছে -
echo strpos($string, "fox") . "\n";



# এখানে Fox শেষ থেকে খুঁজা শুরু করেছে -
echo strrpos($string, "fox") . "\n";



# ..................
$string = "Quick brown fox jumps over the lazy dog";
# strpos কিন্তু case sencitive. এখানে fox যদি capital letter দিয়ে শুরু হত তাহলে সে খুঁজে পেত না। এজন্য আর একটা ফাংশন আছে, যেটা case insencitive

echo stripos($string, 'Fox') . "\n";



# ..................
# যদি index ১৩ থেকে খুঁজতে বলি -
$string = "Quick brown Fox fox jumps over the lazy dog";
echo stripos($string, 'Fox',13) . "\n";



# ..................
# এখানে Fox প্রথম থেকে খুঁজা শুরু করেছে -
$string = "Quick brown Fox fox jumps over the lazy dog";
echo stripos($string, 'Fox') . "\n";



# এখানে Fox শেষ থেকে খুঁজা শুরু করেছে -
$string = "Quick brown Fox fox jumps over the lazy fox dog";
echo strripos($string, 'Fox') . "\n";




#-----------------------------------------------
$string = "Quick brown fox jumps over the lazy dog";
$offset = strpos($string, "Quick");
echo $offset . " = ";

# এখানে offset type check করতে হবে, কারণ ০ কে false ধরা হয়।
# যদি offset false না হয় -
if($offset !== false){
    echo "Word was Found \n";
}else{
    echo "Word was Not Found \n";
}

/* 
==   value check
===  value + type check

!=   value check
!==  value + type check

*/