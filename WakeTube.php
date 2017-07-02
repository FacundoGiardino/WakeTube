<?php

/*
 <LICENCE> 
 ---------------------------------------------
 Year 2013
 You are free to use this application, modify and distributing. But u have to use the same license
 Any attribution to Facundo Giardino  (WakeTube Creator)
 ---------------------------------------------
 Año 2013
 Eres libres de usar esta aplicación, modificarla y distribuirla. Pero debes usar la misma licencia
 Cualquier atribución a Facundo Giardino (Creador de WakeTube) 
 ---------------------------------------------
 </LICENCE>
*/

$ip = $_SERVER['REMOTE_ADDR'];
$date = date('Y-m-d H:i:s');
$msg = $date." IP: ".$ip."\n";
$filename = 'ip.txt';
file_put_contents($filename, $msg, FILE_APPEND);

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset=utf-8" />
<title>Wake Up With YouTube!</title>


<script type="text/javascript">
  var verdad = true;
function devuelveHoraActual()
{
    var fechaHora = new Date();
    var horas = fechaHora.getHours();
    var minutos = fechaHora.getMinutes();
    var segundos = fechaHora.getSeconds();
    if(horas < 10) { horas = '0' + horas; }
    if(minutos < 10) { minutos = '0' + minutos; }
    if(segundos < 10) { segundos = '0' + segundos; }
    var horaCompleta = horas+':'+minutos+':'+segundos;
    return horaCompleta;
}

function devuelveTodoActual()
{
	var hora = new Date();
	return hora;
}

function devuelveHoraSeteada()
{
	return document.getElementById('tiempo').value;
}

function muestraReloj() 
{
	var horaActual = this.devuelveTodoActual();
	document.getElementById('reloj').innerHTML = this.devuelveHoraActual();
        var horaSeteada = this.devuelveHoraSeteada();
	var horaSet = horaSeteada.split(":");
  
	var hora = horaActual.getHours(); //recupero la hora actual
	var minuto = horaActual.getMinutes();// recupero los minutos actuales

 	 if(hora == horaSet[0] && verdad== true)
  	{
		if(minuto == horaSet[1] && verdad==true)
		{
			 verdad = false;
			 var url = document.getElementById('URLVideo').value;
		     document.getElementById("dummy").innerHTML= "<object width='640' height='480'><param name='movie' value='http://www.youtube-nocookie.com/v/"+url+"?version=3&amp;hl=es_ES&autoplay=1'></param><param name='allowFullScreen' value='true'></param><param name='allowscriptaccess' value='always'></param><embed src='http://www.youtube-nocookie.com/v/"+url+"?version=3&amp;hl=es_ES&autoplay=1'  autostart='true' type='application/x-shockwave-flash' width='640' height='480' allowscriptaccess='always' allowfullscreen='true'></embed></object>";

			/* document.getElementById("dummy").innerHTML= "<embed src='sonido.mp3' hidden=\"true\" autostart=\"true\" loop=\"false\" />";*/
 		}
  	}
}	


function insertarVideo()
{
    var url = document.getElementById('URLVideo').value;
    if(url != "")
    {
            document.getElementById('URLVideo').disabled="true";
            document.getElementById("dummy").innerHTML= "<object width='640' height='480'><param name='movie' value='http://www.youtube-nocookie.com/v/"+url+"?version=3&amp;hl=es_ES'></param><param name='allowFullScreen' value='true'></param><param name='allowscriptaccess' value='always'></param><embed src='http://www.youtube-nocookie.com/v/"+url+"?version=3&amp;hl=es_ES'  autostart='true' type='application/x-shockwave-flash' width='640' height='480' allowscriptaccess='always' allowfullscreen='true'></embed></object>";

            var video = document.getElementById('dummy').innerHTML;
            return video;
    }
    else
    {
    alert('Debes ingresar el ID de algun video!');	
    }
}

/* -----------------Botones!--------------------------- */
function reset()
{
    document.getElementById('tiempo').value = "00:00:00";
}

