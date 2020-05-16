<?php
$capitales = array(
    'Reino Unido' => 'Londres',
    'Peru' => 'Lima',
    'Francia' => 'Paris',
    'Portugal' => 'Lisboa');

    // Agregamos un valor al arreglo
    $capitales['Argentina'] = 'Buenos Aires';

    //Verifica si el dato existe dentro del arreglo
    if (array_key_exists('Francia', $capitales)) {
        print 'La capital de Colombia es: ' . $capitales['Francia'] . 'n';
    }else{
        echo 'No existe';
    }

    foreach( $capitales as $pais => $capital) {
        echo "Pais: " . $pais . ", Capital: " . $capital . "n";
    }

    // var_dump($capitales);   

?>


<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
</body>
</html> -->