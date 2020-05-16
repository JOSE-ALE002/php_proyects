<?php
include_once 'conexion.php';

//LLamamos a todos los articulos
$sql = 'SELECT * FROM articulos';
$mostrar = $pdo->prepare($sql);
$mostrar->execute();
$resultado = $mostrar->fetchAll();

$articulo_x_pagina = 3;
$paginas = ceil($mostrar->rowCount()/3);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PaginacionPHP</title>

    <!-- Boostrap4  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <h1 class="mb-5">Paginacion</h1>

        <?php foreach ($resultado as $item): ?>
            <div class="alert alert-primary" role="alert">
                <?php echo $item['titulo']?>
            </div>
        <?php endforeach ?>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link"
                    href="index.php?pagina=<?php echo $_GET['pagina']-1 ?>">
                        Previous
                    </a>

                </li>   

                <?php for ($i=0; $i < $paginas; $i++): ?>
                    <li class="page-item <?php echo ($_GET['pagina']==$i+1) ? 'active' : '' ?>"><a class="page-link" href="index.php?pagina=<?php echo $i+1 ?>"><?php echo $i+1 ?></a></li>                
                <?php endfor ?>

                <li class="page-item">
                    <a class="page-link" 
                    href="index.php?pagina=<?php echo $_GET['pagina']+1 ?>">
                        Next
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</body>

</html>