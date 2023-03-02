<?php
//conectar a la  BD
$conexion = mysqli_connect("localhost", "root", "", "phpmysql");


//comprobar si la conexion es correcta 

if(mysqli_connect_errno()){
    echo 'la conexion a la BD mysql ha fallado: '. mysqli_connect_error();
} else {
    echo 'conexion echa correctamente';
}


// Consulta para configurar la codificacion de caracteres
mysqli_query($conexion,"SET NAMES 'utf8'");

//consulta select desde php 
$query = mysqli_query($conexion,"SELECT * FROM notas");
//ver detalles
//var_dump ($notas);
//ver datos en array
while ($nota = mysqli_fetch_assoc($query)){
    var_dump($nota);
}

//insertar en la BD desde php
$sql = "INSERT INTO notas VALUES(null,'nota desde php','esto es una nota de php','green')";
$insert= mysqli_query($conexion,$sql);

if($insert){
    echo 'se realizo correctamente';
} else {
    echo 'error en la insercion de datos'. mysqli_error($conexion);
}