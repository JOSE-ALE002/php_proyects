<?php 
session_start();
$login = 'Alejandro';

// ESTO ES UN ARRAY PORQUE PODEMOS TENER DIFERENTES SESIONES EN NUESRA PAGINA
$_SESSION['admin']  = $login;

if(isset($_SESSION['admin'])){
    header('location: index.php');
}

echo '<br>';
var_dump($_SESSION);