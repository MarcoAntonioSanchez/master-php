<?php

echo "<h3>Ejemplo 1</h3>";
echo "<p>Funciones predifinidas de PHP</p>";

//Debuggear
$nombre = "Marco A. Sánchez";
var_dump($nombre);

//Fechas
echo date('d-m-y');
echo "<br/>";
echo time();

//Matematicas
echo "<br/>";
echo "Raiz cuadrada de 10: ".sqrt(10);
echo "<br/>";
echo "Numero aleatorio entre 10 y 40: ".rand(10, 40);
echo "<br/>";
echo "Numero PI: ".pi();
echo "<br/>";
echo "Redondear: ".round(7.894542, 3);

echo "<hr>";

echo "<h3>Ejemplo 2</h3>";
echo "<p>Más funciones predifinidas de PHP</p>";

//Funciones generales
echo gettype($nombre);
echo "<br/>";

//Detectar tipado
if(is_string($nombre)){
    echo "Esa variable es un string";
}

echo "<br/>";

if(!is_float($nombre)){
    echo "La variable no es un número con decimales";
}

echo "<br/>";

//Comprobar existencia
if(isset($edad)){
    echo "La variable existe";
}else{
    echo "La variable no existe";
}

echo "<br/>";

//Limpiar espacios
$frase = "         mi contenido        ";
echo $frase;
var_dump($frase);
echo "<br/>";
var_dump(trim($frase));

//Eliminar variables / indices de arreglos
$year = 2020;
unset($year);
var_dump($year);

//Comprobar si una variable esta vacia, no existe o su valor es 0
$texto = true;
if(empty($texto)){
    echo "La variable esta vacia";
}else{
    echo "La variable es: ".$texto;
}
echo "<br/>";

//Contar caracteres de una cadena de texto
$cadena = "12345";
echo strlen($cadena);
echo "<br/>";

//Encontrar caracter
$frase = "La vida es bella";
echo strpos($frase, "vida");
echo "<br/>";

//Reemplazar caracter
$frase = str_replace("vida", "mujer", $frase);
echo $frase;
echo "<br/>";

//Mayusculas y minusculas
echo strtolower($frase);
echo "<br/>";
echo strtoupper($frase);

echo "<hr>";