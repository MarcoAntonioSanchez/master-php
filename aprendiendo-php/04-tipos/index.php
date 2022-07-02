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
echo gettype($nula);

//Los nombres de la variables no pueden contener caracteres especiales
// EJEMPLO: $variable_uno | $variableUno

$miNombre = "Marco A. Sánchez";

//var_dump Nos permite ver a detalle las caracteristicas de la variable pasada
//por parametro, como la ruta del documento, su posición y numero de linea,
//valor y largo del valor, en el caso de una variable:
var_dump($miNombre);

$misNombres[] = "Marco";

//En el casi de arreglos, var_dump nos mostrará aún más información
var_dump($misNombres);

//Con el uso de comillas dobles se pueden agregar variables dentro de cadenas
//de texto como en el siguiente ejemplo:
$numeroLoteria = 33;
$textoEjemplo = "Mi número de lotería es: $numeroLoteria";
echo $textoEjemplo;

//Un salto de línea como el del siguiente ejemplo, solo aplica si es mostrado
//por consola:
$textoConSaltoDeLinea = 'Yo soy la segunda parte.';
echo "Yo soy la primer parte \n$textoConSaltoDeLinea";

$comillaDoble = 'Hola soy un texto /" y yo otro /" ';
echo $comillaDoble;

?>