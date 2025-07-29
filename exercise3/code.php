<?php
include "db.php";

$file = fopen("/tmp/active_users.csv", "w");
$result = $pdo->query("SELECT username, email FROM users WHERE active = 1");
while ($row = $result->fetch()) {
    fputcsv($file, [$row["username"], $row["email"]]);
}
fclose($file);
