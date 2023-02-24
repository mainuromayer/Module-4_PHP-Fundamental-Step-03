<?php
# mt_rand -
# ৪০ - ৭২ এর মধ্যে একটা rendom number pick করতে বলা হলে -
$numbers = range(40, 72);
// echo count($numbers);
$random = mt_rand(0, 32);
echo $numbers[$random] . "\n";

$random = mt_rand(0, 32);
echo $numbers[$random];

echo "\n";
echo "\n";



// ---------------------------------------------
# mt_rand -
# ৫০ - ১০০ এর মধ্যে একটা rendom number pick করে head | tail করতে পারি -
# জোড় হলে head | বিজোড় হলে tail

$num = range(50, 100);
// echo count($num);
$rand = mt_rand(0,50);


$luck = $num[$rand];
echo $luck . " = ";


if($luck%2 == 0){
    echo "Head";
}else{
    echo "Tail";
}
echo "\n";


// ---------------------------------------------
# shuffle -
# shuffle করলে array এর index position গুলো ঠিক থাকবে, কিন্তু position এর value গুলো change হতে থাকবে।

$n = range(1, 10);
shuffle($n);

print_r($n);

$shuffleNumber = $n[3];
echo $shuffleNumber;


