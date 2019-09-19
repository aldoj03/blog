<?php require_once 'includes/cabecera.php'; ?> 
<?php require_once 'includes/lateral.php'; ?> 
<?php require_once 'includes/errores.php'; ?>
<?php require_once 'includes/funciones.php';?>

<?php 
$sql_categorias = "SELECT nombre FROM categorias";
$array = mysqli_query($db, $sql_categorias);

$sql_cat_actual = "SELECT * FROM entradas WHERE id = '$_GET[id_post]';";
$array2 = mysqli_fetch_assoc(mysqli_query($db, $sql_cat_actual));
?>

<div id="contenedor">       
 <?php require_once 'includes/lateral.php'; ?>        
                <!--  caja principal -->
                <div id="principal" >
                    <h1>Modifica tu post</h1><br>
                   <?php $contenido = cont_entrada($db,$_GET['id_post']);?>
                    
                    <?php if(!empty($contenido)): ?>                            
                    <article class="entrada">  
                        
                        <form action="save_post.php?accion=modificar&id_post=<?=$_GET['id_post'] ?>" method="post" >
                        
                        <label for="titulo" >Titulo del post:</label>
                        <input type="text" name="titulo" value="<?= $contenido['titulo'] ?>" /><br>
                        
                        <label for="categoria">Nombre de la categoria:</label><br>
                        <select name="categoria">
                            <?php while($row = mysqli_fetch_assoc($array)): ?>
                            <option><?= $row['nombre'] ?></option>
                            <?php endwhile; ?>
                        </select><br>
                        
                       <br> <label for="contenido">Contenido del post:</label>
                       <textarea name="contenido" class="text"  >
                           <?= $contenido['descripcion'] ?>
                       </textarea>
                        
                        <input type="submit" value="hecho" />
                    </form>
                    <?php if(isset($_SESSION['errores_post'])): ?>                  
                    <div id="alerta" class="alerta-error">
                    <?=$_SESSION['errores_post']  ?>  
                     </div>
                    <?php endif; ?>
                    <?php if(isset($_SESSION['correcto_post'])): ?>                  
                    <div id="correcto" class="alerta" >
                    <?=$_SESSION['correcto_post']  ?>  
                     </div>
                    <?php endif; ?>
                     
                    </article>             
                    <?php endif; ?>   
              
                </div>
                <div class="clearfix"></div>
                </div>       
 <?php require_once 'includes/pie.php'; ?>  
<?php borrar_errores() ; ?>
                     