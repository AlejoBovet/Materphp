<?php


/*

FUNCIONES: SERIE DE INSTRUCCIONES QUE SE ACOMULA EN ESTE COMANDO QUE PUEDE SER REUTILIZABLE. 

FUNCION NOMBREDEMIFUCNION(){
    //BLOQUE / CONJUNTO DE INSTRUCCIONES
}

*/


function muestraNombre(){
    echo "victor robles <br/>";
    echo "victor robles <br/>";

}

//invocar funcion

muestraNombre();

echo '<br/>';

//ejemplo 2

function tabla($numero){
    var_dump($numero);
    echo '<h3> tabla de multiplicar del numero: $numero </h3>';
    for($i=1 ; $i<=10; $i++ ){
        
        $operacion = $numero*$i;
        echo "$numero x $i = $operacion <br/> ";
            
    }
}



if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}else{
    echo "no hay numero";
}


//ejemplo 3

echo '<hr/>';

echo '<h1> ejemplo 3 </h1>';


function calculadora($numero1,$numero2,$negrita = false){
    
    //conjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 + $numero2;
    $multiplicacion = $numero1 * $numero2;
    $divicion = $numero1 / $numero2;
    
    $cadenatexto="";
    
    if($negrita !=false){
        $cadenatexto.="<h2>";
    }
    
   $cadenatexto.='suma: '.$suma.'<br/>';
    echo '<br/>';
    $cadenatexto.='resta: '.$resta.'<br/>';
    echo '<br/>';
    $cadenatexto.='multiplicacion: '.$multiplicacion.'<br/>';
    echo '<br/>';
    $cadenatexto.='divicion: '.$divicion.'<br/>';
    
    if($negrita !=false){
        $cadenatexto.="<h2>";
    }
    
    return $cadenatexto;

}

echo calculadora(10, 5,true);
echo calculadora(10, 5,true);

echo '<hr/>';

//return 

echo '<h1> returne </h1>';

function  devuelveelnombre($nombre){
    return "el nombre es: ".$nombre;
}

echo devuelveelnombre("alejo");

echo '<hr/>';

echo '<h1> funcion dentro de otra funcion</h1>';

function getnombre($nombre){
    $texto = "el nombre es: $nombre";
    return $texto;
}



function  devuelveelnombre2($nombre, $apellido){
    $texto = getNombre($nombre)
            ."<br/>".
            "los apellidos son: $apellido";
    
    return $texto;
}

echo devuelveelnombre2("alejo", "bovet");
        


?>
