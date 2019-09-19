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
                    <h1>Crear categorias</h1><br><br>
                    <form action="save_category.php" method="post" >
                        <label for="nombre" style="font-size: 20px" >Nombre de la categoria :</label><br>
                        <input type="text" name="nombre" id="texto-cat" />
                        <input type="submit" value="crear"  />
                    </form>
                    <label>Categorias existentes :</label>
                    <ul name="categoria">
                            <?php while($row = mysqli_fetch_assoc($array)): ?>
                            <li><?= $row['nombre'] ?></li>
                            <?php endwhile; ?>
                        </ul><br>
                    <br>
                    <?php if(isset($_SESSION['errores_category'])): ?>                  
                    <div id="alerta" class="alerta-error">
                    <?=$_SESSION['errores_category']  ?>  
                     </div>
                    <?php endif; ?>
                    <?php if(isset($_SESSION['correcto_category'])): ?>                  
                    <div id="correcto" class="alerta" >
                    <?=$_SESSION['correcto_category']  ?>  
                     </div>
                    <?php endif; ?>
                </div>       
 <?php require_once 'includes/pie.php'; ?>  
                <?php borrar_errores() ; ?>
