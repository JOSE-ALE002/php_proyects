<?php

$link = 'mysql:host=localhost;dbname=api';
$user = 'root';
$password = '';

try{
    $pdo = new PDO($link, $user, $password);
    // echo 'conectado';
}catch(PDOException $e){
    print '¡Error!' . $e->getMessage() . '<br/>';
    die();
}
    