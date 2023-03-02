<?php

/* 

Para mostar el valor de las cokkies; tengo que usar $_cookie;una variabñe superglobal, esun array asociativo

 */

if(isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
}else{
    echo 'no existe la cookie';
}
