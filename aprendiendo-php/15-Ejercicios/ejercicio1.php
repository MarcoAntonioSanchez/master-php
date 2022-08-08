<?php

/* 
 * Ejercicio 1:
 * Hacer un programa en PHP que tenga un arreglo con 8 numeros enteros
 * y que haga lo siguiente:
 * 1. Recorrerlo y mostrarlo
 * 2. Ordenarlo y mostrarlo
 * 3. Mostrar longitud
 * 4. Buscar algun elemento dentro del arreglo (buscar por el parametro que me lleve por la url)
 * */

//Funciones:
function mostrarArray($pokemones){
    $resultado = "";
    foreach ($pokemones as $pokemon) {
    $resultado .= $pokemon."<br/>";
    }
    return $resultado;
}

echo "<h3>Arreglo:</h3>";

$pokemones = ['Pikachu', 'Charmander', 'Bulbasaur', 'Squirtle', 'Butterfly', 'Toggepi'];
var_dump($pokemones);
echo "<br/>";

echo "<br/><hr>";

echo "<h3>Recorrerlo y mostrarlo:</h3>";
echo "<br/>";

echo "<h4>Opción 1:</h4>";
for($i = 0; $i < count($pokemones); $i++){
    echo "<li>".$pokemones[$i]."</li>";
}

echo "<br/>";

echo "<h4>Opción 2:</h4>";
echo mostrarArray($pokemones);

echo "<br/><hr>";

echo "<h3>Ordenarlo y mostrarlo:</h3>";
echo "<br/>";

sort($pokemones);
echo mostrarArray($pokemones);

echo "<br/><hr>";

echo "<h3>Mostrar longitud:</h3>";
echo "<br/>";

echo count($pokemones);

echo "<br/><hr>";

echo "<h3>Buscar elemento dentro del arreglo:</h3>";
echo "<br/>";

if(isset($_GET['pokemon'])){
    $busqueda = $_GET['pokemon'];
    
    $search = array_search($busqueda, $pokemones);
    
    if(!empty($search)){
        echo "El pokemon: existe en el arreglo, en la posición numero: $search";
    }else{
        echo "No se encontró el pokemon buscado";
    }
}

echo "<br/><hr>";