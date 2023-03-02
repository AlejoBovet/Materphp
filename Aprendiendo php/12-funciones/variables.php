<?php

/*

VARIABLES LOCALES: SON LAS QUE SE DEFINEN DENTRO DE UNA FUNCION Y NO PUEDEN SER USADAS FUERA DE LA FUNCION
SOLO ESTAN DISPONIBLE ADENTRO. ANO SER QUE HAGAMOS RETURN. 

VARIABLES GLOBALES: SON LAS QUE SE DECLARAN FUERA DE UNA FUNCION Y ESTAN DISPONIBLE DENTRO Y FUERA DE LAS FUNCIONES

*/




$frace = 'esta en una variable global';

echo $frace;

function holamundo(){
    global  $frace;
    echo "<h1>$frace</h1>";
    
    $year = 'esta variable es local';
    echo "<h1>$year<h1/>";
    
    return $year;
}
echo holamundo();

echo '<hr/>';

//funciones variables

function buenosdias(){
    return "hola";
}

function buenastardes(){
    return "buenas tardes";
}

function buenasnoches(){
    return "konbanwa";
}

$horario =  "tardes";

$mifuncion = "buenas".$horario;
echo $mifuncion();

?>

