<?php
// Array que simula la base de datos de usuarios
$usuarios = array(
    'Arnoldo' => 'arnoldo',
    'Lugo' => '321'
);

// Obtener datos del formulario
$usuario = $_POST['nombre_usuario']; // Cambiado de 'username' a 'nombre_usuario'
$contrasena = $_POST['contrasena']; // Cambiado de 'password' a 'contrasena'

// Verificar si las credenciales son válidas
if (array_key_exists($usuario, $usuarios) && $usuarios[$usuario] == $contrasena) {
    // Inicio de sesión exitoso
    session_start();
    $_SESSION['username'] = $usuario;
    header("Location: ../views/registro.php"); // Redirigir a la página de registro
    exit;
} else {
    // Inicio de sesión fallido
    echo "Usuario o contraseña incorrectos.";
}