<?php


// strlen() function: The strlen() function is used to get the length of a string.
$string = "Hello, world!";
$length = strlen($string);
echo $length; // Output: 13
// str_replace() function: The str_replace() function is used to replace a substring in a string with another substring. 

$string = "Hello, world!";
$new_string = str_replace("world", "PHP", $string);
echo $new_string; // Output: Hello, PHP!
// strpos() function: The strpos() function is used to find the position of the first occurrence of a substring in a string. 

$string = "Hello, world!";
$position = strpos($string, "world");
echo $position; // Output: 7
// strtolower() function: The strtolower() function is used to convert a string to lowercase. 

$string = "Hello, world!";
$new_string = strtolower($string);
echo $new_string; // Output: hello, world!
// strtoupper() function: The strtoupper() function is used to convert a string to uppercase. 
$string = "Hello, world!";
$new_string = strtoupper($string);
echo $new_string; // Output: HELLO, WORLD!
// substr() function: The substr() function is used to get a substring from a string. 
$string = "Hello, world!";
$sub_string = substr($string, 7, 5);
echo $sub_string; // Output: world


// trim() function: The trim() function is used to remove whitespace and other predefined characters from the beginning and end of a string. 

$string = "  Hello, world!  ";
$new_string = trim($string);
echo $new_string; // Output: Hello, world!
// strrev() function: The strrev() function is used to reverse a string.
$string = "Hello, world!";
$new_string = strrev($string);
echo $new_string; // Output: !dlrow ,olleH
// str_split() function: The str_split() function is used to split a string into an array of characters. 
$string = "Hello, world!";
$characters = str_split($string);
print_r($characters); // Output: Array ( [0] => H [1] => e [2] => l [3] => l [4] => o [5] => , [6] =>   [7] => w [8] => o [9] => r [10] => l [11] => d [12] => ! )
// explode() function: The explode() function is used to split a string into an array based on a delimiter. 
$string = "apple,banana,orange";
$fruits = explode(",", $string);
print_r($fruits); // Output: Array ( [0] => apple [1] => banana [2] => orange )
// implode() function: The implode() function is used to join the elements of an array into a string using a delimiter. 

$fruits = array("apple", "banana", "orange");
$string = implode(",", $fruits);
echo $string; // Output: apple,banana,orange
// htmlspecialchars() function: The htmlspecialchars() function is used to convert special characters to HTML entities.
$string = "I love PHP & MySQL!";
$new_string = htmlspecialchars($string);
echo $new_string; // Output: I love PHP &amp; MySQL!