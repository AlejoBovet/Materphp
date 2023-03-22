<?php 



function mostrarErrores($erroress, $campo){

    $alerta = '';

    if(isset($erroress[$campo]) && !empty($campo)){

        $alerta ="<div class ='alerta alerta-error'>".$erroress[$campo].'</div>';

    }

         

    return $alerta;

}

function borrarErrores(){
    $borrado = false;

    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
        session_unset($_SESSION['errores']);

    }

    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        session_unset($_SESSION['completado']);

    }

    return $borrado;
}

?>