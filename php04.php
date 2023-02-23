<?php
# explode -
    # string -> arrey

$vagetables = explode(', ', 'brainjal, brocolli, carrot, capsicam');
// var_dump($vagetables);
echo $vagetables[0];
echo "\n";

# Note : ', ' -> delimeter


// ...................................
$vagetables = preg_split('/(, |,)/', 'brainjal, brocolli, carrot, capsicam,patato,sweet-potato');

print_r($vagetables);
echo "\n";

/**
 * -> preg_slipt  -> ', ' and ',' -> work
 * preg_split('', ...array..)
 * preg_split('//', ...array..)
 * preg_split('/()/', ...array..)
 * preg_split('/(, |,)/', ...array..)
 */



// ------------------------------------------------------
# join -
        # arrey -> string

$vagetablesString = join(', ', $vagetables);
echo $vagetablesString;
