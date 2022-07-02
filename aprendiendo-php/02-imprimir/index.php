<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir Por Pantalla - Master PHP</title>
</head>
<body>
    <h1>Master en PHP</h1>
    <?php

    //Se pueden usar tantos echo como se requiera, no tienen limites.
    //Con echo se pueden imprimir etiquetas de HTML
    echo "<h3>Listado de videojuegos:</h3>";
    echo "<ul>
        <li>GTA</li>
        <li>Smash Bros</li>
        <li>Resident Evil</li>
        <li>Metalslug</li>
        </ul>"; 
    
    //La concatenación esta limitada a las comillas simples, en PHP 8.0.13 no se puede concatenar con comillas dobles.
        echo '<p>Esta es toda'.' - '.'Lista de juegos</p>';

?>
    
    <?="Abreviación con bloque echo de PHP"?>
   
</body>
</html>