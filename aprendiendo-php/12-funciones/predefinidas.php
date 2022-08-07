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