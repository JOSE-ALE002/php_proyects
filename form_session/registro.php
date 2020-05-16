<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
</head>
<body>
    <h3>Registro de usuarios</h3>
    <form action="agregar_usuario.php" method="POST">
        <input type="text" name="nombre_usuario" placeholder="Ingresa usuario">
        <input type="text" name="contrasena" placeholder="Ingresa contraseña">
        <input type="text" name="contrasena2" placeholder="Confirma tu contraseña">
        <button type="submit">Guardar</button>
    </form>

    <h3>Login</h3>
    <form action="login.php" method="POST">
        <input type="text" name="nombre_usuario" placeholder="Ingresa usuario">
        <input type="text" name="contrasena" placeholder="Ingresa contraseña">
        <button type="submit">Login</button>
    </form>

</body>
</html>