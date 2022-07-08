<?php

//Ejercicio 6
//Mostrar una tabla HTML con las tablas de multiplicar del 1 al 10

echo "<table border='1'> <tr>"; //Inicio de la tabla

echo "<tr>"; //Inicio de fila 1 de celdas

for($cabecera = 1; $cabecera <= 10; $cabecera++){ //Se define el numero de cabeceras hasta 10
    echo "<td>Tabla del $cabecera</td>";
}

echo "<tr>"; //Inicio de fila 2 de celdas

for($i = 1; $i <= 10; $i++){ //Se declara variable i como contador que aumentará 1 cada iteración
    echo "<td>";
    
    for($x = 1; $x <= 10; $x++){ //Se declara variable x como contador que aumentará 1 cada iteración 
        echo "$i x $x = ".($i*$x)."<br>"; //Se imprime la multiplicacion de las variables i * x
    }
    
    echo "</td>";
}

echo "</tr>"; //Cierre de fila 2 de celdas

echo "</tr>"; //Cierre de fila 1 de celdas

echo "</table>"; //Fin de la tabla

?>