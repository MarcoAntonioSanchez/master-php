<?php

//Ejercicio 3
//Escribir un programa que imprima por pantalla los cuadrados que su numero
//muliplicado por si mismo de los 40 primeros numeros naturales
//P.D.: Utilizar blucle while

/*
$contador = 0;
while($contador <= 40){
    $cuadrado = $contador*$contador;
    echo "<h3>El cuadrado de: $contador Es: $cuadrado</h3>";
    $contador++;
}
*/

//Ejemplo usando el bucle for

for($contador = 0; $contador <= 40; $contador++){
    $cuadrado = $contador*$contador;
    echo "<h4>El cuadrado de: $contador Es: $cuadrado</h4>";
}

?>