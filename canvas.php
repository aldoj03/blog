<?php require_once 'includes/cabecera.php'; ?> 
<?php require_once 'includes/funciones.php';?>

   <!-- barra lateral -->
        <div id="contenedor">       
 <?php require_once 'includes/lateral.php'; ?>        
                <!--  caja principal -->
                <div id="principal" style="background:#6F5F5E " >
                    <h1 style="color: #EBD4CC; text-shadow: 3px 3px 3px black ">Mover la barra y pulsar botones para pintar</h1>
             <input type="button" id="1" value="pintar lado izquierdo"  onmousedown="dibujar(1)"  style="width: 150px; background: #6D8C8E" />
             <input type="button" id="2" value="pintar lado derecho" onmousedown="dibujar(2)  " style="width: 150px; background: #6D8C8E" />
            <br/>
            <input type="text" id="tex" style="width: 50px" />
            <input type="range" id="rango" min="1" max="200" value="1"  style="display: block;float: top"/>
                   
                    <canvas id="dibujo" class="canva" height="300" width="400" style="background: #EBD4CC; display: block; margin: 0px auto " ></canvas>
   
                <div class="clearfix"></div>
                </div> 
                 <?php require_once 'includes/pie.php'; ?>  
                <script src="canvas.js"  ></script>
           </body>     
           
</html>
