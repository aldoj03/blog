<?php

if(!empty($_POST)){
require_once 'includes/conexion.php';
require_once 'includes/errores.php';

borrar_errores();
$id = $_SESSION['usuario']['id'];
$nombre = !empty($_POST['nombre']) ? $_POST['nombre'] : false ;
$apellido = !empty($_POST['apellido']) ? $_POST['apellido'] : false ;
$password = !empty($_POST['password']) ? $_POST['password'] : false ;
$email = !empty($_POST['email']) ? trim($_POST['email']) : false ;
}

$error = array();

if(!preg_match("/^[a-zA-Z- ]+$/" , $nombre ) || !$nombre ){
    $error['nombre']="ingrese nombre en formato correcto";
    
}

if(!preg_match("/^[a-zA-Z- ]+$/" , $apellido ) || !$apellido ){
    $error['apellido']="ingrese apellido en formato correcto";
   
}

if(!$email  ){
    $error['email']="ingrese correo en formato correcto";
    
}

if(!preg_match("/^[a-zA-Z-0-9]+$/" , $password ) || !$password ){
    $error['password']="ingrese la clave en formato correcto";
    
}

$sql = "SELECT id, email FROM usuarios WHERE  email = '$email'";
$isset_email = mysqli_query($db, $sql);
$isset_usser = mysqli_fetch_assoc($isset_email);

$actualizar_usuario;

if(count($error)==0){
    echo "correcto";
    $actualizar_usuario = true ;
    $sql = "SELECT id, email FROM usuarios WHERE  email = '$email'";
$isset_email = mysqli_query($db, $sql);
$isset_usser = mysqli_fetch_assoc($isset_email);

    //cifrado de contraseña
    $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
     if( $isset_usser['id'] == $id || empty($isset_usser) ){
    //insertar usuario
    $sql_update = "UPDATE  usuarios SET"
            . " nombre = '$nombre', apellido = '$apellido', email = '$email', pasword = '$password_segura' "
            . " WHERE email = '$email';  ";
    $guardar = mysqli_query($db, $sql_update);
     
     
    if($guardar){
        $_SESSION['completado'] = "la actualizacion se ha completado";
    }
    else{
        $_SESSION['errores']['general'] = mysqli_error($db);
     }
}
     else{
    
     $_SESSION['errores']['general'] = "usuario ya existe";
     }
}
else{
  $_SESSION['errores'] = $error;
}



header("location: modify_userdata.php");