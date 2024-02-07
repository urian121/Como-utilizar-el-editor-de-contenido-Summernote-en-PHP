<?php
$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "bd_posts";

// Establecer conexión a la base de datos
$con = mysqli_connect($servidor, $usuario, $password, $basededatos);

// Función para manejar errores de conexión
function manejarErrorDeConexion($error_message)
{
    die("Error al conectar a la Base de Datos: " . $error_message);
}

// Verificar si hubo errores al conectar
if (mysqli_connect_errno()) {
    manejarErrorDeConexion(mysqli_connect_error());
}

// Verificar si la conexión es exitosa
if (!$con) {
    manejarErrorDeConexion("No se pudo conectar a la Base de Datos");
}

// Si todo está bien, mostrar mensaje de conexión exitosa
//echo "Conexión exitosa a la Base de Datos";
