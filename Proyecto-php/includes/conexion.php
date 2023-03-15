<?php

//conexion
$servidor = '127.0.0.1';
$usuario = 'root';
$password = '';
$basededatos = 'blog_master';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);


mysqli_query($db, "SET NAMES 'utf8' ");

// iniciar la sesion 
session_start();
