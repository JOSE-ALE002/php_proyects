<?php 
include_once 'conexion.php';

$sql_leer = 'SELECT * FROM colores';
$mostrar = $pdo->prepare($sql_leer);
$mostrar->execute();

$resultado = $mostrar->fetchAll();

// var_dump($resultado);

//AGREGAR DATOS
if ($_POST) {
    $color = $_POST['color'];
    $descripcion = $_POST['descripcion'];
    
    $sql_agregar = 'INSERT INTO colores(color, descripcion) VALUES (?, ?)';
    $add = $pdo->prepare($sql_agregar);
    $add->execute(array($color, $descripcion));

    header('location: index.php');
}
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

        <div class="col-md-6">                
            <h1>AGREGAR ELEMENTO</h1>
            <form method="POST">                
                <input type="text" placeholder="Ingresa color" class="form-control" name="color">
                <input type="text" placeholder="Ingresa descripcion" class="form-control mt-3" name="descripcion">                
                <input type="submit" value="Agregar" class="btn btn-success mt-3">
            </form>                
        </div>
    </div>
        
    </div>
</body>
</html>