<?php

/*
    Tipos de datos:

 * Entero (int / integer) = 99
 * Coma flotante / decimales (float / double) = 3.45
 * Cadenas de caracteres (string) = "Hola yo soy un string"
 * Boleano (bool) = true false
 * Null
 * Array (colección de datos)
 * Objetos 
*/

//Se declaran 3 variables de 3 tipos distintos de datos
$numero = 100;
$decimal = 27.9;
$texto = "Soy un texto";

//Se obtiene el tipo de valor en las variables declaradas anteriormente
echo gettype($numero);
echo gettype($decimal);
echo gettype($texto);

//Una variable sin valor inicializado automáticamente es igual a null
$nula = null;
echo gettype($nula)

?>