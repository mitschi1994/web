   <title>Correos - MITSMAIL</title>
 </head>
 <body>
	<header id="header">
		<form action="/CodeIgniter/usuario/salir" method="post" accept-charset="utf-8">
 			<input id ="btnsalir" type="submit" value="Salir" class="btn btn-primary btn-lg"/>
 		</form>
		<h1 id="costado">MITSMAIL</h1>
		
	</header>
	<section id="seccion_izquierda">
		<form action="/CodeIgniter/usuario/crearcorreo" method="post" accept-charset="utf-8">
 			<input id ="btncrear" type="submit" value="Crear" class="btn btn-primary btn-lg"/>
 		</form>
 	</section>
 	<div class="contenedor">
        <div class="titulo">Buzón</div>
        <div id="pestanas">
            <ul id="lista" onclick=	"/CodeIgniter/usuario/correo">
                <li id="pestana1"><a href='javascript:cambiarPestanna(pestanas,pestana1);'>Salida</a></li>
                <li id="pestana2"><a href='javascript:cambiarPestanna(pestanas,pestana2);'>Enviados</a></li>
            </ul>
        </div>
 
        <body onload="javascript:cambiarPestanna(pestanas,pestana1);">
 
        <div id="contenidopestanas">
            <div id="cpestana1">
            <form action="/CodeIgniter/usuario/eliminarcorreo" method="post" accept-charset="utf-8">
                <?php foreach ($correosa as $correo) { ?>
                
                <tr>
                	<td>

                	<input name="checkbox[]" type="checkbox" id="checkbox[]" value=> <?php echo $correo->asunto; ?>
                	<input type="hidden" name="id" value=> <?php $correo->id; ?>
                	<br>
                	</td>
                	</tr>
                <?php } ?>
            </div>
            <input id = "btneliminar" type="submit" value="eliminar" id = "crear" class="btn btn-primary"/>
            </form>
            <form action="/CodeIgniter/usuario/eliminarcorreo" method="post" accept-charset="utf-8">
            <div id="cpestana2">
                <?php foreach ($correoenv as $correo) {?>
                	<tr>
                	<td>
                	<input name="checkbox[]" type="checkbox" id="checkbox[]" value=> <?php echo $correo->asunto; ?>
                	<?php $idcorreo = $correo->id ?>
                	<br>
                	</td>
                	</tr>
                	
                <?php } ?>
                <input id = "btneliminar" type="submit" value="eliminar" id = "crear" class="btn btn-primary"/>
                	</form>
            </div>
    </div>

 </body>
 
</html>
