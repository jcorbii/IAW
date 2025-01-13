<?php
session_start();
require 'config.php'; // Conectar a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Preparar y ejecutar la consulta SQL
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE username = :username");
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verificar si el usuario existe y la contraseña es correcta
    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;

        // Redirigir a la página protegida
        header("Location: pro.tected.php");
        exit();
    } else {
        // Mostrar un mensaje de error si las credenciales no son válidas
        echo "<p>Usuario o contraseña incorrectos.</p>";
        echo '<a href="ejercicio3.html">Intentar nuevamente</a>';
    }
} else {
    header("Location: ejercicio3.html");
    exit();
}
?>

