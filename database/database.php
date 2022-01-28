<?php

$dns = 'mysql:host=localhost;dbname=blog';
$usr = 'root';
$pwd = 'Francis9189.';

try {
    $pdo = new PDO($dns, $usr, $pwd, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch(PDOException $e) {
    throw new Exception($e->getMessage());
}

return $pdo;
