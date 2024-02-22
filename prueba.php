<!DOCTYPE html>
<html>
<head>
    <title>Identificación</title>
</head>
<body>
    <h1>Identificación</h1>
    <form method="POST" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="contrasena1">Contraseña:</label>
        <input type="password" name="contrasena1" required><br><br>

        <label for="contrasena2">Confirmar Contraseña:</label>
        <input type="password" name="contrasena2" required><br><br>

        <input type="submit" name="submit" value="Ingresar">
    </form>
</body>
</html>

<?php
$nombreAlmacenado = "usuario";
$contrasenaAlmacenada = "contraseña";

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $contrasena1 = $_POST['contrasena1'];
    $contrasena2 = $_POST['contrasena2'];

    if ($nombre === $nombreAlmacenado && $contrasena1 === $contrasenaAlmacenada && $contrasena1 === $contrasena2) {
        // Las credenciales coinciden, puedes redirigir al usuario a la tienda o mostrar otro contenido
        echo "<h1>Bienvenido, $nombre</h1>";
        echo "<p>Acceso concedido. Puedes continuar explorando la tienda.</p>";
    } else {
        // Las credenciales no coinciden, muestra un mensaje de error
        echo "<h1>Acceso denegado</h1>";
        echo "<p>Nombre de usuario o contraseña incorrectos. Por favor, intenta nuevamente.</p>";
    }
}
?>
