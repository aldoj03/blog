<?php require_once 'includes/cabecera.php'; ?> 
<?php require_once 'includes/funciones.php';?>


        <!-- barra lateral -->
        <div id="contenedor">       
 <?php require_once 'includes/lateral.php'; ?>        
                <!--  caja principal -->
                <div id="principal" >
                    <h1>Ultimas entradas</h1>
                    <?php $contenido = list_ent($db,false)  ?>
                    <?php if(!empty($contenido)): ?>
                    <?php while($row = mysqli_fetch_assoc($contenido)): ?>
                    <article class="entrada">
                        <a href="post.php?id_post=<?= $row['id'] ?> ">
                        <h2> <?= $row['titulo']?> </h2>
                        <span> <?= $row['fecha'].'|'.$row['nombre']?> </span>
                        <p>
                            <?= substr($row['descripcion'], 0, 250)."..." ?>
                        </p>
                        </a>
                    </article>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <div id="ver">
                        <a href="all_entrys.php">ver todas</a>
                </div>
                </div>
                <div class="clearfix"></div>
                </div>
               <?php require_once 'includes/pie.php'; ?>  
           </body>
</html>
