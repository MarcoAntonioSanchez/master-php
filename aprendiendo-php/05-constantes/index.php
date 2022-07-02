<?php

/*
 * Constantes:
 * Es un contenedor de información que no puede varear
*/

//Definiendo un par de constantes, nombres 'nombre' y 'web'.
//Con los valores, 'Marco Sánchez' y 'marcosanchez.com' respectivamente.
define('nombre', 'Marco Sánchez');
define('web', 'marcosanchez.com');

//Imprimiendo las constantes anteriormente declaradas y concatenandolas
//con etiquetas h1 y h3 cada una:
echo '<h1>'.nombre.'</h1>';
echo '<h3>'.web.'</h3>';

?>
