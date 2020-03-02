<?php
require_once('init.php');

if (!$conn) {
    die('Could not connect to the database.');
}

$sql = "SELECT * FROM court";
$result = $conn->query($sql);

if ($result) {
    $data   =   mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($data);
}
// Return current date and time from the server
// echo date("F d, Y h:i:s A");
