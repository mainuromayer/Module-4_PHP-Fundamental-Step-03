<?php
# আমাকে যদি বলা হয় ১২ - ২০ পর্যন্ত print করতে -
# 1st way -
// $numbers = array(12, 13, 14, 15, 16, 17, 18, 19, 20);
// print_r($numbers);

# 2nd way -
// $numbers = array();
// for($i=12; $i<=20; $i++){
//     array_push($numbers, $i);
// }
// print_r($numbers);

# 3rd way -
$numbers = range(12, 20);
print_r($numbers);



#-------------------------------------------------------------
# আমাকে যদি বলা হয় ১২ - ২০ পর্যন্ত জোড় সংখ্যাগুলো print করতে -
# 1st way -
// $numbers = array(12, 14, 16, 18, 20);
// print_r($numbers);

# 2nd way -
// $numbers = array();
// for($i=12; $i<=20; $i+=2){
//     array_push($numbers, $i);
// }
// print_r($numbers);

# 3rd way -
$numbers = range(12, 20, 2);
print_r($numbers);

# 4th way -
foreach(range(12, 20, 2) as $evenNumber){
    echo $evenNumber."\n";
}



#-------------------------------------------------------------
# আমাকে যদি বলা হয় ১২ - ২০ পর্যন্ত বিজোড় সংখ্যাগুলো print করতে -
# 1st way -
// $numbers = array(13, 15, 17, 19);
// print_r($numbers);

# 2nd way -
// $numbers = array();
// for($i=13; $i<=20; $i+=2){
//     array_push($numbers, $i);
// }
// print_r($numbers);

# 3rd way -
$numbers = range(13, 20, 2);
print_r($numbers);

# 4th way -
foreach(range(13, 20, 2) as $oddNumber){
    echo $oddNumber."\n";
}



#-------------------------------------------------------------
# আমাকে যদি বলা হয় ০-৫০ এর মধ্যে যেসব সংখ্যাকে ৭ দ্বারা ভাগ যাবে সেগুলো লিখতে -
foreach(range(0, 50, 7) as $num){
    if($num>0){
        echo $num . "\n";
    }
}


# আমাকে যদি বলা হয় ০-৬০ এর মধ্যে যেসব সংখ্যাকে ১১ দ্বারা ভাগ যাবে সেগুলো লিখতে -
foreach(range(0, 60, 11) as $num){
    if($num>0){
        echo $num . "\n";
    }
}