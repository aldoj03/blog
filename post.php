<?php require_once 'includes/cabecera.php'; ?> 
<?php require_once 'includes/funciones.php';?>

   <!-- barra lateral -->
        <div id="contenedor">       
 <?php require_once 'includes/lateral.php'; ?>        
                <!--  caja principal -->
                <div id="principal" >
                    <?php $contenido = cont_entrada($db,$_GET['id_post']);  ?>
                  
                    <?php if(!empty($contenido)): ?>                            
                    <article class="entrada">
                        <h1> <?= $contenido['titulo']?> </h1>
                        <br>
                        <span> <?= $contenido['fecha'].'|'.$contenido['nombre']?><br><?=$contenido['nom_categoria'] ?> </span><br>
                      
                        
                        <p style="text-align: justify" >
                          <?=$contenido['descripcion']?>
                        </p>
                     
                    </article>             
                    <?php endif; ?>   
                    <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $contenido['id_usuario'] ): ?>
                    <a href="modify-post.php?id_post=<?=$_GET['id_post'] ?> " class="boton boton-1">Modificar Post</a>
                    <a href="delete-post.php?id_post=<?=$_GET['id_post'] ?>" class="boton boton-1">Borrar post</a>
                    <?php endif; ?>
                <div class="clearfix"></div>
                </div>
               <?php require_once 'includes/pie.php'; ?>  
           </body>
</html>
