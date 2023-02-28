<?php
// In PHP, a for loop is used to iterate over a set of values for a fixed number of times. It consists of three statements: initialization, condition, and increment/decrement. Here is an example of a for loop in PHP:

  for ($i = 0; $i < 5; $i++) {
    echo $i;
  }

// In this example, the loop initializes the variable $i to 0, checks the condition $i < 5, and increments $i by 1 after each iteration. The loop will run 5 times, outputting the values of $i from 0 to 4.

// The initialization statement ($i = 0) is executed only once at the beginning of the loop. The condition statement ($i < 5) is checked before each iteration of the loop. If the condition is true, the loop continues executing. If the condition is false, the loop terminates. The increment/decrement statement ($i++) is executed at the end of each iteration of the loop.

// A for loop can also be used to iterate over an array. 


  $fruits = array("Apple", "Banana", "Orange");
  for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i];
  }

// In this example, the loop initializes the variable $i to 0, checks the condition $i < count($fruits), and increments $i by 1 after each iteration. The loop will run for the number of elements in the $fruits array, outputting each element of the array.