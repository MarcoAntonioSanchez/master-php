<?php

    //Operadores aritmeticos

    //Se declaran 2 variables numericas con valores inicializados:
    $numero1 = 55;
    $numero2 = 33;

    //Se imprime la suma de las variables anteriormente declaradas:
    echo 'suma: '.($numero1+$numero2).'<br>';

    //Se imprime la resta de las variables numero 1 y 2 respectivamente:
    echo 'resta: '.($numero1-$numero2).'<br>';

    //Se imprime la multiplicacion de las variables numero 1 y 2: 
    echo 'multiplicación: '.($numero1*$numero2).'<br>';
    
    //Se imprime la división de las variables numero 1 y 2:
    echo 'división: '.($numero1/$numero2).'<br>';
    
    //Se imprime el restante de la división entre las variables numero 1 y 2:
    echo 'resto: '.($numero1%$numero2).'<br>';
    
    //Operadores de incremento y decremento

    //Se declara variable año con el valor 2019:
    $year = 2019;
    
    //Incremento
    //Se incrementa usando el doble signo ++ la variable year a 2020
    $year++;
    
    //Decremento
    //Se decrementa usando el doble signo -- la variable year a 2019
    $year--;
    
    echo "<h1>$year</h1>";
    
    //Operadores de asignación
    $edad = 55;
    echo $edad.'<br>';
    
    //$edad = $edad + 5;
    echo ($edad+=5).'<br>';
    
    //Resta
    echo ($edad-=5).'<br>';
    
    //Multiplicación
    echo ($edad*=2).'<br>';
    
    //División
    echo ($edad/=3).'<br>';
    
    //Resto
    echo ($edad%=5).'<br>';
    
?>