<?php

    //Variables superglobales

    //Muestra la dirección del servidor, IP o localhost en este caso:
    echo '<h1>';
    echo $_SERVER['SERVER_ADDR'];
    echo '</h1>';

    //Muestra el nombre del servidor web sobre el que se esta ejecutando PHP:
    echo '<h1>';
    echo $_SERVER['SERVER_NAME'];
    echo '</h1>';

    //Muestra el software sobre el que corre el servidor web:
    echo '<h1>';
    echo $_SERVER['SERVER_SOFTWARE'];
    echo '</h1>';

    //Muestra la información sobre el navegador usado para acceder a este
    //documento web:
    echo '<h1>';
    echo $_SERVER['HTTP_USER_AGENT'];
    echo '</h1>';

    //Muestra la dirección IP del cliente, en este caso localhost:
    echo '<h1>';
    echo $_SERVER['REMOTE_ADDR'];
    echo '</h1>';

?>