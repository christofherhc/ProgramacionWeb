<?php

/*
    Escribe un programa que multiplique los 20 primeros numeros 
    naturales.
    Utilizar el bucle While.
*/
$a = 1;
$r = 1;

while ($a <= 20) {
    
    $r = $r*$a;

    $a++; //Incremento
}

echo "La multiplicacion de los ",$a-1," es: ", $r;

?>

<?php

$n = 20;

$s = ($n*($n+1))/2;

echo "La suma de los ",$n," es: ", $s;

?>