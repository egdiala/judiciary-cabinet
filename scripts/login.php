<?php
require_once('init.php');

if (!$conn) {
    die('Could not connect to the database.');
}

$email = $_POST['email'];
$password = $_POST['password'];
$salt = "kdf84kh38" . $password . "khjsfiw97r924j";
$newpsw = password_hash($salt, PASSWORD_DEFAULT);


//query to check if email and password match with what's in the database
$sql = "SELECT password FROM users WHERE email='$email'";
$result = $conn->query($sql);

//if num rows is greater than 0, then user exist
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        unset($hash_pass);
        $hash_pass = $row['password'];
    }
    if (password_verify($salt, $hash_pass)) {

        // echo '<script>alert("Login Successful!"); </script>';

        $reply = $conn->query("SELECT id, name, type FROM users WHERE email='$email'");


        while ($row = $reply->fetch_assoc()) {
            unset($name, $id, $type);
            $id = $row['id'];
            $name = $row['name'];
            $type = $row['type'];
            $fullname = explode(' ', $name);
            $fname = end($fullname);
        }

        SESSION_START();
        $_SESSION['id'] = $id;
        $_SESSION['name'] = $fname;
        $_SESSION['type'] = $type;

        $msg = 'Login Successful.';
        echo json_encode(['code' => 200, 'msg' => $msg]);
    } else {
        $err = 'Invalid user details.';
        echo json_encode(['code' => 404, 'msg' => $err]);
    }
} else {
    $err = 'No such user exists.';
    echo json_encode(['code' => 404, 'msg' => $err]);
}
