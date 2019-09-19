<?php

session_start();

if(!empty($_SESSION['usuario'])){
    session_destroy ();
}

header('location: index.php');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

