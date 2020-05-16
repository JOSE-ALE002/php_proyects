<?php 
    //GENERA UNA CONTRASEÑA CIFRADA
    // echo password_hash('hola', PASSWORD_DEFAULT) . "\n";

    include_once 'conexion.php';

    $usuario_nuevo = $_POST['nombre_usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena2 = $_POST['contrasena2'];

    $sql = 'SELECT * FROM usuarios WHERE nombre=?';
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute(array($usuario_nuevo));
    $resultado = $sentencia->fetch();

    var_dump($resultado);

    if($resultado){
        echo 'Ya existe un registro con ese nombre :(';
        die();
    }

    
    $contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

    echo '<pre>';
    var_dump($usuario_nuevo);
    var_dump($contrasena);
    var_dump($contrasena2);
    echo '</pre>';    

    if (password_verify($contrasena2, $contrasena)){
        echo '¡La contraseña es valida! <br/>';

        include_once 'conexion.php';
        $sql_agregar = 'INSERT INTO usuarios(nombre, contra) VALUES (?,?)';
        $add = $pdo->prepare($sql_agregar);

        if ($add->execute(array($usuario_nuevo, $contrasena))) {
            echo '<br/>Agregado';
        }else{ 
            echo '<br/>Error';
        }
        
        $add = null;
        $pdo = null;

        // header('location: index.php');

    } else{
        echo 'La contraseña no es valida';
    }