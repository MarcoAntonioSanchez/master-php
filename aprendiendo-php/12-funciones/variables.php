<?php

/*
 * Variables locales:
 * Son las que se definen dentro de una función y no pueden ser usadas fuera de la función
 * Solo están disponibles dentro, a no se que se haga un return
 * 
 * Variables globales:
 * Son las que se declaran fuera de una función y están disponibles dentro y fuera de las funciones */

echo "<h3>Ejemplo 1</h3>";
echo "<p>Variable global</p>";
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;

function holaMundo(){
    
    global $frase;
    
    echo "<h1>$frase</h1>";
    
    $year = 2022;
    echo "<h1>$year</h1>";
    
    return $year;
}

holaMundo();

echo "<hr>";
