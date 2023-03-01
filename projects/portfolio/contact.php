<?php
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    $name = test_input( $_POST["name"] );
    $email = test_input( $_POST["email"] );
    $message = test_input( $_POST["message"] );

//     echo $name;
// echo $email;
// echo $message;

    // Send the message using PHP's built-in mail function
    mail( "faisal2410@yahoo.com", "New message from your website", $message, "From: $email" );

    // // Redirect back to the contact page with a success message
    header( "Location: index.php?message=success" );
    exit();
}

function test_input( $data ) {
    $data = trim( $data );
    $data = stripslashes( $data );
    $data = htmlspecialchars( $data );
    return $data;
}
