<html>
<head>
  <title>Registrar</title>
  <meta http-equiv="refresh" content="5;url=index.html">
</head>
<body>
  <?php
  $conexion = mysqli_connect("localhost:52000", "alumne", "alumne", "sistema_login") or
    die("Problemas con la conexión");

  $passwordhash = password_hash($_REQUEST['contrasenya'], PASSWORD_BCRYPT);

  $fecha_registro = date("Y-m-d H:i:s");

  $resultado = mysqli_query($conexion, "INSERT INTO usuarios(nombre_usuario, contrasenya, fecha_registro) VALUES 
                       ('$_REQUEST[usuario]', '$passwordhash', '$fecha_registro')");

  if ($resultado) {
    echo "El usuario fue registrado correctamente. Serás redirigido en 5 segundos.";
  } else {
    die("Problemas en el select: " . mysqli_error($conexion));
  }

  mysqli_close($conexion);
  ?>
</body>
</html>


