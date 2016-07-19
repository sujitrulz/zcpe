<?php
//array_chunk — Split an array into chunks
//Description ¶
//array array_chunk ( array $array , int $size [, bool $preserve_keys = false ] )
//
//Chunks an array into arrays with size elements.
// The last chunk may contain less than size elements.

$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 2));
print_r(array_chunk($input_array, 2, true));

/*The above example will output:
Array
(
    [0] => Array
        (
            [0] => a
            [1] => b
        )

    [1] => Array
        (
            [0] => c
            [1] => d
        )

    [2] => Array
        (
            [0] => e
        )

)
Array
(
    [0] => Array
        (
            [0] => a
            [1] => b
        )

    [1] => Array
        (
            [2] => c
            [3] => d
        )

    [2] => Array
        (
            [4] => e
        )

)
*/
?>