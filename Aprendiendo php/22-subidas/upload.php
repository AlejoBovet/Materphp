<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == "image/jpg" ||$tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gift" ){
    
    if(!is_dir('image')){
        mkdir('images', 0777);
    }else{
        
    }
    
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
    
    header("Refresh:5; URL=index.php");
    echo '<h1>Imagen subida </h1>';
    
}else{
    header("Refresh:5; URL=index.php");
    echo 'sube una imagen con un formato correcto';
}

