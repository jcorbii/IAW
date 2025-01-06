

<?php
// Configuración de la base de datos
$host = 'localhost:52000';     // Servidor de base de datos
$dbname = 'escuela'; // Nombre de la base de datos
$user = 'alumne';          // Usuario de la base de datos
$password = 'alumne';          // Contraseña del usuario

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar a la base de datos: " . $e->getMessage());
}
?>
