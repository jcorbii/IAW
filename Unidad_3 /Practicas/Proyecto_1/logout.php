<?php
session_start();

// Destruye todas las variables de sesión
session_unset();
session_destroy();

// Redirige al formulario de login
header("Location: login.html");
exit;
?>
