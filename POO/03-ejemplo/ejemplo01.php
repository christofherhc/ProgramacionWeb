<?php
    /************************************
     * Programación orientada a objetos *
     ************************************/
    
     //Clase Coche
    class Coche
    {
        //Propiedades
        public $color;
        public $potencia;
        public $velocidad = 0;
        
        //Metodos
        public function acelerar() {
            echo "Acelerando";
        }
        // public function acelerar($velocidad) {
        //     $velocidad = $velocidad + 1;
        // }


    }

    //Instanciando / Creando Objeto
    $miCoche = new Coche;
    //Accediendo a la propiedad color
    $miCoche->color;
    //Accediendo al metodo acelerar()
    $miCoche->acelerar();

    /**
     * El símbolo → (un guión seguido de >) es el que nos permite
     * acceder a las propiedades y métodos del objeto.
     */
?>

<br><br> <!-- Salto de linea doble -->

<?php
    /***************************************************
     * Tus amigas las funciones print_r() y var_dump() *
     ***************************************************/

    /*Imprime todo lo que hay en el objeto*/        
    print_r($miCoche);  
    /*
    Coche Object
    (
        [color] =>
        [potencia] =>
    )

    La función print_r nos muestra que la variable $miCoche es un
    objeto de la clase Coche y que tiene dos propiedades color y
    potencia que tienen valores en blanco.

    */
?>

<br><br> <!-- Salto de linea doble -->

<?php
    
    var_dump($miCoche);

    /*
    
    object(Coche)#1 (2) {
        ["color"]=>
        NULL
        ["potencia"]=>
        NULL
    }

    En primer lugar nos indica que es un objeto de tipo Coche (entre
    paréntesis). El #1 indica que es elprimer objeto instanciado para
    esa clase. El (2) nos dice que el objeto tiene dos propiedades.

    Por último viene el listado de propiedades del objeto. En este
    listado se muestra el valor de cadauno de los elementos. Como en
    nuestro ejemplo no hemos asignado ningún valor a las propiedades
    se muestra NULL.

    */
?>

<br><br> <!-- Salto de linea doble -->

<?php
    /**
     * Si hubiésemos dado un valor al color del coche:
     */

    $miCoche = new Coche;
    $miCoche->color = 'Azul';

    var_dump($miCoche);
    /*
        el resultado hubiese sido:
        object(Coche)#1 (2) {
            ["color"]=>
            string(4) "Azul"
            ["potencia"]=>
            NULL
        }

    En este caso nos indica que la propiedad color es una cadena de
    cuatro caracteres y contiene el valor "Azul".

    Como vemos var_dump() nos da más información acerca del objeto,
    pero print_r() nos lo muestra de manera más resumida y, quizá, 
    más fácil de leer. Como suele ocurrir, es cuestión de gustos 
    (o de lo que necesitemos).

    */
?>
    
<br><br> <!-- Salto de linea doble -->

<?php
    
    /*************************************
     * Cambiar el valor de una propiedad *
     *************************************/

     $miCoche->color = 'Rojo';

     print_r($miCoche);

?>

<br><br> <!-- Salto de linea doble -->

<?php
    
    /*************************************
     * Acceder al valor de una propiedad *
     *************************************/

     echo $miCoche->color;

     // Y, claro está, podemos usarla como una variable normal:
     $color = $miCoche->color;
     echo '<br>'.$color;
?>

<br><br> <!-- Salto de linea doble -->

<?php
    /*************************************
     * Cada objeto tiene sus propiedades *
     *************************************/

     $miCoche = new Coche;
     $tuCoche = new Coche;

     $miCoche->color = 'Rojo';
     $tuCoche->color = 'Azul';

     print_r($miCoche);
     echo "<br>"; //Salto de linea en PHP
     print_r($tuCoche);

    /*
        Coche Object
        (
            [color] => Rojo
            [potencia] =>
        )
        Coche Object
        (
            [color] => Azul
            [potencia] =>
        )

        Como podemos apreciar cada objeto tiene sus propiedades 
        diferentes. Si cambiamos el color a un coche no afectará 
        a los otros coches.
    
    */

?>
    
<br><br> <!-- Salto de linea doble -->

<?php
    /**************************************
     * Valores iniciales de una propiedad *
     *************************************/
    
     /*
        Al principio el coche estrá parado, así que tiene sentido 
        que el valor inicial de $velocidad sea cero:
        
        public $velocidad = 0
    */
    
?>

<br><br> <!-- Salto de linea doble -->

<?php
    /****************************************
     * Cambiar las propiedades desde dentro *
     ****************************************/

?>

<br><br> <!-- Salto de linea doble -->

<?php
    
?>



