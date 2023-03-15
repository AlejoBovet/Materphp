<?php
session_start();
if(isset($_POST)){
    // recoger los valores del formulario de registro
    $nombre = isset($_POST['nombres']) ? $_POST['nombres'] : false;
    $apellido = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;
    
    //Array de errores
    $errores = array();
    
    //validar los datos antes de guardalos en la base de datos
    
    //validar campo nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validate = true;
    }else{
        $nombre_validate = false;
        $errores['nombres'] = "el nombre no es valido";
    }
    
    //validar campo apellido
    if(!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido)){
        $apellido_validate = true;
    }else{
        $apellido_validate = false;
        $errores['apellidos'] = "el apellido no es valido";
    }
    
    //validar campo email
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validate = true;
    }else{
        $email_validate = false;
        $errores['email'] = "el email no es valido";
    }
    
     //validar campo password
    if(!empty($password)){
        $password_validate = true;
    }else{
        $password_validate = false;
        $errores['password'] = "la contraseña esta vacia";
    }
    
    $guardar_usuario = false;
    if(count($errores) == 0){
        //insertar usuario en la tabla de la bbdd
        $guardar_usuario = true;
        
    }else{
        $_SESSION['errores'] = $errores;
        header('Location: index.php');
    }
    
    
    
    
}



