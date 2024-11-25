<?php

if (isset($_POST['enviar'])) {
    $archivo = $_FILES['archivo'];
    $nombre = $archivo['name'];
    $tipo = $archivo['type'];
    $tamano = $archivo['size'];
    $ruta = $archivo['tmp_name'];
    $destino = "archivos/$nombre";
    if ($tipo == "text/plain") {
        if (move_uploaded_file($ruta, $destino)) {
            echo "Archivo guardado correctamente";
            $contenido = file_get_contents($destino);
            echo "<br>Contenido del archivo:<br>";
            echo $contenido;
        } else {
            echo "Error al guardar el archivo";
        }
    } else if ($tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif") {
        if (move_uploaded_file($ruta, $destino)) {
            echo "Archivo guardado correctamente";
            echo '<img src="'.$destino.'">';
        } 
    } else {
        echo "El archivo no es de texto plano o imagen";
    }
}
?>
    <form action="ejercicio2.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <input type="submit" name="enviar" value="Enviar">
    </form>
<?php  //isset?>