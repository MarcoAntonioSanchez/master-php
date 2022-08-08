<?php

/*
Arreglos:
 * Un arreglo (array) es una colección o conjunto de datos bajo 1 único nombre
 * Para acceder a esos valores se puede usar un identificador alfanumerico
*/
echo "<h3>Ejemplo 1</h3>";
echo "<p>Recorriendo arreglos por posición:</p>";

$pelicula = "Batmna";
$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
$cantantes = ['2pac', 'Eminem', 'Snoop Dogg'];

echo $peliculas[0];
echo "<hr>";

//Recorrer con for
echo "<h3>Ejemplo 2</h3>";
echo "<p>Recorriendo arreglos por posición:</p>";

echo "<h1>Listado de peliculas:</h1>";
echo "<ul>";
for($i = 0; $i < count($peliculas); $i++){
    echo "<li>".$peliculas[$i]."</li>";
}
echo "</ul>";
echo "<hr>";

echo "<h3>Ejemplo 3</h3>";
echo "<p>For each:</p>";

echo "<h1>Listado de cantantes</h1>";
echo "<ul>";

foreach ($cantantes as $cantante) {
    echo "<li>".$cantante."</li>";
}
echo "</ul>";

echo "<hr>";