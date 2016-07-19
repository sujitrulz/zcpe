<?php
//array — Create an array
//    Description ¶
//array array ([ mixed $... ] )
//
//Creates an array. Read the section on the array type for more information on what an array is.

$fruits = array(
    "fruits" => array("a" => "orange", "b" => "banana", "c" => "apple"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes" => array("first", 5 => "second", "third")
);

print_r($fruits);

/*Output:
Array
(
    [fruits] => Array
    (
        [a] => orange
        [b] => banana
        [c] => apple
    )

    [numbers] => Array
        (
            [0] => 1
            [1] => 2
            [2] => 3
            [3] => 4
            [4] => 5
            [5] => 6
        )

    [holes] => Array
    (
        [0] => first
        [5] => second
        [6] => third
    )

)*/

$array = array(1, 1, 1, 1, 1, 8 => 1, 4 => 1, 19, 3 => 13);
print_r($array);

//The above example will output:
/*Array
(
    [0] => 1
    [1] => 1
    [2] => 1
    [3] => 13
    [4] => 1
    [8] => 1
    [9] => 19
)*/

