<?php
// multidimantional array 0r, Nested Array
$foods = array(
    'vagetables' => explode( ', ', 'brainjal, brocolli, carrot, capsicam' ),
    'fruits'     => explode( ', ', 'orange, banana, apple' ),
    'drinks'     => explode( ', ', 'water, milk' ),
);
// print_r( $foods );


// multidimantional array add value
array_push($foods['drinks'], 'orange juice');
print_r( $foods );

// multidimantional array access value
echo $foods['vagetables'][3];

echo "\n";

// -------------------------------------------------------
// multidimantional arrey print and access


$sample = [
    'test' => [
        'test-again' => [
            'a',
            'b',
            'c',
            'd'
        ]
    ],
];
echo $sample['test']['test-again'][2];

// ....................................
$sample2 = [
    [1, 2, 3, 4],
    [11, 22, 33, 44],
    [111, 222, 333, 444],
    [1111, 2222, 3333, [5, 6, 7]]
];

print_r($sample2);

echo $sample2[3][3][1]; // access 6