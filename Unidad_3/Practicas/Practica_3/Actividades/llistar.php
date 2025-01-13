<html>

<head>
  <title>Llistar Datos</title>
</head>

<body>

  <?php
  $conexion = mysqli_connect("localhost:52000", "alumne", "alumne", "escuela") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select id,nombre,edad
                        from estudiantes") or
    die("Problemas en el select:" . mysqli_error($conexion));

    while ($reg = mysqli_fetch_array($registros)) {
        echo "ID: " . $reg['id'] . "<br>";
        echo "Nombre: " . $reg['nombre'] . "<br>";
        echo "Edad: " . $reg['edad'] . "<br>";
        ?>
        
        <!-- Formulario para Modificar -->
        <form action="actualizar.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $reg['id']; ?>">
          Nombre: <input type="text" name="nombre" value="<?php echo $reg['nombre']; ?>"><br>
          Edad: <input type="text" name="edad" value="<?php echo $reg['edad']; ?>"><br>
          <input type="submit" value="Modificar">
        </form>


        <!-- Formulario para Eliminar -->
        <form action="eliminar.php" method="post">
            <input type="submit" value="Eliminar">
            <input type="hidden" name="id" value="<?php echo $reg['id']; ?>">
        </form>

        <?php
        echo "<hr>";    
    }

  mysqli_close($conexion);
  ?>
</body>

</html>
