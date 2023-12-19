<?php
$db["host"] = "91.222.237.213";
$db["port"] = "2525";
$db["user"] = "root";
$db["pass"] = "sCrxkk9PRN@.J,";
$db["dbname"] = "books";
$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    $db["dbname"]
));