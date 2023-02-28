<?php
// An associative array is a type of data structure in which data is organized in a key-value pair format. In an associative array, each key is unique and corresponds to a specific value. The key is used to retrieve or access the corresponding value.

// In PHP, an associative array can be created using the array() function or using the shorthand square bracket notation []. To create an associative array, you simply need to specify the key-value pairs inside the array. 


// Creating an associative array using the array() function
$fruits = array("apple" => 2, "banana" => 3, "orange" => 4);

// Creating an associative array using the shorthand square bracket notation
$fruits = ["apple" => 2, "banana" => 3, "orange" => 4];
// In the above example, the keys are "apple", "banana", and "orange", and the corresponding values are 2, 3, and 4 respectively.

// To access the value of a specific key in an associative array, you can simply use the key inside square brackets.

// Accessing the value of a specific key in an associative array
echo $fruits["banana"]; // Output: 3
// You can also add or update key-value pairs in an associative array using the same syntax as creating an associative array. 


// Adding a new key-value pair to an associative array
$fruits["grape"] = 5;

// Updating the value of an existing key in an associative array
$fruits["banana"] = 4;
// You can also loop through an associative array using a foreach loop. 

// Looping through an associative array using a foreach loop
foreach ($fruits as $key => $value) {
    echo "I have " . $value . " " . $key . "(s)." . "<br>";
}
// In the above example, the foreach loop iterates through each key-value pair in the $fruits associative array and assigns the key to the $key variable and the value to the $value variable. The loop then outputs the value of each key-value pair using the echo statement.

