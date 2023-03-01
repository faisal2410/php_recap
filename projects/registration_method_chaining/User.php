<?php

class User {
    private $name;
    private $email;
    private $password;

    public function setName( $name ) {
        $this->name = $name;
        return $this;
    }

    public function setEmail( $email ) {
        $this->email = $email;
        return $this;
    }

    public function setPassword( $password ) {
        $this->password = $password;
        return $this;
    }

    public function register() {
        echo "<h2>Registration Successful!</h2>";
        echo "<p>Name: $this->name</p>";
        echo "<p>Email: $this->email</p>";
    }

}

?>


<?php
/*
The code defines a class called User that represents a user account. The class has three private properties - $name, $email, and $password.

The class also has three public methods - setName(), setEmail(), and setPassword(). Each of these methods takes a parameter and sets the corresponding property of the object. These methods use the $this keyword to refer to the current object and return $this at the end of each method call. Returning $this allows the methods to be chained together in a single statement.

Finally, the class has a register() method that displays a message and the user's name and email. This method is called at the end of the method chaining sequence.

Using method chaining, we can set the name, email, and password properties of a User object in a single statement like this:

$user = new User();
$user->setName('John Doe')->setEmail('john@example.com')->setPassword('password')->register();

This code creates a new User object, sets its name, email, and password properties using method chaining, and then calls the register() method to display the user's details on the screen.

Method chaining can be a useful technique for simplifying code and making it more readable. It allows multiple methods to be called in a single statement, which can make the code easier to understand and maintain.The code defines a class called User that represents a user account. The class has three private properties - $name, $email, and $password.

The class also has three public methods - setName(), setEmail(), and setPassword(). Each of these methods takes a parameter and sets the corresponding property of the object. These methods use the $this keyword to refer to the current object and return $this at the end of each method call. Returning $this allows the methods to be chained together in a single statement.

Finally, the class has a register() method that displays a message and the user's name and email. This method is called at the end of the method chaining sequence.

Using method chaining, we can set the name, email, and password properties of a User object in a single statement like this:

$user = new User();
$user->setName('John Doe')->setEmail('john@example.com')->setPassword('password')->register();
This code creates a new User object, sets its name, email, and password properties using method chaining, and then calls the register() method to display the user's details on the screen.

Method chaining can be a useful technique for simplifying code and making it more readable. It allows multiple methods to be called in a single statement, which can make the code easier to understand and maintain.

*/ 