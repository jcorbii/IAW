<?php
// protected.php
session_start();

// Verifica si el usuario ha iniciado sesión
 if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
     // Si no está autenticado, redirige al formulario de login
     header("Location: login.php");
     exit;
}
var_dump($_SESSION)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Protegida</title>
</head>
<body>
    <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>
    <p>Esta es una página protegida.</p>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
