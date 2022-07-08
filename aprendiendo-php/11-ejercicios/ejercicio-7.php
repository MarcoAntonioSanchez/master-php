<?php

//Ejercicio 5
//Hacer un programa que muestre todos los numeros entres dos numeros
//que lleguen por url ($_GET)

if(isset($_GET['numero1']) && isset($_GET['numero2'])){ //Revisando si GET tiene o no parametros
$numero1 = $_GET['numero1']; //Asignando el valor GET a variable numero1
$numero2 = $_GET['numero2'];

if($numero1 < $numero2){ //Si numero1 es menor a numero 2
 for($i = $numero1; $i <= $numero2; $i++){ //bucle contador es igual a variable #1, si contador es menor o igual a variable numero 2, contador aumenta 1
     if($i%2 != 0){ //Si el resultado de variable i entre 2 no es cero
         echo "<h4>$i Es impar</h4>"; //Entonces imprime es impar
     }else{ //En cualquier otro caso
         echo "<h4>$i Es par</h4>"; //Imprime es par
     }
}
}else{ //En cualquier otro +otro caso
    echo "<h1>El numero 1 debe ser menor al numero 2</h1>"; //Imprime este mensaje
}   
}

?>