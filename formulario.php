<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Acceso</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form method="post" action="procesar.php">
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" class="form-control" required>
                <input type="checkbox" id="mostrarContrasena"> Mostrar Contraseña
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    
    <script>
        const mostrarContrasena = document.getElementById('mostrarContrasena');
        const contrasenaInput = document.getElementById('contrasena');

        mostrarContrasena.addEventListener('change', function() {
            if (mostrarContrasena.checked) {
                contrasenaInput.type = 'text'; // Cambia el tipo de input a texto para mostrar la contraseña
            } else {
                contrasenaInput.type = 'password'; // Cambia el tipo de input a contraseña para ocultar la contraseña
            }
        });
    </script>
</body>
</html>
