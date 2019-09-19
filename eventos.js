
var canvas = document.getElementById("canvas");
var lienzo = canvas.getContext("2d");
var boton = document.getElementById("boton");

canvas.addEventListener("mousedown", empezarMouse);
canvas.addEventListener("mousemove", dibujarMouse);
canvas.addEventListener("mouseup", terminarMouse);
boton.addEventListener("click", guardarImagen);

var xi, yi, xf, yf;
var mouse_clickeado = false;

function empezarMouse(e)
{
	mouse_clickeado = true;

	xi = e.layerX;
	yi = e.layerY;
}

function dibujarMouse(e)
{
	if(mouse_clickeado)
	{
		xf = e.layerX;
		yf = e.layerY;
		dibujarLinea(xi, yi, xf, yf);
		xi = xf;
		yi = yf;
	}
}

function terminarMouse(e)
{
	mouse_clickeado = false;
}



function dibujarLinea(xi, yi, xf, yf)
{
	lienzo.beginPath();
	lienzo.strokeStyle = "rgb(207, 15, 111)";
	lienzo.lineWidth = 3;
	lienzo.moveTo(xi, yi);
	lienzo.lineTo(xf, yf);
	lienzo.stroke();
	lienzo.closePath();
}
