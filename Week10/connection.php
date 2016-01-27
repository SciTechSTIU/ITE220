<?php


$hostname = "localhost:3306";
$username = "root";
$password = "";
$dbname = "ite220_userinfo database";

$conn = new mysqli($hostname, $username, $password, $dbname);
if ($conn -> connect_error) {
    die ($conn -> connect_error);
}


function checklogin ($uusername, $upassword) {
    $global $conn;
    $query = "SELECT * FROM users";
    $result = $conn -> query ($query);
    if (!$result) {
        die ($conn -> error);
    }
}

?>