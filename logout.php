<?php

// Always run this function to access the $_SESSION superglobal
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();

// Redirect web browser to the home page
header("Location:http://localhost/quiz");

// Use die() or exit() for security purpose
exit();

?>
