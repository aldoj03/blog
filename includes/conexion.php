<?php


$server="localhost";
$user="administrador";
$password="administrador";
$database="blog";
$db =  mysqli_connect($server, $user, $password, $database);



mysqli_query($db,"SET NAMES 'utf8'" );

if ( mysqli_errno($db) ){
    echo "error". mysqli_error();
}else{
    echo "conectado a db";
}

if(empty($_SESSION)){
    session_start();
}

