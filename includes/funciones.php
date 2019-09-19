<?php

function  list_cat($database){
$sql_cat = "SELECT * FROM categorias order by id asc limit 4 ";
$categorias = mysqli_query($database, $sql_cat);
$cat = array();
if($categorias && mysqli_num_rows($categorias) >= 1 ){
$cat = $categorias;
}
return $cat;
}

function  conseguir_categoria($database, $id){
$sql_cat = "SELECT * FROM categorias WHERE id = $id ";
$categorias = mysqli_query($database, $sql_cat);
$cat = array();
if($categorias && mysqli_num_rows($categorias) >= 1 ){
$cat = mysqli_fetch_assoc($categorias);
}
return $cat;
}

function  list_ent($database,$limit , $categoria = null){
$sql_ult_ent = "SELECT e.id, u.nombre, e.titulo, c.nombre AS nom_categoria, e.descripcion,e.fecha  FROM entradas e
          INNER JOIN categorias c ON e.categoria_id = c.id
          INNER JOIN usuarios u ON  e.usuario_id = u.id";
if(!empty($categoria) ){
    $sql_ult_ent .= " WHERE e.categoria_id = $categoria ";
}
$sql_ult_ent .= " ORDER BY e.id DESC";
    
if($limit == false){
    $sql_ult_ent .= " Limit 4";
}
$ult_entradas = mysqli_query($database, $sql_ult_ent);
$ent = array();
if($ult_entradas && mysqli_num_rows($ult_entradas) >= 1 ){
$ent = $ult_entradas;
}
return $ent;
}


function cont_entrada($database,$categoria){
    $sql = "SELECT e.id, u.nombre, e.titulo, c.nombre AS nom_categoria, e.descripcion,e.fecha, u.id AS id_usuario  FROM entradas e
          INNER JOIN categorias c ON e.categoria_id = c.id
          INNER JOIN usuarios u ON  e.usuario_id = u.id WHERE e.id = $categoria";
    $resultado = mysqli_query($database,$sql);
    $resultado = mysqli_fetch_assoc($resultado);
    return $resultado;
}



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

