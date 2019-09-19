<?php require_once 'includes/cabecera.php'; ?> 
<?php require_once 'includes/lateral.php'; ?> 
 
<?php require_once 'includes/errores.php'; ?>
<?php require_once 'includes/cabecera.php'; ?> 
<?php require_once 'includes/funciones.php';?>


<div id="contenedor">       
 <?php require_once 'includes/lateral.php'; ?>        
                <!--  caja principal -->
                <div id="principal" >
                <h1>Todos los post</h1>
                    <?php $contenido = list_ent($db,true)  ?>
                    <?php if(!empty($contenido)): ?>
                    <?php while($row = mysqli_fetch_assoc($contenido)): ?>
                    <article class="entrada">
                        <a href="post.php?id_post=<?= $row['id'] ?>">
                        <h2> <?= $row['titulo']?> </h2>
                        <span> <?= $row['fecha'].'|'.$row['nombre']?> </span>
                        <p>
                            <?= substr($row['descripcion'], 0, 250)."..." ?>
                        </p>
                        </a>
                    </article>
                    <?php endwhile; ?>
                    <?php endif; ?>   
              
                </div>
                <div class="clearfix"></div>
                </div>       
 <?php require_once 'includes/pie.php'; ?>  
                     