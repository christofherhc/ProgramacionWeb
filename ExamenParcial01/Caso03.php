<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Parcial 01</title>
</head>
<body>
    <header>
        <h1>CASO 3: CALCULADORA DE NEWSLETTER</h1>
    </header>
    <section>
        
    <?php
        $contadorEmail = 0;
        $seguro = "no";
        $precio = 0.0;
    ?>

    <form action="Caso03.php" method="POST">
            <table>
                <tr>
                    <td>
                        <label for="contadorEmail">Número de emails a enviar:</label>
                    </td>
                    <td>
                        <input type="number" name="contadorEmail" id="contadorEmail" min="0" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="seguro">¿Deseas un seguro por cada mensaje?</label>
                    </td>
                    <td>
                        <input type="checkbox" name="seguro" id="seguro" value="si">
                    </td>
                </tr>                
                <tr>
                    <td><br> <!-- Salto de linea -->
                        <input type="submit" name="calcular" value="Calcular precio">
                    </td>
                    <td><br> <!-- Salto de linea -->
                        <input type="reset" value="Limpiar">
                    </td>
                </tr>
            </table>
        </form>

        <?php
            error_reporting(0);

            if ($_SERVER["REQUEST_METHOD"] === "POST") {

                $contadorEmail = $_POST['contadorEmail'];
                $seguro = $_POST['seguro'];

                if ($contadorEmail >= 0 && $contadorEmail <= 2000) {
                    $precio = 0.0;
                } elseif ($contadorEmail >= 2001 && $contadorEmail <= 10000) {
                    $precio = 0.7;
                } elseif ($contadorEmail >= 10001) {
                    $precio = 0.2;
                }

                
                if ($seguro =="si") {
                    $i=0;
                    while ($i<=$contadorEmail) {
                        $precio =+ 0.1;
                        $i++;
                    }
                }

                $totalprecio = $precio * $contadorEmail;

                echo "<h2>Precio total: S/ $totalprecio</h2>";
            }   
        ?>


    </section>
    <footer>
        <h6>Todos los derechos reservados @Christofher</h6>
    </footer>
</body>
</html>