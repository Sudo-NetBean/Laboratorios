<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema 5 - Formulario</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { background: #f4f4f9; padding: 20px; border-radius: 5px; max-width: 300px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"], input[type="number"] { width: 100%; padding: 8px; margin-bottom: 10px; box-sizing: border-box; }
        input[type="submit"] { background: #007bff; color: white; border: none; padding: 10px; width: 100%; border-radius: 3px; cursor: pointer; }
        .respuesta { margin-top: 15px; padding: 10px; background: #e2e3e5; border-radius: 3px; }
    </style>
</head>
<body>

    <form method="POST" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" min="0" required>

        <input type="submit" value="Enviar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = htmlspecialchars($_POST['nombre']);
            $edad = (int)$_POST['edad'];

            echo "<div class='respuesta'>";
            echo "<p>Hola <strong>$nombre</strong>, tienes <strong>$edad</strong> años.</p>";
            
            // Validación de mayoría de edad opcional (Valor Agregado)
            if ($edad >= 18) {
                echo "<p>Status: Mayor de edad.</p>";
            } else {
                echo "<p>Status: Menor de edad.</p>";
            }
            echo "</div>";
        }
    ?>

</body>
</html>