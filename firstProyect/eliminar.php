<?php

include_once 'conexion.php';

$id = $_GET['id'];

$sql_eliminar = 'DELETE FROM colores WHERE id =?';
$delete = $pdo->prepare($sql_eliminar);
$delete->execute(array($id));

$pdo = null;
$delete = null;
header('location: index.php');
