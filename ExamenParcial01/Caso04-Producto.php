<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Parcial 01</title>
</head>
<body>
    <header>
        <h1>Ingreso de Producto</h1>
    </header>
    <section>
    
        <form action="Caso04-Producto.php" method="POST">
            <table>
                <tr>
                    <td>
                        <label for="numero_serie">Número de serie:</label>
                    </td>
                    <td>
                        <input type="text" name="numero_serie" required>
                    </td>
                </tr>
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
                        <label for="precio">Precio:</label>
                    </td>
                    <td>
                        <input type="number" name="precio" step="0.10" min="0" required>
                    </td>
                </tr>                
                <tr>
                    <td><br> <!-- Salto de linea -->
                        <input type="submit" name="submit" value="Guardar Producto">
                    </td>
                    <td><br> <!-- Salto de linea -->
                        <input type="reset" value="Limpiar">
                    </td>
                </tr>
            </table>
        </form>

        <?php
            error_reporting(0);
            if ($_POST['submit']) {
                $numeroSerie = $_POST['numero_serie'];
                $nombre = $_POST['nombre'];
                $precio = $_POST['precio'];

                // Aquí puedes guardar los datos del producto en la base de datos o realizar otras operaciones necesarias

                echo "<h3>Producto Guardado</h3>";
                echo "<b>Nro de serie:</b> $numeroSerie<br>";
                echo "<b>Nombre:</b> $nombre<br>"; 
                echo "<b>Precio:</b> $precio<br>";
                echo "<h4>Ha sido guardado exitosamente.</h4>";
            }
        ?>

    </section>
    <footer>
        <h6>Todos los derechos reservados @Christofher</h6>
    </footer>
</body>
</html>