<?php

//BUCLE WHILE
//EVALUA TANTA VECES QUE SEA NECESARIO HASTA QUE CUMPLA CIERTA CONDICION NO SE CUMPLE


$numero=0;
WHILE($numero <= 100){
    
    echo "<p>$numero</p>";
    $numero++;
}

echo "<hr/>";

//tabla de multiplicar recibien parametros por GET

if(isset($_GET['numero'])){
    $numero = (int) $_GET['numero'];//castar datos es cambiar el tipo de dato 
    //para castear en este caso se uso "(int)"
}else{
    $numero = 1;
}

echo '<h1>tabla de multiplicar del  $numero </h1>';


$contador = 0;

while($contador <=10){
    echo "$numero x $contador = " .($numero*$contador)."<br/>";
    $contador++;
}

echo "<hr/>";

echo '<h1>DO WHILE</h1>';

// DO WHILE
//ejecuta primero y despues evalua, si cumple vuelve a ejecutar en caso no contrario no vuelve a ejecutar. 

$edad = 17;
$contador = 1;

do{
    echo "tienes acceso al local $contador <br/>";
    $contador++;
}while($edad >=18 && $contador <=10);

echo "<hr/>";




?>
