<?php


//constante
//contenedor de informacion
//nunca puede variar o redefinirse 

define('nombre','alejandro');
define('web','alejo@.cl');

//PARA LLAMAR A UNA CONSTANTE NO SE UTILIZA EL DOLAR
echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';

//variable se puede modificar
$web = 'alejo@.cl';
echo '<h1>'.web.'</h1>';


//constantes predefinidas

echo PHP_OS;
echo PHP_EXTENSION_DIR;
echo __LINE__;
echo __FILE__;
echo __FUNCTION__;



?>

