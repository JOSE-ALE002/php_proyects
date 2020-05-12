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

if($_GET){
    $id = $_GET['id'];
    $sql_unico = 'SELECT * FROM colores WHERE id=?';
    $gsent_unico = $pdo->prepare($sql_unico);
    $gsent_unico->execute(array($id));
    $resultado_unico = $gsent_unico->fetch();

    // var_dump($resultado_unico);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto_PHP</title>

    <!-- Boostrap4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- FontAwesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <?php foreach ($resultado as $item): ?>
            <div class="text-uppercase alert alert-<?php echo $item['color'] ?>" role="alert">
                <?php echo $item['color'] . ' - ' . $item['descripcion'] ?>

                <a href="index.php?id=<?php echo $item['id'] ?>" class="float-right">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
            </div>
            <?php endforeach ?>
        </div>

        <div class="col-md-6">
            <?php if(!$_GET): ?>                
            <h1>AGREGAR ELEMENTO</h1>
            <form method="POST">                
                <input type="text" placeholder="Ingresa color" class="form-control" name="color">
                <input type="text" placeholder="Ingresa descripcion" class="form-control mt-3" name="descripcion">                
                <input type="submit" value="Agregar" class="btn btn-success mt-3">
            </form>    
            <?php endif ?>            

            <?php if($_GET): ?>                
            <h1>EDITAR ELEMENTO</h1>
            <form action="editar.php">                
                <input type="text" placeholder="Ingresa color" class="form-control" name="color"
                value="<?php echo $resultado_unico['color'] ?>">
                <input type="text" placeholder="Ingresa descripcion" class="form-control mt-3" name="descripcion" value="<?php echo $resultado_unico['descripcion'] ?>">                
                <input type="hidden" name="id" value="<?php echo $resultado_unico['id']?>">
                <input type="submit" value="Editar" class="btn btn-success mt-3">                
            </form>    
            <?php endif ?>            
        </div>
    </div>
        
    </div>
</body>
</html>