<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Formulario en PHP</h1>
    
    //Estructura simple de un formuario HTML con 3 campos
    //Nombre, Email y Mensaje
    
    //Formulario con metodo GET
    //Acción del formulario enviar datos a la pagina: recibir.php
    <form method="GET" action="recibir.php">
        <label for="nombre">Nombre</label> //Campo para el nombre
        <input type="text" name="nombre">
        
        <label for="correo">Email</label> //Campo para el correo
        <input type="email" name="correo">
        
        <label for="mensaje">Mensaje</label> //Campo para el mensaje
        <input type="text" name="mensaje">
        
        <input type="submit" value="Enviar"> //Boton tipo submit para enviar los datos
    </form>
    
</body>
</html>
