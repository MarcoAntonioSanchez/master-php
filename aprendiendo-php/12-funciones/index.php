<?php

/*
Funciones:
 * Una función es un conjunto de instrucciones agrupadas bajo un nombre concreto
 * y que pueden reutilizarse solamente invocando a la función tantas veces como
 * sea necesario.
 * 
 * function nombreDeMiFuncion($parametro){
 *  //Bloque de instrucciones
 * }

nombreDeMiFuncion($mi_parametro);
*/

echo "<h1>FUNCIONES</h1>";

echo "<h3>Ejemplo 1</h3>";
echo "<p>Funcion que imprime 4 nombres a la vez:</p>";

function muestraNombres(){ //Definición de la función
    echo "Elon Musk <br>"; //Instrucciones
    echo "Bill gates <br>";
    echo "Nikola Tesla <br>";
    echo "Isaac Asimov <br>";
}

muestraNombres(); //Invocar o llamar a la función

echo "<h3>Ejemplo 2</h3>";
echo "<p>Función que toma e imprime un numero por parametro</p>";

function tabla($numero){
    echo $numero;
}

tabla(55);

?>