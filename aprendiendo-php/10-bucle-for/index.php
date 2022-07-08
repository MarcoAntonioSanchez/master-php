<?php

/*
 * Bucle for
 
for(variable contador, condicion, actualizando contador){
    bloque de instrucciones
}


$resultado = 0;

for($i = 0; $i <= 100; $i++){
    $resultado += $i;
    echo "<p>$resultado</p>";
}

echo "<h1>El resultado es: $resultado</h1>";

echo "<br>"
*/

if(isset($_GET['numero'])){
    
//(int) Para cambiar el tipo de dato de string a entero o int
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}

//Ejemplo de while usando el metodo GET para mostrar la tabla de multiplicación
//correspondiente. URL: /?numero=8
echo "<h1>Tabla de multiplicar del número $numero</h1>";

for($contador = 1; $contador <= 10; $contador++){
    
    if($numero == 45){
        echo "No se pueden mostrar esas operaciones";
      
        //El break sirve para escapar del código o cortar el código
        //si cierta condición se cumple en el medio
        break;
    }
    
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
}

?>