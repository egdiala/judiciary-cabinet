<?php
require_once('init.php');

if (!$conn) {
    die('Could not connect to the database.');
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$name = $fname . ' ' . $lname;
$email = $_POST['email'];
$password = $_POST['password'];
$type = $_POST['type'];
$salt = "kdf84kh38" . $password . "khjsfiw97r924j";
$newpsw = password_hash($salt, PASSWORD_DEFAULT);




//query to check if email and password match with what's in the database
$sql = "INSERT INTO users (name, email, password, type) VALUES ('$name', '$email', '$new', '$type')";
$result = $conn->query($sql);

//if num rows is greater than 0, then user exist
if ($result) {
    $msg = 'Account created successfully.';
    echo json_encode(['code' => 200, 'msg' => $msg]);
} else {
    $msg = 'There was an error creating account.';
    echo json_encode(['code' => 201, 'msg' => $msg]);
}
