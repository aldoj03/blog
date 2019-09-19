<?php require_once 'includes/cabecera.php'; ?> 
<?php require_once 'includes/lateral.php'; ?> 
<?php require_once 'includes/redireccion.php'; ?> 
<?php require_once 'includes/errores.php'; ?>


<div id="contenedor">       
 <?php require_once 'includes/lateral.php'; ?>        
                <!--  caja principal -->
                <div id="principal" >
                    <h1>Modifique sus datos aqui!</h1>
                      <form action="save_new_data.php" method="post">
                        
                        <label for="nombre">Nombre</label>
              <?php echo isset($_SESSION['errores']) ? mostrar_error($_SESSION['errores'],'nombre' ) : '';  ?>
                        <input type="text" name="nombre" value="<?= $_SESSION['usuario']['nombre'] ?>" >
                        
                        
                        <label for="apellido">Apellido</label>
              <?php echo isset($_SESSION['errores']) ? mostrar_error($_SESSION['errores'],'apellido' ) : '';  ?>
                        <input type="text" name="apellido" value=<?= $_SESSION['usuario']['apellido'] ?> >
                        
                        
                        <label for="email">Email</label>
                   <?php echo isset($_SESSION['errores']) ? mostrar_error($_SESSION['errores'],'email' ) : '';  ?>
                        <input type="email" name="email" value=<?= $_SESSION['usuario']['email'] ?>  >
                        
                        
                        <label for="password" >Nueva Contraseña</label>
                       <?php echo isset($_SESSION['errores']) ? mostrar_error($_SESSION['errores'],'password' ) : '';  ?>
                        <input type="password" name="password"   /> 
                        
                        
                        <input type="submit" value="guardar" />
                        <!--  alertas de registro -->
                        <?php if(!empty($_SESSION['completado'])): ?>
                   <div class="alerta alerta_exito">
                      <?= $_SESSION['completado'] ?>
                       </div>
                    <?php elseif(isset($_SESSION['errores']['general'])):  ?>
                   <div class="alerta alerta-error">
                       <?= $_SESSION['errores']['general']  ?>
                   </div>
                   <?php endif; ?>
                    </form>
                    <?php borrar_errores() ?>
                </div>       
 <?php require_once 'includes/pie.php'; ?>  
                     