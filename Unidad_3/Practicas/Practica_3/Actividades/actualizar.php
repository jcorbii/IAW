<html>
<html>

<head>
  <title>Actualizar</title>
</head>

<body>
  <?php
  $id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $edad = $_POST['edad'];
 

  $conexion = mysqli_connect("localhost:52000", "alumne", "alumne", "escuela") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "update estudiantes set nombre = '$nombre', edad = '$edad' where id = '$id' ")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El alumno se actualizo correctamente.";
  header("Refresh:1; url= llistar.php");
  ?>
  
</body>

</html>