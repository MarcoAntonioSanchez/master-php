<?php

    /*
     * Condicionales
     * 
     * Condicional IF:
     *  if(condición){
     *  Instrucciones
     * }else{
     *  Otras instrucciones
     * }
     
     * Ejemplo de una condicional que se cumple en el if:
     $color = "rojo";
     
     if($color == "rojo"){
         echo "EL COLOR ES ROJO";
     }else{
         echo "EL COLOR NO ES ROJO";
     }
     * 
     * Operadores de comparación
     * == exactamente igual
     * === identico
     * != distinto
     * <> diferente
     * !== no identico
     * < menor que
     * > mayor que
     * <= menor o igual que
     * >= mayor o igual que
     */
     $color = "verde";
     
     if($color == "rojo"){
         echo "EL COLOR ES ROJO";
     }else{
         echo "EL COLOR NO ES ROJO";
     }
     
     echo "<br>";
     
     /*
      * Ejemplo de if comparando el año exactamente igual a 2022
     $year = 2022;
     //Si el valor de la variable year es exactamente igual a 2022
     if($year == 2022){
         //Imprime en pantalla el siguiente texto:
         echo "Estamos en 2022";
         //Para los demas resultados, imprime el siguiente mensaje:
     }else{
         echo "No estamos en el 2022";
     }
     
     //Ejemplo de if usando el comparador menor que
     //para saber si el año es menor al 2023
     $year = 2022;
     //Si el valor de la variable year es menor que 2023
     if($year < 2023){
         //Imprime en pantalla el siguiente texto:
         echo "El año es menor a 2023";
         //Para los demas resultados, imprime el siguiente mensaje:
     }else{
         echo "El año NO es menor a 2023";
     }
     
     Ejemplo de if usando el comparador diferente que:
     $year = 2022;
     //Si el valor de la variable year es distinto a 2021
     if($year != 2021){
         //Imprime en pantalla el siguiente texto:
         echo "El año es distinto a 2021";
         //Para los demas resultados, imprime el siguiente mensaje:
     }else{
         echo "El año no es distinto a 2021";
     }
     */
     
     //Ejemplo de if usando el comparador mayor o igual que:
     $year = 2021;
     //Si el valor de la variable year es distinto a 2021
     if($year >= 2021){     //Declaración de variables para usar dentro de la siguiente condicional:

         //Imprime en pantalla el siguiente texto:
         echo "El año es mayor o igual a 2021";
         //Para los demas resultados, imprime el siguiente mensaje:
     }else{
         echo "El año es menor a 2021";
     }     

     echo "<br>";
     
     $nombre = "Bill Gates";
     $edad = 43;
     $mayoriaEdad = 18;
     $continente = "America";
     $ciudad = "CDMX";
     
     //Ejemplo de if para comprobar si la variable edad es igual o mayor
     //a 18 (Mayoría de edad)
     if($edad >= 18){
         echo $nombre.' Cumple la mayoría de edad<br>';
         if($continente == "America"){
             echo $nombre.' Vive en: '.$ciudad.'<br>';
         }else{
             echo "NO es de America";
         }
     }else{
         echo $nombre.' NO Cumple la mayoría de edad';
     }
     
     $dia = 1;
     
     if($dia == 1){
         echo "Es Lunes";
     }else{
        if($dia == 2){
            echo "Es Martes";
        }else{
            if($dia == 3){
                echo "Es Miercoles";
            }
        }
     }
?>