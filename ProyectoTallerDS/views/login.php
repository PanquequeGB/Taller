<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    <div class="navbar">
        <h1 class="title">Taller Mock-Software</h1>
    </div>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form action="../controller/login_controller.php" method="POST">
            <label for="nombre_usuario">Usuario:</label>
            <input type="text" id="nombre_usuario" name="nombre_usuario" required>
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>
            <input type="submit" value="Ingresar">
            <div class="link">
                <p>¿No tienes cuenta?</p> <a href="registro.php">Regístrate aquí</a>
            </div>
        </form>
    </div>
</body>
</html>