<?php

if(isset($_POST)){

    require_once './includes/conexion.php';

    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
    $categoria = isset ($_POST['categoria']) ? (int)$_POST['categoria'] : false;
    $usuarioid = $_SESSION['usuario']['id'];

    //validacion de errores
    $errores = array();

    if(empty($titulo)){
        $errores['titulo'] = 'El titulo no es valido';

    }

    if(empty($descripcion)){
        $errores['descripcion'] = 'la descripcion no es valida';

    }

    if(empty($categoria) && !is_numeric($categoria)){
        $errores['categoria'] = 'La categoria no es valida';

    }

   

    if(count($errores) == 0){
        $sql = "INSERT INTO entradas VALUES(null, '$usuarioid' , '$categoria', '$titulo', '$descripcion', CURDATE())"; 
        $guardar = mysqli_query($db, $sql);


    }else{
        $_SESSION['errores_entrada'] = $errores;
        header('Location: crear-entradas.php');

    };

    



}

header('Location: index.php');