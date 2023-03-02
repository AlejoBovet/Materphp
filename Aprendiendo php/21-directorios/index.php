<?php

//crear carpeta/directorio
if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta', 0777) or die('no se puede crear carpeta');
}else{
    echo 'ya existe la carpeta';
}
//mkdir('mi_carpeta', 0777)or die('no se puede crear la carpeta');

//borrar directorio
//rmdir('mi_carpeta');

//recorrer contenido del directorio
if($gestor = opendir('./mi_carpeta')){
    while(false !== ($archivo = readdir($gestor))){
        echo $archivo;
    }
}