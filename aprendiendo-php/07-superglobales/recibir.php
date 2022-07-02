<?php
    
    //Imprimir en pantalla la variable dentro del arreglo, nombre:
    echo "<h1>".$_GET['nombre']."</h1>";
    
    //Imrpimir en pantalla la variable dentro del arreglo, correo:
    echo "<h2>".$_GET['correo']."</h2>";
    
    //Imrpimir en pantalla la variable dentro del arreglo, mensaje:
    echo "<h3>".$_GET['mensaje']."</h3>";

    //Imprimir la información, arrelgo en este caso, para comprender mejor
    //el proceso del metodo GET:
    var_dump($_GET);
    
    ?>