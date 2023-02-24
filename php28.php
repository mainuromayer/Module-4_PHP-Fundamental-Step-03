<?php

// str_replace -> case sensetive
// str_ireplace -> case insensetive



# string এর serch এবং replace করব -
# case sensetive way -
$string = "Quick brown Brown fox over the lazy dog";

$replacedString_1 = str_replace("brown", "red", $string);
echo $replacedString_1;
echo PHP_EOL;
echo PHP_EOL;


#......................
# string এর serch এবং replace করব -
# case insensetive way -
$string = "Quick brown Brown fox over the lazy dog";

$replacedString_2 = str_ireplace("brown", "red", $string);
echo $replacedString_2;
echo PHP_EOL;
echo PHP_EOL;






#----------------------------------------
# multiple string change -

# 1st way -
# case sensetive way -
$string = "Quick brown Brown fox Fox over the lazy dog";
$string = str_replace("brown", "red", $string);
$string = str_replace("fox", "cat", $string);
echo $string;
echo PHP_EOL;


# case insensetive way -
$string = "Quick brown Brown fox Fox over the lazy dog";
$string = str_ireplace("brown", "red", $string);
$string = str_ireplace("fox", "cat", $string);
echo $string;
echo PHP_EOL;




#.............................................

# 2nd way -
# case sensetive way -
$string = "Quick brown Brown fox Fox over the lazy dog";
$string = str_replace(array('brown', 'fox'), array('red', 'cat'), $string);
echo $string;
echo PHP_EOL;


# case insensetive way -
$string = "Quick brown Brown fox Fox over the lazy dog";
$string = str_ireplace(array('brown', 'fox'), array('red', 'cat'), $string);
echo $string;
echo PHP_EOL;








#----------------------------------------
# multiple string change  one value -

# case sensetive way -
$string = "Quick brown Brown fox Fox over the lazy dog";
$string = str_replace(array('brown', 'fox', 'dog'), 'word', $string);
echo $string;
echo PHP_EOL;


# case insensetive way -
$string = "Quick brown Brown fox Fox over the lazy dog";
$string = str_ireplace(array('brown', 'fox', 'dog'), 'word', $string);
echo $string;
echo PHP_EOL;







#----------------------------------------

# এখানে কয়টা string replace হয়েছে সেটা বের করার উপায় -
# case sensetive way -
$string = "Quick brown Brown fox over the lazy dog";

$replacedString_1 = str_replace("brown", "red", $string, $count);
echo $replacedString_1;
echo PHP_EOL;
echo "Total Replaced: {$count}";
echo PHP_EOL;



#......................
# case insensetive way -
$string = "Quick brown Brown fox over the lazy dog";

$replacedString_2 = str_ireplace("brown", "red", $string, $count);
echo $replacedString_2;
echo PHP_EOL;
echo "Total Replaced: {$count}";
echo PHP_EOL;
