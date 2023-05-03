<?php

if (isset($_POST)){
    //CONEXION BASE DE DATOS
    require_once './includes/conexion.php';

    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;

    //array DE ERROREESS

    $errors = array();

    //validar datos antes de guardarlos en la base de datos
    //validar campo aire

    if(!empy($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validado = true;
    
    }else{
        $novedad_validado = falce;
        $errors['nombre'] = "El nombre no es valido";
    }

    if(count($errors) == 0){
        $sql = "INSERT INTO categorias VALUES(NULL, '$nombre');";
        $guardar = mysqli_query($db, $sql);
    }




}

header("Location: index.php"); 