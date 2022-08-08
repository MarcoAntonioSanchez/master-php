<?php

/* 
 * Escribir un programa con PHP que añada valores a 1 array mientras que su
 * longitud sea menor a 120 y luego mostrarlo por pantalla
 */

$coleccion = array();

for($i = 0; $i < 120; $i++){
    array_push($coleccion, "ELEMENTO - ".$i);
}

var_dump($coleccion);