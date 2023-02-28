<?php
// In PHP, a nested foreach loop is used to iterate over each element in a multi-dimensional array. It is a way of traversing through the inner arrays of a multidimensional array. Here is an example of a nested foreach loop in PHP:


  $students = array(
    array("name" => "John", "age" => 20),
    array("name" => "Jane", "age" => 21),
    array("name" => "Bob", "age" => 22)
  );

  foreach ($students as $student) {
    echo $student["name"] . "'s age is " . $student["age"] . "<br>";

    foreach ($student as $key => $value) {
      echo $key . ": " . $value . "<br>";
    }
  }

// In this example, the outer foreach loop iterates over each element in the $students array, assigning each element to the variable $student. The inner foreach loop then iterates over each element in the $student array, assigning each key-value pair to the variables $key and $value. The loop body, which contains the echo statements, is executed once for each key-value pair in each element of the array.

// Output:
// John's age is 20
// name: John
// age: 20
// Jane's age is 21
// name: Jane
// age: 21
// Bob's age is 22
// name: Bob
// age: 22

// In this example, the outer loop is used to iterate over each student in the array, and the inner loop is used to iterate over each key-value pair in each student's array. This is useful when you have nested data structures and need to traverse through each level of the structure.