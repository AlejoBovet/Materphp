<!DOCTYPE html>

<html lang="es">
    <head>
        <title>Validacion formualrio php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <h1>Validacion Formulario</h1>
        
        <?php
        
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if($error == 'faltan_datos'){
                echo '<strong style="color:red"> introduece todos los datos en '
                . 'todos los campos del formulario';
            }
        }
        
        ?>
        
        <form action="procesar_formulario.php" method="POST">
            
            <p>
            <label for="nombre">Nombre</label><br/>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"/>
            </p>
            
            <p>
            <label for="apellido">Apellido</label><br/>
            <input type="text" name="apellido" required="required" pattern="[A-Za-z]+"/>
            </p>
            
             <p>
            <label for="edad">Edad</label><br/>
            <input type="number" name="edad" required="required" pattern="[0-9]" />
            </p>
            
             <p>
            <label for="email">Email</label><br/>
            <input type="email" name="email" required="required"/>
            </p>
            
            <p>
            <label for="pass">Contraseña</label><br/>
            <input type="password" name="pass" required="required" />
            </p>
            
            <input type="submit" name="Enviar"/>
            
        </form>
    </body>
</html>







<?php


?>
