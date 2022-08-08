<?php

/*
Arreglos:
 * Un arreglo (array) es una colección o conjunto de datos bajo 1 único nombre
 * Para acceder a esos valores se puede usar un identificador alfanumerico
*/
echo "<h3>Ejemplo 1</h3>";
echo "<p>Recorriendo arreglos por posición:</p>";

$pelicula = "Batmna";
$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
$cantantes = ['2pac', 'Eminem', 'Snoop Dogg'];
$personas = array(
    'Nombre' => 'Marco A.',
    'Apellidos' => 'Sánchez',
    'Web' => 'www.marcoasanchez.com'
);

var_dump($personas);
echo "<h2>Persona 1:</h2><br/>";
echo "Nombre: ".$personas['Nombre']."<br/>";
echo "Apellidos: ".$personas['Apellidos']."<br/>";
echo "Sitio web: ".$personas['Web']."<br/>";

echo "<br/>".$peliculas[0];
echo "<hr>";

//Recorrer con for
echo "<h3>Ejemplo 2</h3>";
echo "<p>Recorriendo arreglos por posición:</p>";

echo "<h1>Listado de peliculas:</h1>";
echo "<ul>";
for($i = 0; $i < count($peliculas); $i++){
    echo "<li>".$peliculas[$i]."</li>";
}
echo "</ul>";
echo "<hr>";

echo "<h3>Ejemplo 3</h3>";
echo "<p>For each:</p>";

echo "<h1>Listado de cantantes</h1>";
echo "<ul>";

foreach ($cantantes as $cantante) {
    echo "<li>".$cantante."</li>";
}
echo "</ul>";

echo "<hr>";

echo "<h3>Ejemplo 4</h3>";
echo "<p>Arreglos multidimensionales:</p>";

$contactos = array(
    array(
      'nombre' => 'Marco',
      'email' => 'marco@mail.com'
    ),
    array(
      'nombre' => 'Antonio',
      'email' => 'antonio@mail.com'
    ),
    array(
      'nombre' => 'Sánchez',
      'email' => 'sanchez@mail.com'
    ),
);

echo $contactos[1]['nombre'];

foreach($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
}

echo "<hr>";