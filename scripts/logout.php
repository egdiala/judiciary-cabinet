<?php
SESSION_START();

$_SESSION = array();
session_destroy();

//redirect to the login page using php built-in header method
header("Location: /");
