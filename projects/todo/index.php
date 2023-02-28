<!DOCTYPE html>
<html>
<head>
	<title>Todo List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Todo List</h1>

	<form method="post" action="task_actions.php">
		<label for="task_name">Task Name:</label>
		<input type="text" id="task_name" name="task_name">
		<button type="submit" name="add_task">Add Task</button>
	</form>

	<ul>
		<?php
			// load tasks from file
			$tasks = file_exists('tasks.txt') ? unserialize(file_get_contents('tasks.txt')) : array();

			// loop through tasks and display them
			foreach($tasks as $index => $task) {
				?>
				<li <?php if($task['completed']) echo 'class="completed"'; ?>>
					<?php echo $task['name']; ?>
					<form method="post" action="task_actions.php">
						<input type="hidden" name="task_index" value="<?php echo $index; ?>">
						<?php if(!$task['completed']) { ?>
							<button type="submit" name="complete_task">Complete</button>
						<?php } ?>
						<button type="submit" name="delete_task">Delete</button>
					</form>
				</li>
				<?php
			}

			// save tasks to file
			file_put_contents('tasks.txt', serialize($tasks));
		?>
	</ul>
</body>
</html>
