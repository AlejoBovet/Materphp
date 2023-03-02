<?php




//inicar la secion
session_start();

//variable local
$variable_normal = "soy una cadena de texto";

// VARIABLE DE SECION
$_SESSION['variable_persistente'] = "hola soy una secion activa";

echo $variable_normal.'<br/>';
echo $_SESSION['variable_persistente'];

?>
