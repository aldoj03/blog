<?php

if(!empty($_POST)){
require_once 'includes/conexion.php';
require_once 'includes/errores.php';
session_start();
borrar_errores();
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
  
$guardar_usuario;

if(count($error)==0){
    echo "correcto";
    $guardar_usuario = true ;

    //cifrado de contraseña
    $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

    //insertar usuario
    $sql_register = "INSERT INTO usuarios VALUES(null,'$nombre', '$apellido','$email', '$password_segura', curdate() ) ";
    $guardar = mysqli_query($db, $sql_register);
    
    if($guardar){
        $_SESSION['completado'] = "el registro se ha completado";
    }
    else{
        $_SESSION['errores']['general'] = mysqli_error($db);
    }
}
else{
  $_SESSION['errores'] = $error;
   
};
header("location: index.php"); 

    

    