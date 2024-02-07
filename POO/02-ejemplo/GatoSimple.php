<?php
//Creacion de la clase Gato

class GatoSimple
{
    //Atributos
    public $color;
    public $raza;
    public $sexo;
    public $edad;
    public $peso;

    //Metodos
    public function maulla()
    {
        echo "<br>Miauuuu";
    }
    public function ronronea()
    {
        echo "<br>Mrrrrrrr";
    }

    //Un metodo come peros el gato solo come pescado
    public function come($comida)
    {
        if ($comida == "pescado") {
            echo "<br>Hmmmm, miau miau";
        } else {
            echo "<br>Lo siento, yo solo como pescado";
        }
    }
    //Poner a pelear a dos gatos, solo se van a pelear dos gatos machos

    public function peleaCon(GatoSimple $rival)
    {
        if ($rival->sexo == "hembra") {
            echo "<br>no peleo con gatitas";
        } else {
            echo "<br>ven aqui que te voy a desmadrear";
        }
    }
}

$silvestre = new GatoSimple;
$tom = new GatoSimple;


echo "Hola gatito";
$silvestre->ronronea();
echo "<br>toma tus croquetas";
$silvestre->come("croquetas");
echo "<br>Mejor te doy pescado";
$silvestre->come("pescado");

echo "<br>veo otro gatito";
$tom ->sexo = "macho";

$silvestre->peleaCon($tom);

$alejandra = new GatoSimple;
$alejandra->sexo ="hembra";

$silvestre->peleaCon($alejandra);

