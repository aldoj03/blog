document.addEventListener('keydown',dibujar);
//document.addEventListener('keydown',dibujar);
var lienzo = document.getElementById('dibujo');
var cont = lienzo.getContext('2d');
var x = 150;
var y = 150;
var espacio = 15;

var tecla = {    
    UP : 38,
    DOWN : 40,
    LEFT : 37,
    RIGHT : 39
    };


function prueba(evento){
    console.log(evento);
}


;

 function trazo(xinicial, yinicial, xfinal, yfinal){
    cont.beginPath();
    cont.strokeStyle = "#6D8C8E ";
    cont.lineWidth = 3;
    cont.moveTo(xinicial, yinicial);
    cont.lineTo(xfinal, yfinal);
    cont.stroke();
    cont.closePath(); 
 };     

function dibujar(evento){   
    switch (evento.keyCode) {
        
        case tecla.UP :
            
            trazo(x, y, x, (y-espacio));
            y = y - espacio;
            break;
            
        case tecla.DOWN :
            
            trazo(x, y, x, (y+espacio));
            y = y + espacio;
            break;
            
        case tecla.LEFT :
            
            trazo(x, y, (x - espacio), y);
            x = x - espacio;
            break;    
        
        case tecla.RIGHT :
            
            trazo(x, y, (x + espacio), y);
            x = x + espacio;
            break; 
    }
            
           
    
};