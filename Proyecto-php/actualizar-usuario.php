<?php


if(isset($_POST)){

    require_once 'includes/conexion.php';
    // recoger los valores del formulario de registro

    //la funcion mysqli_real_escape_string --> interpreta todo lo que se le entrege como STRING 
    $nombre = isset($_POST['nombres']) ? mysqli_real_escape_string($db,$_POST['nombres']) : false;
    $apellido = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;//funcion trim para guardar sin espacios
    
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

    /* var_dump($errores);
    die(); */
  
    
    $guardar_usuario = false;
    if(count($errores) == 0){


        $usuario = $_SESSION['usuario'];
        $guardar_usuario = true;

        //comprobar si el email ya existe
        $sql = "SELECT id, email FROM usuarios WHERE email = '$email';";
        $isset_email = mysqli_query($db, $sql);
        $isset_user = mysqli_fetch_assoc($isset_email);

        if($isset_email['id'] == $usuario['id'] || empty($isset_user)){
        // actualñizar usuario en la tabla de  la BBDD

            $usuario = $_SESSION['usuario'];
            $sql = " UPDATE usuarios SET ".
                "nombre = '$nombre', ".
                "apellidos = '$apellido', ".
                "email = '$email' ".
                "WHERE id = ".$usuario['id'].";";
            $guardar = mysqli_query($db, $sql);
        
            if($guardar){
                $_SESSION['usuario']['nombres'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellido;
                $_SESSION['usuario']['email'] = $email;

                $_SESSION['completado'] = "Tus datos se han guardado con exito";
            }else{
                $_SESSION['errores']['general']= 'Fallo al guardar el usuario';
            }
        }else{
            $_SESSION['errores']['general']= 'El usuario ya existes';
        }




    }else{
        $_SESSION['errores'] = $errores;
        header('Location: index.php');
    }


}

header('Location: mis-datos.php');


