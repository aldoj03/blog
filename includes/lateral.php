

<aside id="sidedebar">
    <?php if(!empty($_SESSION['usuario'])) :  ?>
    <div id="usuario-logueado" class="bloque">
        <strong>bienvenido, <?=$_SESSION['usuario']['nombre']  ?>  </strong>
        <a href="add_post.php" class="boton boton-1">añadir post</a>
        <a href="add_category.php" class="boton boton-2">añadir categoria</a>
        <a href="modify_userdata.php" class="boton boton-3">modificar datos</a>
        <a href="logout.php" class="boton boton-4">cerrar sesion</a>
    </div>
    <?php endif; ?>
    <?php if(empty($_SESSION['usuario'])) :  ?>
                <div id="login" class="bloque">
                    <h3>Ingresar</h3>
                    <?php if(!empty($_SESSION['error_login'])) :  ?>
    <div id="alerta-error" class="alerta-error">
         <?=$_SESSION['error_login']  ?>  
    </div>
    <?php endif; ?>
                    <form action="login.php" method="post">     
                        <label for="email">Email</label>
                        <input type="email" name="email">
                        
                        <label for="password" >Contraseña</label>
                        <input type="password" name="password" /> 
                        
                        <input type="submit" value="ingresar" />
                    </form>
                </div>
    <?php endif; ?>
   
    <?php if(empty($_SESSION['usuario'])) :  ?>
                <div id="register" class="bloque">
                    <h3>Registrarse</h3>
  
                    <form action="register.php" method="post">
                        
                        <label for="nombre">Nombre</label>
              <?php echo isset($_SESSION['errores']) ? mostrar_error($_SESSION['errores'],'nombre' ) : '';  ?>
                        <input type="text" name="nombre">
                        
                        
                        <label for="apellido">Apellido</label>
              <?php echo isset($_SESSION['errores']) ? mostrar_error($_SESSION['errores'],'apellido' ) : '';  ?>
                        <input type="text" name="apellido">
                        
                        
                        <label for="email">Email</label>
                   <?php echo isset($_SESSION['errores']) ? mostrar_error($_SESSION['errores'],'email' ) : '';  ?>
                        <input type="email" name="email">
                        
                        
                        <label for="password" >Contraseña</label>
                       <?php echo isset($_SESSION['errores']) ? mostrar_error($_SESSION['errores'],'password' ) : '';  ?>
                        <input type="password" name="password" /> 
                        
                        
                        <input type="submit" value="registrar" />
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
    <?php endif;?>
            </aside>