<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes en PHP</title>
</head>
<body>
    <!-- Header -->
    <div>
    <h1>Includes en PHP</h1>
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="index.php">Sobre mi</a></li>
        <li><a href="index.php">Contacto</a></li>
    </ul>
    </div>
    <hr>
    <!-- Content -->
    <div>
        <h2>Esta es la página de contacto</h2>
        <p>Texto de prueba de la página de contacto</p>
    </div>
        <hr>
    <!-- Footer -->
    <div>
        <footer>
            Todos los derechos reservados &copy; Marco A. Sánchez <?=date('Y')?>
        </footer>
    </div>
</body>
</html>