<html>
<html>

<head>
  <title>Insertar Datos</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost:52000", "alumne", "alumne", "escuela") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into estudiantes(nombre,edad) values 
                       ('$_REQUEST[nombre]','$_REQUEST[edad]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El alumno fue dado de alta.";
  ?>
</body>

</html>