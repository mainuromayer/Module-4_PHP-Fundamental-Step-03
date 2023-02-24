<?php

# ASCII = American Standard Code For Information Interchange
// এটা ১২৮ টা character এর একটা টেবিল।


echo ord('A');  // ASCII code দেখার জন্য
echo PHP_EOL;
echo ord('a');  // ASCII code দেখার জন্য
echo PHP_EOL;

#--------------------------------------------------
# যদি উল্টো ভাবে দেখতে চাই - যেমন, 98 নং কোড এ কোন value আছে -

echo chr(98);


#--------------------------------------------------
# যদি ১ - ১০০ পর্যন্ত ASCII value দেখতে চাই -
for($i=0; $i<=100; $i++){
    echo chr($i) . "\n";
}

