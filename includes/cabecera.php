<?php require_once 'conexion.php'; ?>
<?php require_once 'errores.php'?>;
<?php require_once 'funciones.php';?>      

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        
        <title>Blosito Hermoxito</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/sa.css" />
    </head>
    <body>
        <!-- cabecera -->
        <header id="cabecera">
            <!-- logo -->
            <div id="logo" >
                <a href="index.php"><strong>
                        Blog de cosas</strong>
                </a>
            </div>
            <!-- menu -->           
            <nav id="menu">     
                <?php $variable = list_cat($db); ?>
                <ul>                                           
                    <li>
                        <a href="index.php">Inicio</a>
                    </li> 
                    <?php if(!empty($variable)): ?>
                   <?php while($row = mysqli_fetch_assoc($variable)):?>
                    <li><a href="category.php?id=<?=$row['id'] ?>">  <?= $row['nombre'] ?></a></li>
                   <?php endwhile; ?>
                   <?php endif; ?>
                    <li> 
                        <a href="elegir_dibujo.php">Dibujar</a>
                    </li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>  