<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso desarrollado 03</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <header>
        <h3>VENTA DE PRODUCTO</h3>
    </header>
    <section>
        <?php
            $cantidad = 0;
            $precio = 22.55;
            $compra = 0;
            $descuento = 0;
            $neto=0;
        ?>
        <form action="Caso03.php" method="get">
            <table border="0" cellspacing="0" cellpading="0">
                <tr>
                    <td>Cantidad: </td>
                    <td><input type="text" name="cantidad" value=
                    <?php
                        echo $cantidad;
                    ?>
                    ></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Procesar"><input type="reset" value="Limpiar">
                    </td>
                </tr>

                <?php
                    error_reporting(0);
                    $cantidad = $_GET['cantidad'];
                ?>

                <tr>
                    <td>Precio de producto: </td>
                    <td>
                        <?php
                            printf("$ %.2f",$precio);
                        ?>
                    </td>
                </tr>
                
                <tr>
                    <td>Cantidad: </td>
                    <td>
                        <?php
                            echo($cantidad);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Importe de compra: </td>
                    <td>
                        <?php
                            $compra = $cantidad * $precio;
                            printf("$ %.2f",$compra);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Importe de descuento: </td>
                    <td>
                    <?php
                            $descuento = $compra*0.10;
                            printf("$ %.2f", $descuento);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Importe neto: </td>
                    <td>
                        <?php
                            $neto = $compra-$descuento;
                            printf("$ %.2f", $neto);
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