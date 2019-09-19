<?php

function mostrar_error($error, $campo){
    $alert = '';
    if(isset($error[$campo]) && !empty($error[$campo]) ){
     $alert = "<div class ='alerta alerta-error'>".$error[$campo].'</div>';     
    } 
    return $alert;
}


function borrar_errores(){
    if(!empty($_SESSION['errores'])){
    $_SESSION['errores'] = NULL;
    unset($_SESSION['errores']);
    }
    if(!empty($_SESSION['errores']['general'])){
    $_SESSION['errores']['general'] = NULL;
    unset($_SESSION['errores']['general']);
    }
    if(!empty($_SESSION['completado'])){
    $_SESSION['completado'] = NULL;
    unset($_SESSION['completado']);
    }
    if(!empty($_SESSION['error_login'])){
      $_SESSION['error_login'] = NULL;
      unset($_SESSION['error_login']);
    } 
    if(!empty($_SESSION['errores_category'])){
      $_SESSION['errores_category'] = NULL;
      unset($_SESSION['errores_category']);
    } 
    if(!empty($_SESSION['correcto_category'])){
      $_SESSION['correcto_category'] = NULL;
      unset($_SESSION['correcto_category']);
    } 
    if(!empty($_SESSION['correcto_post'])){
      $_SESSION['correcto_post'] = NULL;
      unset($_SESSION['correcto_post']);
    } if(!empty($_SESSION['errores_post'])){
      $_SESSION['errores_post'] = NULL;
      unset($_SESSION['errores_post']);
    } 
}


