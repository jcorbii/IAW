<?php
// db.php - Conexión a la base de datos
$host = 'localhost:52000';
$user = 'root';
$password = ''; // Cambiar si tienes contraseña
$dbname = 'escuela';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

<!-- register.php - Registro de usuarios -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    include 'db.php';

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!-- login.php - Inicio de sesión -->
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    include 'db.php';

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            header('Location: protected.php');
            exit;
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }

    $conn->close();
}
?>

<!-- protected.php - Página protegida -->
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
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
    <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>Esta es una página protegida. Solo puedes acceder si has iniciado sesión.</p>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>

<!-- logout.php - Cierre de sesión -->
<?php
session_start();
session_unset();
session_destroy();
header('Location: login.php');
exit;
?>
