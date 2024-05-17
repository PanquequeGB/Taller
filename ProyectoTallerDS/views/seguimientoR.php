<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Seguimiento de Equipos</title>
</head>
<body>
    <div class="navbar">
        <div class="title">Seguimiento de Equipos
        </div>
        <div class="navbar-links">
            <a href="#inicio">Inicio</a>
            <a href="articulos_servicios.php">Artículos</a>
            <a href="registro.php">Registro</a>
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
        <h2 class="title">Estado Actual de los Equipos</h2>
        <div class="status">
            <div class="status-title">Equipo 1</div>
            <div class="status-state diagnostico">En diagnóstico</div>
        </div>
        <div class="status">
            <div class="status-title">Equipo 2</div>
            <div class="status-state en-proceso">En proceso</div>
        </div>
        <div class="status">
            <div class="status-title">Equipo 3</div>
            <div class="status-state espera-piezas">En espera de piezas</div>
        </div>
        <div class="status">
            <div class="status-title">Equipo 4</div>
            <div class="status-state finalizado">Finalizado</div>
        </div>
    </div>
</body>
</html>