<?php
session_start();

if(isset($_SESSION['admin'])){
    echo '<h1>Bienvenido! ' . $_SESSION['admin'] . '</h1>';
    echo '<br/><a href="cerrar.php">Cerrar Sesion</a>';
}else{
    header('location:regitro.php');
}

?>