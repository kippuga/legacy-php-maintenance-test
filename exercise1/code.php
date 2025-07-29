<?php
// login.php
include "db.php";

$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $pdo->query($query);
$user = $result->fetch();

if ($user) {
    echo "Welcome " . $user["username"];
} else {
    echo "Invalid login!";
}
