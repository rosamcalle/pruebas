<?php
session_start();

// Datos de usuarios simulados (en lugar de base de datos)
$usuarios = [
    "admin" => ["password" => "12345", "rol" => "Administrador"],
    "docente" => ["password" => "docente123", "rol" => "Docente"],
    "estudiante" => ["password" => "estudiante123", "rol" => "Estudiante"]
];

// Verifica si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"] ?? "";
    $password = $_POST["password"] ?? "";
    $rol = $_POST["rol"] ?? "";

    // Verificar credenciales
    if (isset($usuarios[$usuario]) && $usuarios[$usuario]["password"] === $password && $usuarios[$usuario]["rol"] === $rol) {
        $_SESSION["usuario"] = $usuario;
        $_SESSION["rol"] = $rol;
        header("Location: dashboard.php"); // Redirigir a la página de bienvenida
        exit;
    } else {
        $error = "Usuario, contraseña o rol incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; text-align: center; }
        .login-container { background: white; padding: 20px; width: 300px; margin: 100px auto; border-radius: 10px; box-shadow: 0px 0px 10px gray; }
        input, select { width: 90%; padding: 8px; margin: 10px 0; }
        button { background: blue; color: white; padding: 10px; width: 100%; border: none; cursor: pointer; }
        .error { color: red; }
    </style>
    <script>
        function validarFormulario() {
            let usuario = document.getElementById("usuario").value;
            let password = document.getElementById("password").value;
            let rol = document.getElementById("rol").value;
            if (usuario.trim() === "" || password.trim() === "" || rol.trim() === "") {
                alert("Por favor, complete todos los campos.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST" onsubmit="return validarFormulario();">
            <input type="text" id="usuario" name="usuario" placeholder="Usuario" required><br>
            <input type="password" id="password" name="password" placeholder="Contraseña" required><br>
            <select id="rol" name="rol" required>
                <option value="">Seleccione un rol</option>
                <option value="Administrador">Administrador</option>
                <option value="Docente">Docente</option>
                <option value="Estudiante">Estudiante</option>
            </select><br>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>
