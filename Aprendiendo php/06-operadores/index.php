<?php


//Operadores

$numero1 = 55;
$numero2 = 33;

echo 'suma: '.($numero1+$numero2).'<br/>';
echo 'resta: '.($numero1-$numero2).'<br/>';
echo 'multiplicacion: '.($numero1*$numero2).'<br/>';
echo 'divicion: '.($numero1/$numero2).'<br/>';
echo 'resto: '.($numero1%$numero2).'<br/>';

//operadores de incremento y decremento

$year = 2019;
$year++;//incremneto
echo '<h1>'.$year.'</h1>'.'<br/>';
$year--;//decremento
echo '<h1>'.$year.'</h1>';
++$year;//pre-incremento
echo '<h1>'.$year.'</h1>'.'<br/>';
--$year;//pre-decremento
echo '<h1>'.$year.'</h1>'.'<br/>';


//operadores de asignacion
$edad = 55;

echo $edad.'<br/>';

// $edad = $edad + 5
echo ($edad+=5);



?>

