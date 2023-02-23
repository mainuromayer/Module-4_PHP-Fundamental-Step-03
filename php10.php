<?php
// Indexed Array থেকে কিভাবে কিছু ডাটা বের করে আনা যায় / extract করা যায় -
// array_slice -

$fruits = array( 'apple', 'banana', 'orange', 'plum', 'dates', 'mango' );

// .....................................
# 2 index এর পরের গুলো দেখতে চাইলে -
// $someFruits = array_slice($fruits, 2);
// print_r($someFruits);

// .....................................
# 2 index এর পরে ২ টা দেখতে চাইলে -
// $someFruits = array_slice($fruits, 2, 2);
// print_r($someFruits);

// .....................................
// $someFruits = array_slice($fruits, 2, 6);
// print_r($someFruits);

// .....................................
# 2 index থেকে লাস্ট index বাদ দিয়ে দেখতে চাইলে -
// $someFruits = array_slice($fruits, 2, -1);
// print_r($someFruits);

// .....................................
# 2 index থেকে লাস্ট 2 index বাদ দিয়ে দেখতে চাইলে -
// $someFruits = array_slice($fruits, 2, -2);
// print_r($someFruits);

// .....................................
# শেষের ৪ টা index থেকে ২ টা index দেখতে চাইলে -
// $someFruits = array_slice( $fruits, -4, 2 );
// print_r( $someFruits );

// .....................................
# শেষের ৫ টা থেকে সবগুলো index দেখতে চাইলে -
// $someFruits = array_slice( $fruits, -5 );
// print_r( $someFruits );

// .....................................
# শেষের ৫ টা থেকে শেষের 1 index বাদ দিয়ে দেখতে চাইলে -
// $someFruits = array_slice( $fruits, -5, -1 );
// print_r( $someFruits );





// .....................................
# যদি আমরা actual index position দেখতে চাই -

// $someFruits = array_slice( $fruits, -5, -1,true );
// print_r( $someFruits );

// $someFruits = array_slice( $fruits, 3, 3,true );
// print_r( $someFruits );







// -----------------------------------------------------------------------

// Associative Array থেকে কিভাবে কিছু ডাটা বের করে আনা যায় / extract করা যায় -
// array_slice -

$random = array( 'a'=>12, 'b'=>45, 'c'=>34, 'd'=>22, 'e'=>77, 'f'=>31, 12=>78, 'g'=>87 );

// $randomData = array_slice($random, 3);
// print_r($randomData);


// .....................................
# Associative Array থেকে যদি আমরা 3 index এর পরের গুলো actual index position-এ দেখতে চাই -
// $randomData = array_slice($random, 3, null, true);
// print_r($randomData);


// .....................................
# Associative Array থেকে যদি আমরা শুধু সেই index দেখতে চাই -
// $randomData = array_slice($random, 3, true);
// print_r($randomData);


// .....................................
# Associative Array থেকে যদি আমরা 4 index এর পরে ৩ টা দেখতে চাইলে -
// $randomData = array_slice($random, 4, 3);
// print_r($randomData);


// .....................................
# Associative Array থেকে যদি আমরা 4 index এর পরে actual index position-এ ৩ টা দেখতে চাইলে -
// $randomData = array_slice($random, 4, 3, true);
// print_r($randomData);


// .....................................
# Associative Array থেকে যদি আমরা শেষের ৪ টা index থেকে ৩ টা index দেখতে চাইলে -
// $randomData = array_slice($random, -4, 3);
// print_r($randomData);


// .....................................
# Associative Array থেকে যদি আমরা শেষের ৪ টা index থেকে ১ টা index বাদে দেখতে চাইলে -
// $randomData = array_slice($random, -4, -1);
// print_r($randomData);


// .....................................
# Associative Array থেকে যদি আমরা প্রথম ১ টা index থেকে ১ টা index বাদে দেখতে চাইলে -
$randomData = array_slice($random, 1, -1);
print_r($randomData);
