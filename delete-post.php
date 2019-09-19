<?php require_once 'includes/conexion.php';
if(!empty($_GET['id_post']) ){
$id_borrar_post = $_GET['id_post'];
$sql_borrar = "DELETE FROM entradas WHERE id = $id_borrar_post";
mysqli_query($db, $sql_borrar);

}
header("Location: index.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

