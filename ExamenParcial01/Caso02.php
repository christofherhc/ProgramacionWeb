<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Parcial 01</title>
</head>
<body>
    <header>
        <h1>CASO 2: FORMULARIO DE PATERNIDAD</h1>
    </header>
    <section>

    <form action="Caso02.php" method="POST">
            <table>
                <tr>
                    <td>
                        <label for="nombre">Nombre:</label>
                    </td>
                    <td>
                        <input type="text" id="nombre" name="nombre" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="sexo">Sexo:</label>
                    </td>
                    <td>
                    <select id="sexo" name="sexo" required>
                        <option value="hombre">Hombre</option>
                        <option value="mujer">Mujer</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="numHijos">Número de hijos:</label>
                    </td>
                    <td>
                        <input type="number" id="numHijos" name="numHijos" min="0" required>
                    </td>
                </tr>
                
                <tr>
                    <td><br> <!-- Salto de linea -->
                        <input type="submit" value="Mostrar frase">
                    </td>
                    <td><br> <!-- Salto de linea -->
                        <input type="reset" value="Limpiar">
                    </td>
                </tr>
            </table>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                
                $nombre = $_POST['nombre'];
                $sexo = $_POST['sexo'];
                $numHijos = $_POST['numHijos'];

                $frase = "";
                if ($sexo === 'hombre' && $numHijos >= '1') {
                    $frase = "El señor $nombre tiene $numHijos hijo(s).";
                } elseif ($sexo === 'hombre' && $numHijos === '0') {
                    $frase = "El señor $nombre no tiene ningun hijo.";
                } elseif ($sexo === 'mujer' && $numHijos >= '1') {
                    $frase = "La señora $nombre tiene $numHijos hijo(s).";
                } elseif ($sexo === 'mujer' && $numHijos === '0') {
                    $frase = "La señora $nombre no tiene ningun hijo.";
                } 

                echo "<h2>Frase:</h2>";
                echo "<p>$frase</p>";

            }
        ?>


    </section>
    <footer>
        <h6>Todos los derechos reservados @</h6>
    </footer>
</body>
</html>