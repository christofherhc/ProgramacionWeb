<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de Varialbes en PHP</title>
</head>
<body>
    
    <header>
        <h1>Manejo de Varialbes en PHP</h1>
    </header>
    <section>


    <?php
        /*
            $a = pow(2,5);
            $b = sqrt(4);
        */
    
        $trabajador = "Christofher Hurtado";
        $fechaTrabajador = "12/05/2000";
        $nroHijos = 0;
        $sueldo = 1950.50;
        $activo = false;

        echo "<br> Valor de la variable - Tipo de Variable";
        echo "<br> ---------------------------------------";
        echo "<br>" . $trabajador . " <=> " .gettype($trabajador);
        echo "<br>" . $fechaTrabajador . " <=> " .gettype($fechaTrabajador);
        echo "<br>" . $nroHijos . " <=> " .gettype($nroHijos);
        echo "<br>" . $sueldo . " <=> " .gettype($sueldo);
        echo "<br>" . $activo . " <=> " .gettype($activo);


    ?>

    </section>
    <footer>
        <h6>Todos los derechos reservados @Chris</h6>
    </footer>
  

</body>
</html>