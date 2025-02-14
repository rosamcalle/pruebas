<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Asistencia - Informática</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            text-align: center;
            padding: 10px;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        .btn-submit {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Control de Asistencia y Seguimiento Académico</h1>
    </header>
    <div class="container">
        <h2>Registrar Asistencia</h2>
        <form id="attendanceForm">
            <div class="form-group">
                <label for="studentName">Nombre del Estudiante:</label>
                <input type="text" id="studentName" name="studentName" placeholder="Ingrese el nombre del estudiante" required>
            </div>
            <div class="form-group">
                <label for="status">Estado de Asistencia:</label>
                <select id="status" name="status" required>
                    <option value="Presente">Presente</option>
                    <option value="Ausente">Ausente</option>
                    <option value="Justificado">Justificado</option>
                </select>
            </div>
            <button type="submit" class="btn-submit">Registrar</button>
        </form>

        <h2>Lista de Asistencia</h2>
        <table>
            <thead>
                <tr>
                    <th>Nombre del Estudiante</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody id="attendanceTable">
                <!-- Los registros aparecerán aquí -->
            </tbody>
        </table>
    </div>

    <script>
        document.getElementById("attendanceForm").addEventListener("submit", function (e) {
            e.preventDefault();

            // Obtener datos del formulario
            const studentName = document.getElementById("studentName").value;
            const status = document.getElementById("status").value;

            // Crear una nueva fila
            const table = document.getElementById("attendanceTable");
            const row = table.insertRow();
            const nameCell = row.insertCell(0);
            const statusCell = row.insertCell(1);

            nameCell.textContent = studentName;
            statusCell.textContent = status;

            // Limpiar el formulario
            document.getElementById("attendanceForm").reset();
        });
    </script>
</body>
</html>
/////////////////////////////
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Asistencia - Informática</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            text-align: center;
            padding: 10px;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        .btn-submit {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Control de Asistencia y Seguimiento Académico</h1>
    </header>
    <div class="container">
        <h2>Registrar Asistencia</h2>
        <form id="attendanceForm">
            <div class="form-group">
                <label for="studentName">Nombre:</label>
                <input type="text" id="studentName" name="studentName" placeholder="Ingrese el nombre del estudiante" required>
            </div>
            <div class="form-group">
                <label for="lastNameP">Apellido Paterno:</label>
                <input type="text" id="lastNameP" name="lastNameP" placeholder="Ingrese el apellido paterno" required>
            </div>
            <div class="form-group">
                <label for="lastNameM">Apellido Materno:</label>
                <input type="text" id="lastNameM" name="lastNameM" placeholder="Ingrese el apellido materno" required>
            </div>
            <div class="form-group">
                <label for="sagaCode">Código SAGA:</label>
                <input type="text" id="sagaCode" name="sagaCode" placeholder="Ingrese el código SAGA" required>
            </div>
            <div class="form-group">
                <label for="semester">Semestre:</label>
                <select id="semester" name="semester" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
            <div class="form-group">
                <label for="subject">Materia:</label>
                <input type="text" id="subject" name="subject" placeholder="Ingrese la materia" required>
            </div>
            <div class="form-group">
                <label for="status">Estado de Asistencia:</label>
                <select id="status" name="status" required>
                    <option value="Presente">Presente</option>
                    <option value="Ausente">Ausente</option>
                    <option value="Justificado">Justificado</option>
                </select>
            </div>
            <button type="submit" class="btn-submit">Registrar</button>
        </form>

        <h2>Lista de Asistencia</h2>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Código SAGA</th>
                    <th>Semestre</th>
                    <th>Materia</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody id="attendanceTable">
                <!-- Los registros aparecerán aquí -->
            </tbody>
        </table>
    </div>

    <script>
        document.getElementById("attendanceForm").addEventListener("submit", function (e) {
            e.preventDefault();

            // Obtener datos del formulario
            const studentName = document.getElementById("studentName").value;
            const lastNameP = document.getElementById("lastNameP").value;
            const lastNameM = document.getElementById("lastNameM").value;
            const sagaCode = document.getElementById("sagaCode").value;
            const semester = document.getElementById("semester").value;
            const subject = document.getElementById("subject").value;
            const status = document.getElementById("status").value;

            // Crear una nueva fila
            const table = document.getElementById("attendanceTable");
            const row = table.insertRow();
            row.insertCell(0).textContent = studentName;
            row.insertCell(1).textContent = lastNameP;
            row.insertCell(2).textContent = lastNameM;
            row.insertCell(3).textContent = sagaCode;
            row.insertCell(4).textContent = semester;
            row.insertCell(5).textContent = subject;
            row.insertCell(6).textContent = status;

            // Limpiar el formulario
            document.getElementById("attendanceForm").reset();
        });
    </script>
</body>
</html>