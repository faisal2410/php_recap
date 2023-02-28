<?php
// Superglobal variables in PHP are predefined variables that are available in all scopes throughout a PHP script. They can be accessed from any function, class, or file without the need for any special declaration. Here are some of the commonly used superglobal variables in PHP:

// $_SERVER: The $_SERVER variable is an array that contains information about the server and the environment. 

echo $_SERVER['SERVER_NAME']; // Output: localhost
// $_GET: The $_GET variable is an array that contains variables passed to the current script via the URL parameters.

echo $_GET['name']; // If the URL is "example.com?name=John", the output will be "John"
// $_POST: The $_POST variable is an array that contains variables submitted to the current script via an HTTP POST request. 

echo $_POST['username']; // If a form is submitted with a username field, the output will be the value of the username field
// $_SESSION: The $_SESSION variable is an array that contains variables that persist across multiple page requests. 

session_start();
$_SESSION['username'] = 'John';
echo $_SESSION['username']; // Output: John
// $_COOKIE: The $_COOKIE variable is an array that contains variables passed to the current script via HTTP cookies. 

echo $_COOKIE['username']; // If a cookie with the name "username" is set, the output will be the value of the cookie
// $_FILES: The $_FILES variable is an array that contains information about uploaded files.
echo $_FILES['file']['name']; // If a file is uploaded with a form field named "file", the output will be the name of the uploaded file
