<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>

    <?php
    $nombre = $_POST["nombre"];
    $cedula = $_POST["cedula"];
    $materia = $_POST["materia"];
    $nota1 = floatval($_POST["nota1"]);
    $nota2 = floatval($_POST["nota2"]);
    $nota3 = floatval($_POST["nota3"]);

    $promedio = ($nota1 + $nota2 + $nota3) / 3;

    echo "Nombre del estudiante: " . $nombre . "<br>";
    echo "Cédula: " . $cedula . "<br>";
    echo "Materia: " . $materia . "<br>";
    echo "Nota 1: " . $nota1 . "<br>";
    echo "Nota 2: " . $nota2 . "<br>";
    echo "Nota 3: " . $nota3 . "<br>";
    echo "Promedio: " . round($promedio, 2);
    ?>
</body>
</html>
