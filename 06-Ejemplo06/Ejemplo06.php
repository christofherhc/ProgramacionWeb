<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de Constantes en PHP</title>
</head>
<body>
<header>
        <h1>Manejo de Constantes en PHP</h1>
    </header>
    <section>


    <?php
    /*
        Por ejemplo. Un valor que no cambia es el simbolo 
        PI cuyo valor es 3.14159...

        Otro ejemplo, es el IGV con el 18% de aumento en los
        pagos a productos y servicios.
    */
       
    define("PI",3.1416); //Declarando una constante y asignando valor
    $radio = 20; //Declarando una variable y asignando
    $areaCirculo = PI * pow($radio,2);
    echo "<br>El área del circulo con radio $radio es $area";

    define("IGV", 0.18); //Declarando una constante
    $valorVenta = 1200.50; //Declarando variable
    $impuesto = $valorVenta * IGV;
    echo "<br>El impuesto a la venta de $valorVenta es $impuesto";

    ?>

    </section>
    <footer>
        <h6>Todos los derechos reservados @Chris</h6>
    </footer>
</body>
</html>