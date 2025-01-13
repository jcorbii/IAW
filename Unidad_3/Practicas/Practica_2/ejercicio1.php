<!-- 1. Vectores (tradicionales) -->
<?php
$vector = [1, 2, 3, 4, 5];
echo "Elementos del vector: " . implode(", ", $vector) ."<br>"; 
$suma = array_sum($vector);
echo "Suma de los elementos: $suma<br>";

// Suma amb for
$suma = 0;
for ($i=0; $i < (count($vector)); $i++) {
    $suma = $suma + $vector[$i];
}
echo"El resultado es: ". $suma ."<br>";

// Suma amb foreach
$suma = 0;
foreach ($vector as $item ) {
    $suma = $suma + $item;
}
echo"El resultado es: ". $suma ."<br>";

$maximo = max($vector);
$minimo = min($vector);
echo "Valor máximo: $maximo<br>";
echo "Valor minimo: $minimo<br>";
?>