<?php
session_start();
include_once 'conexion.php';

$usuario_login = $_POST['nombre_usuario'];
$constrasena_login = $_POST['contrasena'];

echo '<pre>';
var_dump($usuario_login);
var_dump($constrasena_login);
echo '</pre>';

$sql = 'SELECT * FROM usuarios WHERE nombre=?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_login));
$resultado = $sentencia->fetch();

echo '<pre>';
var_dump($resultado);
echo '</pre>';

if(!$resultado){
    echo 'No existe usuario';
    die();
}else{
    if(password_verify($constrasena_login, $resultado['contra'])){
        $_SESSION['admin'] = $usuario_login;
        header('location: hola.php');
        // echo 'Chivo';
    }else{
        echo 'No iguales';
        die();
    }
    
}

