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

//Se declara una variable (global), que puede ser usada tanto dentro como fuera de las funciones
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

//Se imprime la frase (valor) de la variable global declarada anteriormente
echo $frase;

//Se declara una función holaMundo sin parametros
function holaMundo(){
    
    //Se indica por medio del prefijo global que la variabnle $frase se encuentra fuera (es flobal) de la función
    global $frase;
    
    //Se imprime la variable global desde dentro de la función
    echo "<h1>$frase</h1>";
    
    //Se declara una variable (local) dentro de la función holaMundo
    $year = 2022;
    
    //Se imprime la variable $year desde dentro de la función sin ningún problema ya que es global
    echo "<h1>$year</h1>";

    //Se retorna la variable $year (local) para que pueda ser usada globalmente, o fuera de su función
    return $year;
}

holaMundo(); // Se invoca a la función holaMundo

echo "<hr>";

echo "<h3>Ejemplo 2</h3>";
echo "<p>Funciones variables</p>";

//Se declara una función sin parametros
function buenosDias(){
    return "Hola, buenos días!"; //Que retorna una cadena de texto (string)
}

//Se declara una segunda función, también vacía
function buenasTardes(){
    return "Hey, que tal la comida?"; //Que retorna otra cadena de texto (string)
}

//Se declara una 3er función, también vacía
function buenasNoches(){
    return "Adios, que disfrutes la cena!"; //Que retorna otra cadena de texto diferente 
}

//Se declara una variable cuyo valor será un parametro HTTP sobre la misma variable horario
$horario = $_GET['horario'];

//Se declara una 2da variable para concatenar la primer parte del string que llamrá a la funciión variable dependiendo del nombre acompletado por medio de los parametros HTTP
$miFuncion = "buenas".$horario;

//Se imprime la variable miFunción y se invoca como a una variable sin parametros
echo $miFuncion();

echo "<hr>";