function verHoraSeteada()
{
    alert(document.getElementById('tiempo').value);
}

function como()
{
    alert("Ejemplo: http://www.youtube.com/watch?v=4agqOZwzHbU  - El ID seria=[ 4agqOZwzHbU ] - sin los corchetes ");
}
/* -------------------------------------------- */

</script>

<style type="text/css">
    body
    {
        margin:0px;
        padding:0px;
        background-image: linear-gradient(bottom, rgb(99,61,61) 27%, rgb(232,114,114) 64%);
        background-image: -o-linear-gradient(bottom, rgb(99,61,61) 27%, rgb(232,114,114) 64%);
        background-image: -moz-linear-gradient(bottom, rgb(99,61,61) 27%, rgb(232,114,114) 64%);
        background-image: -webkit-linear-gradient(bottom, rgb(99,61,61) 27%, rgb(232,114,114) 64%);
        background-image: -ms-linear-gradient(bottom, rgb(99,61,61) 27%, rgb(232,114,114) 64%);

        background-image: -webkit-gradient(
                linear,
                left bottom,
                left top,
                color-stop(0.27, rgb(99,61,61)),
                color-stop(0.64, rgb(232,114,114))
        );
    }

    #central
    {
        height:180px;
        width:400px;
        border:1px solid black;
        margin:5px auto;
        background-image: linear-gradient(bottom, rgb(192,195,196) 39%, rgb(250,250,250) 70%);
        background-image: -o-linear-gradient(bottom, rgb(192,195,196) 39%, rgb(250,250,250) 70%);
        background-image: -moz-linear-gradient(bottom, rgb(192,195,196) 39%, rgb(250,250,250) 70%);
        background-image: -webkit-linear-gradient(bottom, rgb(192,195,196) 39%, rgb(250,250,250) 70%);
        background-image: -ms-linear-gradient(bottom, rgb(192,195,196) 39%, rgb(250,250,250) 70%);

        background-image: -webkit-gradient(
        linear,
        left bottom,
        left top,
        color-stop(0.39, rgb(192,195,196)),
        color-stop(0.7, rgb(250,250,250))
        );
    }

    #interior
    {
            height:90px;
            width:210px;
            margin:20px auto;
    }

    #dummy
    {
        height:480px;
        width:640px;
        border:1px solid black;
        margin:10px auto;
        background:white;
    }

    #dummy h1
    {
        margin-top: 180px;
        font-size: 80px;
    }

    #contenedor
    {
        width:400px;
        height:50px;
        margin:10px auto;
    }

    #contenedor a
    {
        text-decoration: none;	
    }
</style>

</head>

<body onload="setInterval('muestraReloj(), 1000')">



<h2 align="center">Wake Up With Youtube!</h2>
<h2 align="center"><span id="reloj" >-</span></h2>

 <div id="contenedor">
 		<span><b>Ingresa el ID del video con el que quieres despertarte!</b></span><br/>
        <input type="text" id="URLVideo" placeholder="pon tu video aqui!" />
        <input type="button"  value="Insertar Video" onclick="insertarVideo()" />
         <a href="#" onclick="como()">Como? no entendi...</a>  <br/>
        </div>
<div id="central">
	    <h4 align="center">
	    <span>Pon la Alarma! (primero elije el video)</span><br/>
        <span>(Con que coloques la hora ya esta seteada)</span>
	    </h4>
	        
    <div id="interior">
        <span><b>Setee la hora de la alarma </b></span> <br/>
        <input type="time" id="tiempo" value="00:00:00"  /> <span><b>("hh:mm:ss")</b></span><br/> 
        <input type="button" onclick="reset()" value="Resetear" />
        <input type="button" onclick="verHoraSeteada()" value="Ver Hora" /><br/>
     
        <!--<input type="button" onclick="devuelveHoraActual()" value="Devuelve Hora" />-->
      
       	
	</div>
  
</div>
       
        <div id="dummy">
        <h1 align="center">YouTube</h1>


        <!-- aca va el video y todo lo referente -->
        </div>




</body>
</html>
