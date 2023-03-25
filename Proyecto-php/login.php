<?php 

//inicar sesion y conexion de bd 

require_once 'includes/conexion.php';
 
//recoger formulario

if(isset($_POST)){
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    //consulta para combprobar las credenciales del usuario

    $sql = "SELECT * FROM usuarios WHERE email='$email'";
    $login = mysqli_query($db,$sql);

    if($login && mysqli_num_rows($login) == 1){

    $usuario = mysqli_fetch_assoc($login);
    //var_dump($usuario);
        

    //comprobar la contraseña

    $verifi = password_verify($password,$usuario['password']);

    if($verifi){

        //utilizar una secion para guardar los datos del ususario logueado
        $_SESSION['usuario'] = $usuario;

        if(isset($_SESSION['error_login'])){
            session_unset($_SESSION['error_login']);
        }


    }else{
    
        //si falla enviar una alerta con el fallo 
        $_SESSION['error_login']="login incorrecto!!";
    }

    } else {
            //mensaje error 
        $_SESSION['error_login']="login incorrecto!!";
        
    }

    
}

//redirigir al index.phpç
header('location:index.php');