<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Conectar a la base de datos
    $conn = mysqli_connect("localhost:52000", "alumne", "alumne", "escuela") or
    die("Problemas con la conexión");

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM Nivel1 WHERE usuario = '$username'";
    $result = $conn->query(query: $sql);
    // $passwordhash =  password_hash($_POST['contrasenya'],  PASSWORD_DEFAULT);
    

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verificar la contraseña
        if (password_verify($password, $user['contrasenya'])) {
            // Almacenar el nombre y el ID en la sesión
            $_SESSION['usuario'] = $user; // Almacenar el nombre
            $_SESSION['loggedin'] = true;     // Bandera para indicar que está autenticado
            // cllecho "Login Echo.";
            header(header: "Location: protected.php");
            exit;
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "No se encontró un usuario con esa contraseña.";
    }
    $conn->close();
}
?>
