<?php

//array_column — Return the values from a single column in the input array
//Description ¶
//array array_column ( array $input , mixed $column_key [, mixed $index_key = null ] )
//
//array_column() returns the values from a single column of the input,
// identified by the column_key. Optionally, an index_key may be provided to
// index the values in the returned array by the values from the index_key
// column of the input array.

// Array representing a possible record set returned from a database
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

$first_names = array_column($records, 'first_name');
print_r($first_names);

/*Output:
Array
(
    [0] => John
    [1] => Sally
    [2] => Jane
    [3] => Peter
)
*/

//Example #2 Get the column of last names from a recordset,
// indexed by the "id" column

// Using the $records array from Example #1
$last_names = array_column($records, 'last_name', 'id');
print_r($last_names);

/*Output:
Array
(
    [2135] => Doe
    [3245] => Smith
    [5342] => Jones
    [5623] => Doe
)
*/