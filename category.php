<?php require_once 'includes/cabecera.php'; ?> 
<?php require_once 'includes/funciones.php';?>
<?php $category = conseguir_categoria($db,$_GET['id']) ?>
<?php if(!isset($category['id'])): ?>
<?php header("location: index.php")?> 
<?php endif;?>

   <!-- barra lateral -->
        <div id="contenedor">       
 <?php require_once 'includes/lateral.php'; ?>        
                <!--  caja principal -->
                <div id="principal" >
                    
                    <h1>Post de <?= $category['nombre'] ?></h1>
                    <?php $contenido = list_ent($db,false,$_GET['id'])  ?>
                    <?php if(!empty($contenido) && mysqli_num_rows($contenido) >= 1): ?>
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
                    <?php else : ?>
                        <div id="" class="alerta alerta-error" >
                           Aun no hay entradas
                     </div>
                   <?php endif; ?>
                <div class="clearfix"></div>
                </div>
               <?php require_once 'includes/pie.php'; ?>  
           </body>
</html>
