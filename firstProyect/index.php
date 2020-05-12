<?php 
include_once 'conexion.php';

$sql_leer = 'SELECT * FROM colores';
$mostrar = $pdo->prepare($sql_leer);
$mostrar->execute();

$resultado = $mostrar->fetchAll();

// var_dump($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto_PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <?php foreach ($resultado as $item): ?>
            <div class="text-uppercase alert alert-<?php echo $item['color'] ?>" role="alert">
                <?php echo $item['color'] . ' - ' . $item['descripcion'] ?>
            </div>
            <?php endforeach ?>
        </div>
    </div>
        
    </div>
</body>
</html>