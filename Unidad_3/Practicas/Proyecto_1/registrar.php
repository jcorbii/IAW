<html>
<html>

<head>
  <title>Registrar</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost:52000", "alumne", "alumne", "escuela") or
    die("Problemas con la conexión");
   $passwordhash =  password_hash($_REQUEST['contrasenya'], PASSWORD_BCRYPT);
  mysqli_query($conexion, "insert into Nivel1(usuario,contrasenya) values 
                       ('$_REQUEST[usuario]','$passwordhash')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El usuario fue registrado.";
  ?>
</body>

</html>