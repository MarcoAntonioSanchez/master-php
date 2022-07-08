<?php

/*
 * Bucle while
 * Estructura de control que itera o repite la ejecución de una serie de
 * instrucciones tantas veces como sea necesario, en base a una condición
 * que lleva el bucle

while(condicion){
    bloque de instrucciones
        otra instruccion
}

Ejemplo de un bucle con el limite de 100, comenzando en 0
$numero = 0;
while($numero <= 100){
    echo "<p>$numero</p>";
    $numero++;
}

*/

$numero = 0;
while($numero <= 100){
    echo $numero;
    
    if($numero != 100){
        echo ", ";
    }
    $numero++;
}

?>