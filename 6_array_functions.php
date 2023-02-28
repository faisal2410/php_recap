<?php
// PHP has a wide range of array functions that can be used to manipulate and work with arrays.

// count() function: The count() function returns the number of elements in an array.

$numbers = array(1, 2, 3, 4, 5);
$count = count($numbers);
echo $count; // Output: 5
// array_push() function: The array_push() function is used to add one or more elements to the end of an array. 
$fruits = array("apple", "banana");
array_push($fruits, "orange", "grape");
print_r($fruits); // Output: Array ( [0] => apple [1] => banana [2] => orange [3] => grape )
// array_pop() function: The array_pop() function is used to remove and return the last element of an array. 
$fruits = array("apple", "banana", "orange", "grape");
$last_fruit = array_pop($fruits);
echo $last_fruit; // Output: grape
print_r($fruits); // Output: Array ( [0] => apple [1] => banana [2] => orange )
// array_shift() function: The array_shift() function is used to remove and return the first element of an array. 

$fruits = array("apple", "banana", "orange", "grape");
$first_fruit = array_shift($fruits);
echo $first_fruit; // Output: apple
print_r($fruits); // Output: Array ( [0] => banana [1] => orange [2] => grape )
// array_unshift() function: The array_unshift() function is used to add one or more elements to the beginning of an array.

$fruits = array("apple", "banana");
array_unshift($fruits, "orange", "grape");
print_r($fruits); // Output: Array ( [0] => orange [1] => grape [2] => apple [3] => banana )
// array_slice() function: The array_slice() function is used to extract a slice of an array.

$numbers = array(1, 2, 3, 4, 5);
$slice = array_slice($numbers, 2, 2);
print_r($slice); // Output: Array ( [0] => 3 [1] => 4 )
// In the above example, the array_slice() function extracts a slice of the $numbers array starting from the 2nd index and containing 2 elements.

// array_merge() function: The array_merge() function is used to merge two or more arrays into a single array. 

$fruits1 = array("apple", "banana");
$fruits2 = array("orange", "grape");
$all_fruits = array_merge($fruits1, $fruits2);
print_r($all_fruits); // Output: Array ( [0] => apple [1] => banana [2] => orange [3] => grape )

// array_reverse() function: The array_reverse() function is used to reverse the order of the elements in an array. 
$numbers = array(1, 2, 3, 4, 5);
$reversed_numbers = array_reverse($numbers);
print_r($reversed_numbers); // Output: Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )

// in_array() function: The in_array() function is used to check if a value exists in an array. 
$fruits = array("apple", "banana", "orange", "grape");
if (in_array("banana", $fruits)) {
    echo "I have a banana!";
} else {
    echo "I don't have a banana.";
}
// Output: I have a banana!
// array_search() function: The array_search() function is used to search for a value in an array and return its key if found.

$fruits = array("apple", "banana", "orange", "grape");
$key = array_search("orange", $fruits);
echo $key; // Output: 2
// array_key_exists() function: The array_key_exists() function is used to check if a key exists in an array. 

$fruits = array("apple" => 2, "banana" => 3, "orange" => 4);
if (array_key_exists("banana", $fruits)) {
    echo "I have a banana!";
} else {
    echo "I don't have a banana.";
}
// Output: I have a banana!
// array_unique() function: The array_unique() function is used to remove duplicate values from an array. 
$numbers = array(1, 2, 2, 3, 3, 3, 4, 5);
$unique_numbers = array_unique($numbers);
print_r($unique_numbers); // Output: Array ( [0] => 1 [1] => 2 [3] => 3 [6] => 4 [7] => 

