<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Registro de equipos</title>
</head>
<body>
    <div class="navbar">
        <div class="title">Registro de Equipos</div>
        <div class="navbar-links">
            <a href="#inicio">Inicio</a>
            <a href="articulos_servicios.php">Artículos</a>
            <a href="seguimientoR.php">Equipos</a>
            <div class="dropdown">
                <button class="dropbtn">&#9776;</button>
                <div class="dropdown-content">
                    <a href="#usuario">Nombre de Usuario</a>
                    <a href="login.php">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="title">Registro de Equipos de Computo</h1>
        <form action="/submit-form-url" method="POST" id="equiposForm">
            <div id="equipos">
                <div class="equipo">
                    <label for="categoria">Categoría del Equipo:</label>
                    <select name="categoria[]">
                        <option value="portatil">Portátil</option>
                        <option value="desktop">Desktop</option>
                        <option value="celular">Celular</option>
                        <option value="tablet">Tablet</option>
                        <option value="otro">Otro</option>
                    </select>

                    <label for="modelo">Modelo:</label>
                    <input type="text" name="modelo[]" required>

                    <label for="numero_serie">Número de Serie:</label>
                    <input type="text" name="numero_serie[]" required>

                    <label for="contrasena">Contraseña del Equipo:</label>
                    <input type="text" name="contrasena[]" required>

                    <label for="nombre_equipo">Nombre del Equipo:</label>
                    <input type="text" name="nombre_equipo[]" required>

                    <label for="estado_inicial">Estado Inicial:</label>
                    <input type="text" name="estado_inicial[]" required>

                    <label for="comentarios">Comentarios Adicionales:</label>
                    <textarea name="comentarios[]" rows="4"></textarea>
                </div>
            </div>
            <div class="botones">
                <button type="button" id="agregarEquipo">Agregar Equipo</button>
            </div>
            <input type="submit" value="Registrar Equipos">
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>