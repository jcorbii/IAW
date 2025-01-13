<!-- 2. Creación de un archivo de texto -->
<?php
$file = fopen("datos.txt", "w");
foreach ($vector as $numero) {
    fwrite($file, $numero . "\n");
}
fclose($file);
?>