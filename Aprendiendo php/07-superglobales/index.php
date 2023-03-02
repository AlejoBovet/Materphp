<?php

//variables superglobales

//variables de servidor 

echo '<h1>';
echo $_SERVER['SERVER_ADDR']; //DIRECION DEL SERVER, SE DEBE ESCRIBIR SIEMPRE EN MAYUSCULA
echo '</h1>';


echo '<h1>';
echo $_SERVER['SERVER_NAME']; //DOMINIO, SE DEBE ESCRIBIR SIEMPRE EN MAYUSCULA
echo '</h1>';

echo '<h1>';
echo $_SERVER['SERVER_SOFTWARE']; //HERRAMIENTAS, SE DEBE ESCRIBIR SIEMPRE EN MAYUSCULA
echo '</h1>';

echo '<h1>';
echo $_SERVER['HTTP_USER_AGENT']; //CLIENTE, SE DEBE ESCRIBIR SIEMPRE EN MAYUSCULA
echo '</h1>';

echo '<h1>';
echo $_SERVER['REMOTE_ADDR']; //IP CLIENTE, SE DEBE ESCRIBIR SIEMPRE EN MAYUSCULA
echo '</h1>';
?>

