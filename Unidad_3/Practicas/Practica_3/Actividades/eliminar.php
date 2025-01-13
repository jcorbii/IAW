<html>
<html>

<head>
  <title>Insertar Datos</title>
</head>

<body>
  <?php
  $id = $_POST['id'];

  $conexion = mysqli_connect("localhost:52000", "alumne", "alumne", "escuela") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "delete from estudiantes where id=$id ")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El alumno se elimino correctamente.";
  ?>
</body>

</html>