<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de fecha y hora</title>
</head>
<body>
    <header>
        <h1>Funciones de fecha y hora</h1>
    </header>
    <section>
        
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["n"];

        
        }

    ?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="n">Ingrese el número máximo de pares a listar:</label>
        <input type="number" name="n" id="n" required>
        <button type="submit">Listar</button>
    </form>

    <br> <!--- Salto de Linea --->
    <a href="index.php"><button>Volver al menu Principal :D</button></a>
    </section>
    <footer>
        <h6>Todos los derechos reservados @Christofher</h6>
    </footer>
</body>
</html>