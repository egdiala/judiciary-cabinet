<?php
//*CONNECT TO MYSQL AND DATABASE
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "judiciary_cabinet";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
