<?php

//una variable es un contenedor de informacion
$mi_primera_variable='hola mundo desde una varibale';
$numero = 44;
$verdadero = true;

//cuando se vuelve a definir por segunda vez una variable, se sustituye el primer valor 
//por el ultimo y este es el que se muestra en pantalla

$numero = 77;

echo '<h1>'.$mi_primera_variable.'</h1>';
echo $numero.'<br>';

// en este caso la variable se mando a imprimir antes de que se definiera de nuevo la variable
//por eso se muestran los 2 numeros en patalla

$numero = 120;

echo $numero;
        
?>
