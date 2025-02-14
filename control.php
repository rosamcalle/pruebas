<?php
session_start();

// Archivo donde se almacenarán las asistencias
$archivo_asistencias = 'asistencias.json';

// Cargar asistencias existentes
$asistencias = file_exists($archivo_asistencias) ? json_decode(file_get_contents($archivo_asistencias), true) : [];

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"] ?? "";
    $codigo_saga = $_POST["codigo_saga"] ?? "";
    $materia = $_POST["materia"] ?? "";
    $semestre = $_POST["semestre"] ?? "";
    $fecha = date("Y-m-d H:i:s");
    
    if (!empty($nombre) && !empty($codigo_saga) && !empty($materia) && !empty($semestre)) {
        $asistencias[] = [
            "nombre" => $nombre,
            "codigo_saga" => $codigo_saga,
            "materia" => $materia,
            "semestre" => $semestre,
            "fecha" => $fecha
        ];
        file_put_contents($archivo_asistencias, json_encode($asistencias, JSON_PRETTY_PRINT));
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Asistencias</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; text-align: center; }
        .container { background: white; padding: 20px; width: 400px; margin: 50px auto; border-radius: 10px; box-shadow: 0px 0px 10px gray; }
        input, select { width: 90%; padding: 8px; margin: 10px 0; }
        button { background: green; color: white; padding: 10px; width: 100%; border: none; cursor: pointer; }
        table { width: 80%; margin: 20px auto; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: center; }
    </style>
    <script>
        function validarFormulario() {
            let nombre = document.getElementById("nombre").value;
            let codigo = document.getElementById("codigo_saga").value;
            let materia = document.getElementById("materia").value;
            let semestre = document.getElementById("semestre").value;
            if (nombre.trim() === "" || codigo.trim() === "" || materia.trim() === "" || semestre.trim() === "") {
                alert("Por favor, complete todos los campos.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Registro de Asistencia</h2>
        <form method="POST" onsubmit="return validarFormulario();">
            <input type="text" id="nombre" name="nombre" placeholder="Nombre del Estudiante" required><br>
            <input type="text" id="codigo_saga" name="codigo_saga" placeholder="Código SAGA" required><br>
            <input type="text" id="materia" name="materia" placeholder="Materia" required><br>
            <select id="semestre" name="semestre" required>
                <option value="">Seleccione un semestre</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select><br>
            <button type="submit">Registrar Asistencia</button>
        </form>
    </div>
    <h2>Asistencias Registradas</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Código SAGA</th>
            <th>Materia</th>
            <th>Semestre</th>
            <th>Fecha</th>
        </tr>
        <?php foreach ($asistencias as $asistencia) { ?>
            <tr>
                <td><?= htmlspecialchars($asistencia["nombre"]) ?></td>
                <td><?= htmlspecialchars($asistencia["codigo_saga"]) ?></td>
                <td><?= htmlspecialchars($asistencia["materia"]) ?></td>
                <td><?= htmlspecialchars($asistencia["semestre"]) ?></td>
                <td><?= htmlspecialchars($asistencia["fecha"]) ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>