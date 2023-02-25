<?php

# trim
# ltrim
# rtrim

# trim - non printable chatacter গুলোকে বাদ দিয়ে ফেলে দুই পাশ থেকে
$string = " hello \n,";
$string = trim($string);
echo $string;
echo "Data";

#.........................
# specific কোন গুলো বাদ দিতে হবে, বলে দিলে -
$string = " hello \n,";
$string = trim($string, " \n,");
echo $string;
echo "Data";


#------------------------------------
# ltrim - non printable chatacter গুলোকে বাদ দিয়ে ফেলে বাম পাশ থেকে
$string = " hello \n,";
$string = ltrim($string);
echo $string;
echo "Data";


#------------------------------------
# rtrim - non printable chatacter গুলোকে বাদ দিয়ে ফেলে ডান পাশ থেকে
$string = " hello \n,";
$string = rtrim($string);
echo $string;
echo "Data";