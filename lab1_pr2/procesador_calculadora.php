<?php
$num1 = $_POST['numero1'] ?? null;
$num2 = $_POST['numero2'] ?? null;
$operacion = $_POST['operacion'] ?? null;
$decimales = isset($_POST['decimales']) ? (int)$_POST['decimales'] : 2;

$error = null;
$resultado = null;

if ($num1 !== null && $num2 !== null && is_numeric($num1) && is_numeric($num2)) {
    $num1 = (float)$num1;
    $num2 = (float)$num2;

    switch ($operacion) {
        case 'sumar':
            $resultado_raw = $num1 + $num2;
            $nombre_operacion = "Suma";
            $simbolo = "+";
            break;
        case 'restar':
            $resultado_raw = $num1 - $num2;
            $nombre_operacion = "Resta";
            $simbolo = "-";
            break;
        case 'multiplicar':
            $resultado_raw = $num1 * $num2;
            $nombre_operacion = "Multiplicación";
            $simbolo = "×";
            break;
        default:
            $error = "Operación no válida seleccioanda.";
            break;
    }

    if ($error === null) {
        // Redondeo de decimales según el número indicado por el usuario
        $resultado = round($resultado_raw, $decimales);
    }
} else {
    $error = "Por favor ingrese valores numéricos válidos en ambos campos.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Calculadora</title>
</head>
<body>
    <h2>Resultado de la Operación</h2>

    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php else: ?>
        <p><b>Operación realizada:</b> <?php echo $nombre_operacion; ?></p>
        <p><b>Expresión:</b> <?php echo "$num1 $simbolo $num2"; ?></p>
        <p><b>Resultado (redondeado a <?php echo $decimales; ?> decimales):</b> 
           <span style="font-size: 18px; color: green;"><b><?php echo $resultado; ?></b></span>
        </p>
    <?php endif; ?>

    <br>
    <a href="calculadora.php">Realizar otra operación</a>
</body>
</html>