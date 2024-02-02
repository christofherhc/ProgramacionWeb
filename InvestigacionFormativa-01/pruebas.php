
<!DOCTYPE html>
<html>
<head>
  <title>Identificar Tipo de Variable</title>
</head>
<body>


<form method="POST" action="pruebas.php">
    <label for="userInput">Ingrese cualquier cosa:</label>
    <input type="text" id="userInput" name="userInput">
    <input type="submit" value="Enviar">
  </form>

  <br><br> <!--- Salto de Linea doble --->
    
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userInput = $_POST["userInput"];
  
  $tipoVariable = gettype(eval("return $userInput;"));
  
  echo "El tipo de variable ingresada es: " . $tipoVariable;
}
?>

    <br><br> <!--- Salto de Linea doble --->
    
    <a href="index.php"><button>Volver al menu Principal :D</button></a>

</body>
</html>