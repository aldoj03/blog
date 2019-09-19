<?php

/* inciar sesion**/ 
require_once 'includes/conexion.php';
require_once 'includes/errores.php';
borrar_errores();
if(!empty($_POST)){
    
    $email = $_POST['email'];
    $password = $_POST['password'];
}

$sql_login = "SELECT * FROM usuarios WHERE '$email' = email ";
$login = mysqli_query($db, $sql_login);

if ( mysqli_errno($db) ){
    echo "error". mysqli_error();
};


if($login && mysqli_num_rows($login) == 1 ){
$usuario = mysqli_fetch_assoc($login);
$verify = password_verify($password, $usuario['pasword']);
if($verify){  
    $_SESSION['usuario']=$usuario;
    
}
else{
    $_SESSION['error_login'] = "login incorrecto";
}
}else{
$_SESSION['error_login'] = "login incorrecto";
}

header('location: index.php');

