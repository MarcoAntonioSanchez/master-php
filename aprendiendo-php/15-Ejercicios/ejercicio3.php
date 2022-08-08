<?php

/* 
 * Hacer un programa que compruebe si una variable esta vacia y si esta vacia
 * rellenarla con texto en minusculas y mostrarlo en mayusculas y negritas
 */

$texto = "";

if(empty($texto)){
    $texto = "hola yo soy el relleno";
    $textoAmayus = strtoupper($texto);
    
    echo "<strong>$textoAmayus</strong>";
}else{
    echo "La variable tiene este contenido dentro: ".$texto;
}

