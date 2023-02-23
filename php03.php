<?php
// Indexed Arrey -
$student = array(
    "Karim",
    "Hasan",
    "Jalal",
);

// আমরা যদি key ছাড়া শুধু value গুলো লেখি, সেটা হবে Indexed Array.

// ----------------------------------------------------------------
// Associative Array -
# Array এর মধ্যে একটা key দিয়ে তার value set করে দিতে পারি, এটাকে বলব Associative array.
# Array এর ভিতর প্রতিটা value কে একটা key দিয়ে mark করা থাকবে।

$student = array(
    "12" => "Karim",
    "13" => "Hasan",
    "20" => "Jalal",
);

echo $student["12"];
echo $student[13];

echo "\n";





// -------------------------------------------------------------

$foods = array(
    "vegetables" => "brinjal, brocolli, carrot, capsicam",
    "fruits"     => "orange, banana, apple",
    "drinks"     => "water, milk",
);

echo count( $foods ); // 3
echo "\n";
echo $foods["vegetables"]; // brinjal, brocolli, carrot, capsicam
echo "\n";

// ..................................................
// Associative Array এর মধ্যে কিভাবে একটা নতুন key make করব এবং সেখানে value insert করব -
$foods["new"] = $foods["new"]."malai, con, ice_cool";


// Associative Array আগের value তে নতুন value যোগ করব -
$foods["drinks"] = $foods["drinks"].", orange juice";
$foods["drinks"] .=", lemon juice";


// ..................................................
// array এর মধ্যে foreach চালিয়ে -
    foreach ( $foods as $key => $value ) {
        // echo $value . "\n";
        /* ---------------------
        output :
        brinjal, brocolli, carrot, capsicam
        orange, banana, apple
        water, milk 
        ------------------------ */

        echo $key . " = " . $value . "\n";
        /* ---------------------
        output :
        vegetables = brinjal, brocolli, carrot, capsicam
        fruits = orange, banana, apple
        drinks = water, milk 
        ------------------------ */
    }
// ...................................................


// ...................................................
// array এর মধ্যে array_keys() চালিয়ে print_r() এর মাধ্যমে শুধু key গুলোকে দেখা -
    $keys = array_keys($foods);
    print_r($keys);
    /* ------------------------
    output :
    Array
    (
        [0] => vegetables
        [1] => fruits
        [2] => drinks
    )
    ------------------------ */

// array এর মধ্যে array_keys() চালিয়ে print_r() এর মাধ্যমে শুধু value গুলোকে দেখা -
    $value = array_values($foods);
    print_r($value);
    /* ------------------------
    output :
    Array
    (
        [0] => brinjal, brocolli, carrot, capsicam
        [1] => orange, banana, apple
        [2] => water, milk
    )
------------------------ */

// ...................................................
// array এর মধ্যে array_keys() চালিয়ে for loop এর মাধ্যমে শুধু value গুলোকে দেখা -
    $keys = array_keys($foods);
    for($i=0; $i<count($foods); $i++){
        $key = $keys[$i];
        echo $foods[$key]."\n";
    }
    /* --------------------------
    output :
    brinjal, brocolli, carrot, capsicam
    orange, banana, apple
    water, milk
    ---------------------------- */

// ...................................................
// array এর মধ্যে array_value() চালিয়ে for loop এর মাধ্যমে শুধু value গুলোকে দেখা -
    $values = array_values($foods);
    for($i=0; $i<count($foods); $i++){
        $value = $values[$i];
        echo $value."\n";
    }
    /* --------------------------
    output :
    brinjal, brocolli, carrot, capsicam
    orange, banana, apple
    water, milk
    ---------------------------- */