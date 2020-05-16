<?php

$link = 'mysql:host=localhost; dbname=colors';
$user = 'root';
$password = "";

try {
    $pdo = new PDO($link, $user, $password);
    echo 'Conectado';

} catch (PDOException $e) {
    print "¡Error: " . $e->getMessage() . "<br/>";
    die();
}