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
<?php
include 'includes/header.php';
?>
    <!-- Content -->
    <div>
        <h2>Esta es la página de inicio</h2>
        <p>Texto de prueba de la página de inicio</p>
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