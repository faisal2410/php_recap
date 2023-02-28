<?php
// load tasks from file
$tasks = file_exists( 'tasks.txt' ) ? unserialize( file_get_contents( 'tasks.txt' ) ) : array();

// check if form submitted for adding task
if ( isset( $_POST['add_task'] ) ) {
    // get task name from form input
    $task_name = $_POST['task_name'];
    // add task to array
    $tasks[] = array(
        'name'      => $task_name,
        'completed' => false,
    );
}

// check if form submitted for deleting task
if ( isset( $_POST['delete_task'] ) ) {
    // get index of task to delete from form input
    $task_index = $_POST['task_index'];
    // delete task from array
    unset( $tasks[$task_index] );
    // reindex array
    $tasks = array_values( $tasks );
}

// check if form submitted for marking task as completed
if ( isset( $_POST['complete_task'] ) ) {
    // get index of task to mark as completed from form input
    $task_index = $_POST['task_index'];
    // mark task as completed
    $tasks[$task_index]['completed'] = true;
}

// save tasks to file
file_put_contents( 'tasks.txt', serialize( $tasks ) );

// redirect back to homepage
header( 'Location: index.php' );
exit;
