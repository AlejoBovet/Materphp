<?php

/* 

Arrays -> coleccion de datos que se puede utilizar usando un indice numerico o alfanumerico. 

*/

$pelicula = array('batman','spiderman','harry potter');
//var_dump($pelicula[2]);
//se cuenta a partir del 0

$cantantes = ['lisa', 'aimer','asca'];
//var_dump($cantantes);

//ARRAY ASOCIATIVO 
$personajes = array(
    'nombre' => 'bochi',
    'apellido' => 'the rock',
    'web' => 'kesoku band'
);
//var_dump($personajes['nombre']);

echo '<hr/>';
echo '<h1>Imprimir un dato de la array</h1>';

//imprimir datos de una array
echo $pelicula[0];
echo '<br/>';
echo $cantantes[2];
echo '<br/>';
echo ($personajes['nombre']);



echo '<hr/>';
echo '<h1>Recorrer la array</h1>';

//mostrar todos los elemtos de la array
//recorrer array con el clasico for 

echo '<h2>Recorrer la array con for</h2>';

echo "<ul>";

for($i=0; $i < count($pelicula); $i++){
    
    echo '<li>'.$pelicula[$i].'</li>';
    
}
echo "</ul>";

//recorrer array con el clasico foreach

echo '<br/>';
echo '<h2>Recorrer la array con foreach</h2>';


echo "<ul>";
foreach ($cantantes as $cantante){
    echo '<li>'.$cantante.'</li>';
}
echo "<ul>";

echo '<hr/>';
echo '<h1>Array multidimencionales</h1>'; // arraylist en javascript

$contactos = array(
    array(
        'nombre' => 'jesus',
        'email' => 'jesus@jesus.com'
    ),
    array(
        'nombre' => 'alejo',
        'email' => 'alejo@alejo.com'
    ),
    array(
        'nombre' => 'alonso',
        'email' => 'alonso@alonso.com'
    )
    
);

echo $contactos[1]['nombre'];
echo '<br/>';

foreach ($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
}




