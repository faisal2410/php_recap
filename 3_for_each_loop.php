<?php
// In PHP, a foreach loop is used to iterate over each element in an array or an object. It is a simpler alternative to a for loop when you only need to iterate over the values of an array or object and don't need to keep track of an index. Here is an example of a foreach loop in PHP:


  $fruits = array("Apple", "Banana", "Orange");
  foreach ($fruits as $fruit) {
    echo $fruit;
  }

// In this example, the loop iterates over each element in the $fruits array, assigning each element to the variable $fruit. The loop body, which contains the echo statement, is executed once for each element in the array, outputting each element of the array.

// A foreach loop can also be used to iterate over the key-value pairs in an associative array. 

  $prices = array("Apple" => 0.50, "Banana" => 0.25, "Orange" => 0.75);
  foreach ($prices as $fruit => $price) {
    echo "$fruit: $price";
  }

// In this example, the loop iterates over each key-value pair in the $prices array, assigning the key to the variable $fruit and the value to the variable $price. The loop body, which contains the echo statement, is executed once for each key-value pair in the array, outputting each key-value pair.


