var lienzo = document.getElementById("dibujo");
var ctx = lienzo.getContext('2d');
var rango = document.getElementById("rango");
rango.addEventListener('change',dibujar);
console.log(rango.value);
var lineas = rango.value;
var t = document.getElementById("tex");


 function trazo(xinicial, yinicial, xfinal, yfinal){
    ctx.beginPath();
    ctx.strokeStyle = "#d55c5a";
    ctx.moveTo(xinicial, yinicial);
    ctx.lineTo(xfinal, yfinal);
    ctx.stroke();
    ctx.closePath(); 
 };     

 
 function dibujar(op){
   
     lineas = rango.value;
     var x = 280; 
     var y = 75 ;
     var lineas_circulo = lineas;
 
   var espacio = 2000000/lineas;
     console.log(rango.value);
     
     if(op==1){
        for(l=1;l<=lineas_circulo;l++){
           x = (75*Math.sin(espacio*l)+140);
           y = (70*Math.cos(espacio*l)+80);
           trazo(200,299,x,y);
           t.value = lineas;
        }
    }
     if(op==2){
            for(l=1;l<=lineas_circulo;l++){
                x = (70*Math.sin(espacio*l)+ 270);
                y = (70*Math.cos(espacio*l)+80);
                trazo(200,299,x,y); 
                t.value = lineas;
        }
     } 
 }     
     
 
