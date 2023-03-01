<?php require_once 'User.php';?>

<?php

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $user = new User();
    $user->setName( $_POST['name'] )
        ->setEmail( $_POST['email'] )
        ->setPassword( $_POST['password'] )
        ->register();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<h1>My Website</h1>
	<form method="post" action="">
		<label for="name">Name</label>
		<input type="text" name="name" id="name" required>

		<label for="email">Email</label>
		<input type="email" name="email" id="email" required>

		<label for="password">Password</label>
		<input type="password" name="password" id="password" required>

		<input type="submit" value="Register">
	</form>
</body>
</html>
