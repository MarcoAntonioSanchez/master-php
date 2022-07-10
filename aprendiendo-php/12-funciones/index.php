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
echo "<p>Función que toma e imprime un numero por parametro para imprimir"
. " su tabla de multiplicación</p>";

function tabla($numero){ //Se declara función con parametro $numero
    echo "<h4> Tabla de multiplicar del numero: $numero</h4>"; //Se imprime texto junto al valor del parametro
    for($i = 1; $i <= 10; $i++){ //Se abre un bucle for con variable $i condicionada a 10
        $operacion = $numero*$i; //Se realiza interación de la operación $numero multiplicado por $i
        echo "$numero x $i = $operacion<br>"; //Se imprime texto de presentación de la operación para imprimirse como tabla
    }
}

/*
if(isset($_GET['numero'])){
    tabla($_GET['numero']); //Se define que el parametro $numero vendra de la URL por metodo GET
}else{
    echo "No hay numero para mostrar tabla de multiplicar";
}
*/

for($i = 0; $i <= 10; $i++){ //Se declara bucle for con la variable $i condicionada hasta 10
    tabla($i); //Se imprime la funcion tabla con el parametro $i del bucle for
}

echo "<h3>Ejemplo 3</h3>";
echo "<p>Función que imprime las operaciones básicas de una calculadora"
. " a partir de 2 numeros:</p>";
    /*
function calculadora($numero1, $numero2, $negrita = false){ //Se agrega un tercer parametro $negrita
    //Conjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    
    if($negrita){ //Si negrita existe y es igual a true
        echo "<h1>"; //Entonces abre una etiqueta h1
    }
    
    echo "$numero1 y $numero2 <br>";
    echo "Suma: $suma <br>";
    echo "Resta: $resta <br>";
    echo "Multiplicación: $multiplicacion <br>";
    echo "División: $division <br>";
    echo "<br>";
}

    if($negrita){ //Si negrita nuevamente es igual a true
        echo "</h1>"; //Se cierra la etiqueta /h1
    }
    
    */

    function calculadora($numero1, $numero2, $negrita = false){ //Se agrega un tercer parametro $negrita
    //Conjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    
    $cadenaTexto = "";
    
    if($negrita){ //Si negrita existe y es igual a true
        $cadenaTexto .= "<h1>"; //Entonces abre una etiqueta h1
    }
    
    $cadenaTexto .= "$numero1 y $numero2 <br>";
    $cadenaTexto .= "Suma: $suma <br>";
    $cadenaTexto .= "Resta: $resta <br>";
    $cadenaTexto .= "Multiplicación: $multiplicacion <br>";
    $cadenaTexto .= "División: $division <br>";
    $cadenaTexto .= "<br>";
}

    if($negrita){ //Si negrita nuevamente es igual a true
        $cadenaTexto .= "</h1>"; //Se cierra la etiqueta /h1
        
        var_dump($cadenaTexto);
        return true;
    }


calculadora(10, 30); //Se invoca o se manda a llamar a la funcion calculadora con los parametros 1 y 2, en 3 ocaciones:
calculadora(100, 50);
calculadora(2, 7);

echo "<h3>Ejemplo 4</h3>";
echo "<p>Función que devuelve un nombre por medio de una variable y "
        . " retornando el parametro:</p>";

function devuelveElNombre($nombre){
    return "El nombre es: $nombre";
}

echo devuelveElNombre("Marco A. Sánchez");



?>