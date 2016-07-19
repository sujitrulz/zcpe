<?php
//array_change_key_case — Changes the case of all keys in an array
//array array_change_key_case ( array $array [, int $case = CASE_LOWER ] )
//Returns an array with all keys from array lowercased or uppercased.
// Numbered indices are left as is.

$input_array = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));
print_r(array_change_key_case($input_array, CASE_LOWER));

/*The above example will output:
Array
(
    [FIRST] => 1
    [SECOND] => 4
)
Array
(
    [first] => 1
    [second] => 4
)

*/


?>
