<?php

/*
 * Bucle while
 * Estructura de control que itera o repite la ejecución de una serie de
 * instrucciones tantas veces como sea necesario, en base a una condición
 * que lleva el bucle

while(condicion){
    bloque de instrucciones
        otra instruccion
}

Ejemplo de un bucle con el limite de 100, comenzando en 0
$numero = 0;
while($numero <= 100){
    echo "<p>$numero</p>";
    $numero++;
}

*/

//Otro ejemplo de bucle while acomodando los caracteres a imprimir
//impidiendo la coma después del número 100
$numero = 0;
while($numero <= 100){
    echo $numero;
    
    if($numero != 100){
        echo ", ";
    }
    $numero++;
}

echo "<br>";
//Ejemplo usando isset para comprobar directamente si existe
//arreglo global $_GET

if(isset($_GET['numero'])){
    
//(int) Para cambiar el tipo de dato de string a entero o int
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}

//Ejemplo de while usando el metodo GET para mostrar la tabla de multiplicación
//correspondiente. URL: /?numero=8
echo "<h1>Tabla de multiplicar del número $numero</h1>";

$contador = 0;
while($contador <= 10){
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
    $contador++;
}
?>