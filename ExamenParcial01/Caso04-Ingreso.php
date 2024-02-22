<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Parcial 01</title>
</head>
<body>
    <header>
        <h1>CASO 4: PAPELERÍA ONLINE</h1>
    </header>
    <section>
    <form action="Caso04-Ingreso.php" method="POST">
            <table>
                <tr>
                    <td>
                        <label for="nombre">Nombre:</label>
                    </td>
                    <td>
                        <input type="text" name="nombre" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="contrasena1">Contraseña:</label>
                    </td>
                    <td>
                        <input type="password" name="contrasena1" required>
                    </td>
                </tr>     
                <tr>
                    <td>
                        <label for="contrasena2">Confirmar Contraseña:</label>
                    </td>
                    <td>
                        <input type="password" name="contrasena2" required>
                    </td>
                </tr>                
                <tr>
                    <td><br> <!-- Salto de linea -->
                        <input type="submit" name="submit" value="Ingresar">
                    </td>
                    <td><br> <!-- Salto de linea -->
                        <input type="reset" value="Limpiar">
                    </td>
                </tr>
            </table>
        </form>

        <?php
        error_reporting(0);
            $nombreAlmacenado = "Chris";
            $contrasenaAlmacenada = "misamores";

            if (isset($_POST['submit'])) {
                $nombre = $_POST['nombre'];
                $contrasena1 = $_POST['contrasena1'];
                $contrasena2 = $_POST['contrasena2'];

                if ($nombre === $nombreAlmacenado && $contrasena1 === $contrasenaAlmacenada && $contrasena1 === $contrasena2) {
                    echo "<h1>Acceso autorizado</h1>";
                    echo "<button><a href='Caso04-Producto.php'>Ir a Productos</a></button>";
                } else {
                    // Las credenciales no coinciden, muestra un mensaje de error
                    echo "<h1>Acceso denegado</h1>";
                    echo "<p>Contraseña incorrectos. Por favor, intenta nuevamente.</p>";
                }
            }
            
        ?>  

    </section>
    <footer>
        <h6>Todos los derechos reservados @Christofher</h6>
    </footer>
</body>
</html>

