<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema 1 - Círculo</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .card { border: 1px solid #ccc; padding: 15px; border-radius: 8px; max-width: 320px; background: #f9f9f9; }
        .form-group { margin-bottom: 12px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="number"] { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { background-color: #0056b3; color: white; border: none; padding: 8px 12px; border-radius: 4px; cursor: pointer; width: 100%; }
        button:hover { background-color: #003d82; }
        .result { margin-top: 10px; font-weight: bold; color: #0056b3; }
    </style>
</head>
<body>
    <div class="card">
        <h3>Cálculo de Círculo</h3>

        <!-- Formulario para ingresar el radio -->
        <form method="POST" action="">
            <div class="form-group">
                <label for="radio">Ingresa el radio (cm):</label>
                <input type="number" step="any" id="radio" name="radio" required placeholder="Ej: 10" value="<?php echo isset($_POST['radio']) ? $_POST['radio'] : ''; ?>">
            </div>
            <button type="submit">Calcular</button>
        </form>

        <?php
            // Validar si el formulario se envió y si viene el campo 'radio'
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['radio'])) {
                $radio = floatval($_POST['radio']);

                if ($radio > 0) {
                    // Fórmulas geométricas correctas
                    $area = pi() * pow($radio, 2);
                    $perimetro = 2 * pi() * $radio;

                    echo "<hr>";
                    echo "<p><strong>Radio ingresado:</strong> $radio cm</p>";
                    echo "<p class='result'>Área: " . number_format($area, 2) . " cm²</p>";
                    echo "<p class='result'>Perímetro: " . number_format($perimetro, 2) . " cm</p>";
                } else {
                    echo "<p style='color: red; margin-top: 10px;'>Por favor, ingresa un radio mayor a 0.</p>";
                }
            }
        ?>
    </div>
</body>
</html>