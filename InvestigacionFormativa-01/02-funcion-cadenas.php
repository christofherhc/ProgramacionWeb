<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de cadena</title>
</head>
<body>
    <header>
        <h1>Funciones de cadena</h1>
    </header>
    <section>
        
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["n"];

        
        }

    ?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="n">Ingrese un texto o cadena de textos:</label>
        <input type="text" name="n" id="n" required>
        <button type="submit">Evaluar</button>
    </form>

    <br> <!--- Salto de Linea --->
    <a href="index.php"><button>Volver al menu Principal :D</button></a>
    </section>
    <footer>
        <h6>Todos los derechos reservados @Christofher</h6>
    </footer>
</body>
</html>