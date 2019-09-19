<?php require_once 'includes/cabecera.php'; ?> 
<?php require_once 'includes/funciones.php';?>

   <!-- barra lateral -->
        <div id="contenedor">       
 <?php require_once 'includes/lateral.php'; ?>        
                <!--  caja principal -->
                <div id="principal"  style="background:#6F5F5E" >
                    <h1 style="color:rgb(207, 15, 111);">Usa el mouse para pintar</h1>
                    <canvas id="canvas" class="canva" height="400" width="700" style="margin-left: 13px;margin-top: 10px " ></canvas>
                   
                  
                <div class="clearfix"></div>
                </div> 
                 <?php require_once 'includes/pie.php'; ?>  
                <script src="eventos.js"  ></script>
           </body>     
           
</html>
