<?php

// $datos = [
//     'dolar' => 500,
//     'euro' => 800
// ];

// $peticion = $_GET['variable'];

# Transformamos el arreglo a formato JSON

//Esto es para que el navegador pueda entender el formato JSON
header('Content-Type: application/json');

//Esta linea es para permitir que cualquiera pueda acceder a nuestra API
//si quisieramos que solo nustra aplicacion pueda entrar a la api pues cambiamos el asterisco por nuestro dominio
header('Access-Control-Allow-Origin: *');

if($_GET['variable'] == 'euro' || $_GET['variable'] == 'dolar'){    
    include_once 'conexion.php';
    $sql = 'SELECT * FROM ' . $_GET['variable'];
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

    // var_dump($resultado);

}else{
    echo 'Solicitud no encontrada';
}

echo json_encode($resultado);