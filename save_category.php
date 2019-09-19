<?php

if(isset($_POST)){
    require_once 'includes/conexion.php';
    $categoria = isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']) : false;
}

if(!empty($categoria) ){
$sql_insert_category = "INSERT INTO categorias values(null,'$categoria');";
mysqli_query($db, $sql_insert_category);
$_SESSION['correcto_category'] = "categoria creada";
}else{
     $_SESSION['errores_category'] = "error al crear categoria";
}
header("location: add_category.php");



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

