<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema 4 - Impresión de Cadenas</title>
    <style>
        .texto-destacado { color: #141313; font-family: 'Courier New', monospace; font-size: 1.1em; }
    </style>
</head>
<body>
    <?php
        $cadena1 = "Desarrollo Web";
        $cadena2 = "Laboratorio #1";

        // Concatenación e impresión
        echo "<h2>" . $cadena1 . " - " . $cadena2 . "</h2>";
        echo "<p class='texto-destacado'>Mensaje impreso desde PHP con estilo CSS aplicado.</p>";
    ?>
</body>
</html>