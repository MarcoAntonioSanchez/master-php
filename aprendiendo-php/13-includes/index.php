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
require_once 'includes/header.php';
?>
    <!-- Content -->
    <div>
        <h2>Esta es la página de inicio</h2>
        <p>Texto de prueba de la página de inicio</p>
    </div>
        <hr>
        <?php 
        var_dump($nombre);
        ?>
    <!-- Footer -->
<?php
require_once 'includes/footer.php';
?>
</body>
</html>