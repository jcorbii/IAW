<?php
// protected.php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: ejercicio3.html");
    exit();
}
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
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>
