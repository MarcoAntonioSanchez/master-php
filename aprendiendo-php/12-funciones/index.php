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

    function calculadora($numero1, $numero2, $negrita = false){ //Se agrega un 3er parametro inicializado como falso
    //Conjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    //Condición: si negrita es verdadera (true)
    if ($negrita){
        echo "<h1>"; //Entonces se imprime la apertura de un h1
    }
    //Se imprimen instrucciones
    echo "suma: $suma <br/>";
    echo "resta: $resta <br/>";
    echo "multiplicacion: $multiplicacion <br/>";
    echo "division: $division <br/>";
    //Condición: si negrita sigue siendo verdadera (true)
    if ($negrita){
        echo "</h1>"; //Entonces se imprime el cierre del h1
    }
}

calculadora(10, 30, true); //Se invoca o se manda a llamar a la funcion calculadora con los parametros 1 y 2

echo "<h3>Ejemplo 4</h3>";
echo "<p>Función que retorna (return) un nombre:</p>";

//Inicio de la función, con la variable nombre por parametro
function devuelveElNombre($nombre){
    return "El nombre es: $nombre"; //Retorno de un string acompañado de la variable nombre
}

//Imprime e invoca la función deuvelveElNombre con un nombre por parametro
echo devuelveElNombre("Marco A. Sánchez");

echo "<h3>Ejemplo 5</h3>";
echo "<p>Función que imprime las opraciones básicas de una calculadora, con retorno:</p>";

    function calculadoraConR($numero3, $numero4, $negrita = false){ //Se agrega un 3er parametro inicializado como falso
    //Conjunto de instrucciones a ejecutar
    $suma = $numero3 + $numero4;
    $resta = $numero3 - $numero4;
    $multiplicacion = $numero3 * $numero4;
    $division = $numero3 / $numero4;
    //Se declara una variable dentro de la función con un string vacío
    $cadenaTexto = "";
    
    //Condición: si negrita es verdadera (true)
    if ($negrita){
        $cadenaTexto .= "<h1>"; //Entonces se concatena la apertura de un h1 a la variable cadenaTexto
    }
    //Se concatenan las instrucciones y etiquetas br a la variable cadenaTexto
    //acumulando así su contenido (valor), en cada proceso de la función
    $cadenaTexto .= "suma: $suma <br/>";
    $cadenaTexto .= "resta: $resta <br/>";
    $cadenaTexto .= "multiplicacion: $multiplicacion <br/>";
    $cadenaTexto .= "division: $division <br/>";
    //Condición: si negrita sigue siendo verdadera (true)
    if ($negrita){
        $cadenaTexto .= "</h1>"; //Entonces se concatena el cierre del h1 a la variable cadenaTexto
    }
    
    //Se imprime el var_dump de la variable cadenaTexto hasta este punto
    var_dump($cadenaTexto);
    return $cadenaTexto; //Se retorna (return) la variable como resultado del proceso de la función
}

//Se imprime con un echo el llamado a la función, para imprimir en su lugar el resultado de esta (return / retorno)
echo calculadoraConR(10, 30, true); //Se invoca o se manda a llamar a la funcion calculadora con los parametros 1 y 2

?>