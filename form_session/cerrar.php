<?php

//INICIALIZAR LA SESION
//SI USTED ESTA USANDO SESSION_NAME('ALGO'), ¡NO LO OLVIDE
session_start();

//DESTRUIR TODAS LAS VARIABLES DE SESSION
$_SESSION = array();

//SI SE DESEA DESTRUIR LA SESION COMPLETAMENTE, BORRE TAMBIEN LAS COOKIE DE LA SESION
//NOTA: ESTO DESTRUIRA LA SESION PERO NO LA INFORMACION DE LA SESION
if(ini_get("session.use_cookies")){
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params['path'], $params['domain'],
        $params['secure'], $params['httponly']
    );
}

//FINALMENTE DESTRUIMOS LA SESION
session_destroy();

header('location: registro.php');

?>