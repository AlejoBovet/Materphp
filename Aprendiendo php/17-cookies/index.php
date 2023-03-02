<?php


//crear cookie 
//estructura cookie
//setcookie("nombre","valor que solo puede ser texto", caducidad, ruta, dominio);


//cookie basica
setcookie("micookie", "valor de mi galleta");


//cookie con expiracion
setcookie("unaño", "vivo un año", time()+(60*60*24*356));
?>


<a href="ver_cookies.php">ver las cookies</a>