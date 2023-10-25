<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuarios = array(
        'DavidNghtmr' => md5('David123'), // David123 en MD5
        'WhiteDragun' => md5('White123'), // White123 en MD5
        'DavidLazcano' => md5('Lazcano23'), // Lazcano23 en MD5
        'LuisCruz' => md5('Luis2023'), // Luis2023 en MD5
        'DavidDragun' => md5('Nghtmr') // Nghtmr en MD5
    );

    $usuario = $_POST['usuario'];
    $contrasena = md5($_POST['contrasena']); // Encriptar la contraseña con MD5

    if (array_key_exists($usuario, $usuarios) && $usuarios[$usuario] === $contrasena) {
        echo "Acceso concedido, $usuario.";
    } else {
        echo "Acceso denegado. Por favor, verifica tus credenciales.";
    }
}
?>
