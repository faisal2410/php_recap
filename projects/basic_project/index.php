<!DOCTYPE html>
<html>
<head>
	<title>Superglobal Variables, For Loop, Array Functions, String Functions Example</title>
</head>
<body>
	<?php
	// example of using $_GET superglobal variable
	if(isset($_GET['name'])) {
		echo "<h1>Hello, " . $_GET['name'] . "!</h1>";
	}

	// example of using a for loop to display numbers
	echo "<h2>Numbers:</h2>";
	for($i = 1; $i <= 10; $i++) {
		echo $i . " ";
	}

	// example of using array functions
	$fruits = array('apple', 'banana', 'orange', 'kiwi');
	echo "<h2>Fruits:</h2>";
	echo "<ul>";
	foreach($fruits as $fruit) {
		echo "<li>" . ucfirst($fruit) . "</li>"; // capitalize first letter of each fruit
	}
	echo "</ul>";
	echo "<p>There are " . count($fruits) . " fruits in the list.</p>";

	// example of using string functions
	$phrase = "The quick brown fox jumps over the lazy dog.";
	echo "<h2>Phrase:</h2>";
	echo "<p>" . $phrase . "</p>";
	echo "<p>The phrase contains " . str_word_count($phrase) . " words.</p>";
	echo "<p>The phrase in reverse is: " . strrev($phrase) . "</p>";
	echo "<p>The first occurrence of 'the' is at position " . strpos($phrase, 'the') . ".</p>";
	?>
</body>
</html>
