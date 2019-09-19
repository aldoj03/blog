<?php require_once 'includes/cabecera.php'; ?> 
<?php require_once 'includes/funciones.php';?>

   <!-- barra lateral -->
        <div id="contenedor">       
 <?php require_once 'includes/lateral.php'; ?>        
                <!--  caja principal -->
                <div id="principal" style="background:#6F5F5E " >
                    <h1 style="color:rgb(65, 174, 182); text-shadow: 3px 3px 3px black">Usa las flechas para dibujar</h1>
                   
                    <canvas id="dibujo" class="canva" height="300" width="700" style="background: #EBD4CC" ></canvas>
   
                <div class="clearfix"></div>
                </div> 
                 <?php require_once 'includes/pie.php'; ?>  
                <script src="canvas_teclas.js"  ></script>
           </body>     
           
</html>
