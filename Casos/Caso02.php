<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso desarrollado 01</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <header>
        <h3>CASA DE CAMBIOS</h3>
    </header>
    <section>
        <?php
            $empleado = "";
            $horas = 0;
            $costo = 0;
        ?>
        <form action="Caso02.php" method="get">
            <table border="0" cellspacing="0" cellpading="0">
                <tr>
                    <td>Empleado: </td>
                    <td>
                        <input type="text" name="empleado" value=
                            <?php
                                echo $empleado;
                            ?>
                        >
                    </td>
                </tr>
                <tr>
                    <td>Horas trabajadas: </td>
                    <td>
                        <input type="text" name="horas" value=
                            <?php
                                echo $horas;
                            ?>
                        >
                    </td>
                </tr>
                <tr>
                    <td>Tarifa por hora:  </td>
                    <td>
                        <input type="text" name="costo" value=
                            <?php
                                echo $costo;
                            ?>
                        >
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
                <?php
                    error_reporting(0);
                    $empleado = $_GET["empleado"];
                    $horas = $_GET['horas'];
                    $costo = $_GET['costo'];
                ?>

                <br> <!--- Salto de linea --->

                <tr>
                    <td>Empleado: </td>
                    <td>
                        <?php
                            echo $empleado;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Horas trabajadas: </td>
                    <td>
                        <?php
                            echo $horas, " horas";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Tarifa por hora: </td>
                    <td>
                    <?php
                            printf("$ %.2f",$costo);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Sueldo bruto: </td>
                    <td>
                        <?php
                            $sueldo = $horas*$costo;
                            printf("$ %.2f",$sueldo);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Descuento ESSALUD</td>
                    <td>
                        <?php
                            $descuentoE = $sueldo*0.12;
                            printf("$ %.2f",$descuentoE);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Descuento AFP: </td>
                    <td>
                        <?php
                            $descuentoA = $sueldo*0.10;
                            printf("$ %.2f",$descuentoA);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Sueldo Neto: </td>
                    <td>
                        <?php
                            $suendoN = $sueldo-$descuentoA-$descuentoE;
                            printf("$ %.2f",$suendoN);
                        ?>
                    </td>
                </tr>


            </table>
        </form>
    </section>
    <footer>
        <h6>Todos los derechos reservados Chris</h6>
    </footer>
</body>

</html>