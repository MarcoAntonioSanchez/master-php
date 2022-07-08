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
     
     //Ejemplo de else if anidados no óptimos y no recomendados
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
     
     //Ejemplo de else is adecuado y recomendado
     if($dia == 1){
         echo "LUNES";
     }elseif($dia == 2){
         echo "MARTES";
     }elseif($dia == 3){
         echo "MIERCOLES";
     }
     
     echo "<br>";
     
     //Alternativa con SWITCH
     $diaHoy = 6;
     
     switch ($diaHoy){
         case 1:
             echo "LUNES";
             break;
         case 2:
             echo "MARTES";
             break;
         case 3:
             echo "MIERCOLES";
             break;
         case 4:
             echo "JUEVES";
             break;
         case 5:
             echo "VIERNES";
             break;
         default:
             echo "FIN DE SEMANA";
     }
     
     echo "<br>";
     
     //Varias condiciones en una sola
     $edad1 = 18;
     $edad2 = 64;
     $edadOficial = 20;
     
     if($edadOficial >= $edad1 && $edadOficial <= $edad2){
         echo "Si esta en edad para trabajar";
     }else{
         echo "No esta en edad para trabajar";
     }
     
     //Operadores lógicos
     // && AND
     // || OR
     // !  NOT
     // and texto
     // or  texto
     
     echo "<br>";
     
     $pais = "USA";
     if($pais == "México" || $pais == "España" || $pais == "Colombia"){
         echo "En este país se habla español";
     }else{
         echo "Aquí no se habla español";
     }
     
     echo "<br>";
     
     //Operador go to
     goto marca;
     echo "<h3>Instrucción 1</h3>";
     echo "<h3>Instrucción 2</h3>";
     echo "<h3>Instrucción 3</h3>";
     echo "<h3>Instrucción 4</h3>";
     
     //No importa que se encuentre de por medio entre el goto y la marca asignada
     //el código correra hasta y a partir de la marca asignada siempre
     
     marca:
        echo "Me he saltado 4 echos";
?>