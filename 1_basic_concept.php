<?php
/*
What is PHP?

PHP stands for Hypertext Preprocessor, it is a server-side scripting language used for web development.
It is an open-source language that can be embedded in HTML code.
Basic Syntax:

PHP code is enclosed in <?php and ?> tags.
A semicolon (;) is used to separate statements in PHP.
PHP code can be placed anywhere in an HTML file.
Variables:

A variable is a container for storing data.
In PHP, a variable starts with a dollar sign ($).
PHP variables are dynamically typed, meaning that their data type is determined at runtime.
Variables can store various data types such as integers, floats, strings, booleans, arrays, objects, and null values.
Operators:

PHP supports a variety of operators, including arithmetic, comparison, logical, and assignment operators.
Arithmetic operators are used for basic math operations such as addition, subtraction, multiplication, and division.
Comparison operators are used for comparing values.
Logical operators are used for combining multiple conditions.
Assignment operators are used for assigning values to variables.
Control Structures:

Control structures in PHP are used to control the flow of execution based on certain conditions.
Conditional statements such as if/else, switch/case are used for executing different code blocks based on specific conditions.
Loops such as for, while, and do-while are used for iterating over data or executing code repeatedly.
Arrays:

Arrays are used for storing multiple values in a single variable.
PHP supports both indexed and associative arrays.
Indexed arrays are accessed using numeric indexes, whereas associative arrays are accessed using string keys.
Functions:

A function is a block of code that performs a specific task.
Functions can be defined by the user or can be built-in functions.
Functions can accept parameters and return values.
File Handling:

PHP supports various functions for handling files such as reading and writing data to files, opening and closing files, and creating directories.
Forms and User Input:

Forms are used for collecting data from users.
PHP can process form data using the $_GET and $_POST superglobal variables.
Validation and sanitization are important when processing user input to prevent security issues.
*/ 

// Variables:
$name = "Jhon";
$age = 25;
$isStudent = true;
$grades = array( 85, 90, 95 );

//  Operators:

  $num1 = 10;
  $num2 = 5;
  
  // Arithmetic Operators
  $sum = $num1 + $num2;
  $difference = $num1 - $num2;
  $product = $num1 * $num2;
  $quotient = $num1 / $num2;
  
  // Comparison Operators
  $result1 = ($num1 == $num2); // false
  $result2 = ($num1 != $num2); // true
  $result3 = ($num1 > $num2); // true
  $result4 = ($num1 <= $num2); // false
  
  // Logical Operators
  $result5 = ($num1 > 0 && $num2 > 0); // true
  $result6 = ($num1 > 0 || $num2 < 0); // true
  
  // Assignment Operators
  $num1 += 2; // $num1 = $num1 + 2;
  $num2 *= 3; // $num2 = $num2 * 3;

// Control Structures:

  $age = 18;
  
  // if/else statement
  if ($age < 18) {
    echo "You are not eligible to vote.";
  } else {
    echo "You are eligible to vote.";
  }
  
  // for loop
  for ($i = 0; $i < 5; $i++) {
    echo $i;
  }
  
  // while loop
  $j = 0;
  while ($j < 5) {
    echo $j;
    $j++;
  }
  
  // switch statement
  $day = "Monday";
  switch ($day) {
    case "Monday":
      echo "Today is Monday.";
      break;
    case "Tuesday":
      echo "Today is Tuesday.";
      break;
    default:
      echo "Today is not Monday or Tuesday.";
  }

// Arrays:

  // Indexed Array
  $fruits = array("Apple", "Banana", "Orange");
  echo $fruits[0]; // Apple
  
  // Associative Array
  $person = array("name" => "John", "age" => 25);
  echo $person["name"]; // John
  
  // Array Functions
  $numbers = array(3, 6, 1, 8, 2);
  sort($numbers);
  print_r($numbers); // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 6 [4] => 8 )

// Functions:

  // User-defined function
  function add($num1, $num2) {
    return $num1 + $num2;
  }
  
  // Built-in function
  $string = "hello world";
  $uppercase = strtoupper($string);
  echo $uppercase; // HELLO WORLD
