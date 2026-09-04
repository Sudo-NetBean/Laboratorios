<?php
if (isset($_POST['pulgadas'])) {
    $pulgadas = $_POST['pulgadas'];

    if (is_numeric($pulgadas)) {
        $centimetros = $pulgadas * 2.54;
    } else {
        $error = "Por favor, ingrese un número válido en las pulgadas.";
    }
} else {
    $error = "No se han recibido datos del formulario.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultado del Procesamiento</title>
</head>
<body>
    <h2>Resultado de la Conversión</h2>

    <?php
    if (isset($error)) {
        echo "<p style='color: red;'>" . $error . "</p>";
    } else {
        echo "<p>Pulgadas ingresadas: <b>" . $pulgadas . " in</b></p>";
        echo "<p>Equivalente en centímetros: <b>" . $centimetros . " cm</b></p>";
    }
    ?>

    <br>
    <a href="Pulgadas_A_Centimetros.php">Volver al Formulario</a>
</body>
</html>