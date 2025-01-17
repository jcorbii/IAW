

<?php
// Configuración de la base de datos
$host = 'localhost:52000';     // Servidor de base de datos
$dbname = 'escuela';           // Nombre de la base de datos
$user = 'alumne';              // Usuario de la base de datos
$password = 'alumne';          // Contraseña del usuario

// Conexion Base de datos
$conexion = mysqli_connect($host , $user, $password, $dbname) or
    die("Problemas con la conexión");

