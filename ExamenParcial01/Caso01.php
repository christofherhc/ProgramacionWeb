<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Parcial 01</title>
</head>
<body>
    <header>
        <h1>Caso 01: GENERADOR DE TICKET</h1>
    </header>
    <section>
        <?php
             $nombre = "";
             $altura = 0;
             $edad = 0;
        ?>

        <form action="Caso01.php" method="GET">
            <table>
                <tr>
                    <td>Nombre:</td>
                    <td>
                        <input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Altura:</td>
                    <td>
                        <input type="number" name="altura" id="altura" value="<?php echo $altura; ?>" min="0"> c.m.
                    </td>
                </tr>
                <tr>
                    <td>Edad:</td>
                    <td>
                        <input type="number" name="edad" id="edad" value="<?php echo $edad; ?>" min="0"> años
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="rechazaJuicio" id="rechazaJuicio" value="si">
                    </td>
                    <td>
                        <label for="rechazaJuicio">¿Rechaza llevarnos a juicio por daños y perjuicios de un mal mantenimiento?</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Procesar">
                    </td>
                    <td>
                        <input type="reset" value="Limpiar">
                    </td>
                </tr>
            </table>
        </form>
        <br><br> <!-- Salto de linea doble -->
        <?php

            error_reporting(0);
            $nombre = $_GET['nombre'];
            $altura = $_GET['altura'];
            $edad = $_GET['edad'];
            $rechazaJuicio = $_GET['rechazaJuicio'];

        ?>

        <br><br> <!-- Salto de linea doble -->

        <?php           
            if ($altura >= 120 && $edad > 16 && $rechazaJuicio == 'si') {
                
                // Generar número único de ticket
                $numTicket = sprintf("%05d", rand(1, 99999));

                echo "¡Felicidades, $nombre! Tu ticket es: \"$nombre, ticket $numTicket\".";
            } else {
                echo "Lo siento, no cumples los requisitos para obtener el ticket.";
            }
        ?>
    </section>
    <footer>
        <h6>Todos los derechos reservados @Christofher</h6>
    </footer>
</body>
</html>