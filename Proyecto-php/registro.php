<?php


if(isset($_POST)){

    require_once 'includes/conexion.php';
    
    if(!isset($_SESSION)){
        session_start();
    }
    

    // recoger los valores del formulario de registro

    //la funcion mysqli_real_escape_string --> interpreta todo lo que se le entrege como STRING 
    $nombre = isset($_POST['nombres']) ? mysqli_real_escape_string($db,$_POST['nombres']) : false;
    $apellido = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, $_POST['email']) : false;
    $password = isset($_POST['password']) ?  mysqli_real_escape_string($db,$_POST['password']) : false;
    
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

        //cifrar la contraseña
        //$password_segura = password_hash(variable,tipo de cifrado, 'cost' veces que cifra la contraseña)
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

        //var_dump($password_segura);
        //var_dump($password); 
        //verificar que la contraseña cifrada coincida con el original
        //password_verify(variuable , variable cifrada) --> funcion para verificar
        //var_dump( password_verify($password,$password_segura));
        //die();

        // insertar usuario en la tabla de  la BBDD

        $sql = "INSERT INTO usuarios  VALUES (null,'$nombre','$apellido','$email','$password_segura', CURDATE())";
        $guardar = mysqli_query($db, $sql);

        if($guardar){
            $_SESSION['completado'] = "el registro  se ha completado con exito";
        }else{
            $_SESSION['errores']['general']= 'Fallo el ususario al guardar !!!';
        }

    }else{
        $_SESSION['errores'] = $errores;
        header('Location: index.php');
    }
}

header('Location: index.php');



