<?php

echo "<h3>Ejemplo 1</h3>";
echo "<p>Ordenar arreglos multidimensionales:</p>";

//Ordenar
$cantantes = ['2pac', 'eminem', 'snoop dogg'];
$numeros = [1, 7, 5, 4, 4, 6, 2];

asort($cantantes);
var_dump($cantantes);

arsort($cantantes);
var_dump($cantantes);

sort($numeros);
var_dump($numeros);
echo "<hr>";

echo "<h3>Ejemplo 2</h3>";
echo "<p>Añadir elementos a un arreglo (array):</p>";

//Añadir elementos
$cantantes[] = "Costa";
array_push($cantantes, "Capaz");
array_pop($cantantes);
unset($cantantes[2]);
var_dump($cantantes);

echo "<hr>";

echo "<h3>Ejemplo 3</h3>";
echo "<p>Contenido aleatorio dentro de un arreglo (array):</p>";

//Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];

echo "<hr>";

echo "<h3>Ejemplo 4</h3>";
echo "<p>Revertir orden:</p>";

//Dar la vuelta
var_dump(array_reverse($numeros));

echo "<hr>";

echo "<h3>Ejemplo 5</h3>";
echo "<p>Buscar dentro de un arreglo (array):</p>";

//Buscar dentro de un array
$resultado = array_search('Costa', $cantantes);
var_dump($resultado);

echo "<hr>";