<?php 



function mostrarErrores($erroress, $campo){

    $alerta = '';

    if(isset($erroress[$campo]) && !empty($campo)){

        $alerta ="<div class ='alerta alerta-error'>".$erroress[$campo].'</div>';

    }

         

    return $alerta;

}

?>