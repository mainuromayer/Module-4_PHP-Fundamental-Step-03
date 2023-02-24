<?php

# How to Write Strings Differently in PHP -
$name = "Rakib";

$srting1 = 'my name is $name \n \t New Data';
echo $srting1;
echo "\n";
echo "\n";



#------------------------------------------
# heredoc -
/** Note :
 * এখানে মাল্টিপল লাইন লিখা যাবে 
 * variable নাম বসালে কাজ করবে
 * \t  \n  এগুলো কাজ করবে
 * লাস্ট EOD; শেষ করার আগে খালি রাখা যাবে না, এমনকি কিছু লেখাও যাবে না।
 *  "" = heredoc
 */
$heredoc = <<<EOD
data \t 1
data 2
{$name}
more text \n
EOD;

echo $heredoc;

echo "\n";
echo "\n";



#------------------------------------------
# nowdoc -
/** Note :
 * এখানে মাল্টিপল লাইন লিখা যাবে 
 * variable নাম বসালে কাজ করবে না
 * \t  \n  এগুলো কাজ করবে না
 * লাস্ট EOD; শেষ করার আগে খালি রাখা যাবে না, এমনকি কিছু লেখাও যাবে না।
 *  '' = nowdoc
 */
$nowdoc = <<<'EOD'
value \t 1
value 2
{$name}
more text \n
EOD;

echo $nowdoc;