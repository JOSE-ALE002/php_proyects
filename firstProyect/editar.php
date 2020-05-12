<?php 
    // echo 'editar.php?id=1&color=success&descripcion=Este es un color verde';
    $id = $_GET['id'];
    $color = $_GET['color'];
    $descripcion = $_GET['descripcion'];

    // echo '<br/>';
    // echo $id;
    // echo '<br/>';
    // echo $color;
    // echo '<br/>';
    // echo $descripcion;

    include_once 'conexion.php';

    $sql_editar = 'UPDATE colores SET color=?, descripcion=? WHERE id=?';
    $editar = $pdo->prepare($sql_editar);
    $editar->execute(array($color, $descripcion, $id));

    $editar = null;
    $pdo = null;
    header('location: index.php');
