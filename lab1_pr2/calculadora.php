<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema #2 - Calculadora PHP</title>
</head>
<body>
    <h2>Laboratorio - Calculadora Básica</h2>

    <form method="post" action="procesador_calculadora.php">
        <label for="numero1">Número 1:</label><br>
        <input type="text" name="numero1" id="numero1" required><br><br>

        <label for="numero2">Número 2:</label><br>
        <input type="text" name="numero2" id="numero2" required><br><br>

        <label for="operacion">Operación:</label><br>
        <select name="operacion" id="operacion" required>
            <option value="sumar">Sumar (+)</option>
            <option value="restar">Restar (-)</option>
            <option value="multiplicar">Multiplicar (×)</option>
        </select><br><br>

        <label for="decimales">Cantidad de decimales a redondear:</label><br>
        <input type="number" name="decimales" id="decimales" value="2" min="0" max="6"><br><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>