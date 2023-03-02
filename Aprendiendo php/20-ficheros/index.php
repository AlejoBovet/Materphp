<?php

/*
//abrir archivo
$archivo = fopen("fichero_texto.txt","a+");//permiso 'a+' permite escribir desde php

//leer contenido
while(!feof($archivo)){
$contenido = fgets($archivo);
echo $contenido.'<br/>';
}

// Escribir en el archivo
fwrite($archivo,"soy un texto metido desde php" );

//cerrar archivo
fclose($archivo);

*/

//copiar
//copy('fichero_texto.txt','fichero_copiado.txt')or die("error copiar");

//renombrar
//rename('fichero_copiado.txt', 'archivito_recopiado');

//eliminar 
//unlink('archivito_recopiado') or die('error al borrar');


//comprobar si existe un fichero
if(file_exists("fichero_texto.txt")){
    echo 'el archivo existe';
}else{
    echo 'no existe';
}