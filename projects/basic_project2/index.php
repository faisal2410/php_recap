<!DOCTYPE html>
<html>
<head>
	<title>To Do List</title>
	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
		}
		h1 {
			text-align: center;
		}
		form {
			margin: 20px;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		label {
			display: block;
			margin-bottom: 5px;
		}
		input[type="text"] {
			padding: 5px;
			width: 300px;
			border-radius: 5px;
			border: 1px solid #ccc;
		}
		input[type="submit"] {
			padding: 5px 10px;
			background-color: #337ab7;
			color: #fff;
			border-radius: 5px;
			border: none;
			cursor: pointer;
		}
		ul {
			list-style: none;
			padding: 0;
			margin: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			max-width: 500px;
		}
		li {
			padding: 10px;
			border-bottom: 1px solid #ccc;
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
		li:last-child {
			border-bottom: none;
		}
		.delete {
			color: #cc0000;
			cursor: pointer;
			font-weight: bold;
			margin-right: 10px;
		}
	</style>
</head>
<body>
	<h1>To Do List</h1>
	<form method="post">
		<label for="item">Add Item:</label>
		<input type="text" id="item" name="item">
		<input type="submit" value="Add">
	</form>
	<?php
		// Initialize the to do list array
		$items = array();

		// Check if a new item has been submitted
		if(isset($_POST['item'])) {
			// Trim the input to remove any whitespace
			$item = trim($_POST['item']);

			// Check if the input is not empty
			if(!empty($item)) {
				// Add the new item to the array
				$items[] = $item;
			}
		}

		// Check if a delete request has been submitted
		if(isset($_GET['delete'])) {
			// Get the index of the item to delete
			$index = $_GET['delete'];

			// Remove the item from the array
			unset($items[$index]);

			// Reindex the array
			$items = array_values($items);
		}

		// Display the to do list
		if(!empty($items)) {
			echo '<ul>';
			foreach($items as $index => $item) {
				echo '<li><span>' . $item . '</span><span class="delete" onclick="location.href=\'?delete=' . $index . '\'">Delete</span></li>';
			}
			echo '</ul>';
		} else {
			echo '<p>No items in list.</p>';
		}
	?>
</body>
</html>