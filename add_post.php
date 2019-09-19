<?php require_once 'includes/cabecera.php'; ?> 
<?php require_once 'includes/lateral.php'; ?> 
<?php require_once 'includes/redireccion.php'; ?> 
<?php require_once 'includes/errores.php'; ?>


<?php 
$sql_categorias = "SELECT nombre FROM categorias";
$array = mysqli_query($db, $sql_categorias);
?>

<div id="contenedor">       
 <?php require_once 'includes/lateral.php'; ?>        
                <!--  caja principal -->
                <div id="principal" >
                    <h1>Crear Post</h1>
                    <form action="save_post.php?accion=crear" method="post" >
                        
                        <label for="titulo" >Titulo del post</label>
                        <input type="text" name="titulo"  /><br>
                        
                        <label for="categoria">Nombre de la categoria:</label><br>
                        <select name="categoria">
                            <?php while($row = mysqli_fetch_assoc($array)): ?>
                            <option><?= $row['nombre'] ?></option>
                            <?php endwhile; ?>
                        </select><br>
                        
                       <br> <label for="contenido">Contenido del post</label>
                       <textarea name="contenido" class="text" ></textarea>
                        
                        <input type="submit" value="crear" />
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
                </div>       
 <?php require_once 'includes/pie.php'; ?>  
                      <?php borrar_errores() ; ?>