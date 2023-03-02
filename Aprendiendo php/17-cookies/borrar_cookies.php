<?php

if($_COOKIES['micookie']){
unset($_COOKIES['micookie']);
setcookie('micookie','', time()-100);
}

header('location:ver_cookies.php');


?>
