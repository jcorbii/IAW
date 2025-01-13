<html>
<html>

<head>
  <title>Crear BD</title>
</head>

<body>
<?php
$conexion = mysqli_connect("localhost:52000", "alumne", "alumne", "") or
    die("Problemas con la conexión");

// Crear la base de datos
mysqli_query($conexion, "CREATE DATABASE IF NOT EXISTS escuela") or
    die("Problemas en la creación de la base de datos: " . mysqli_error($conexion));

// Usar la base de datos
mysqli_query($conexion, "USE escuela;") or
    die("Problemas al seleccionar la base de datos: " . mysqli_error($conexion));

// Crear la tabla
mysqli_query($conexion, "CREATE TABLE IF NOT EXISTS estudiantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    edad INT)") 
    or die("Problemas en la creación de la tabla: " . mysqli_error($conexion));

mysqli_close($conexion);

echo "Se crearon la base de datos y las tablas, y se insertaron los datos.";
?>
</body>

</html>