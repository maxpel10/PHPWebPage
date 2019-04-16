<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Emerald 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120902

-->
<?php extract($_GET); extract($_POST);?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Laboratorio Programaci&oacute;n III</title>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper" class="container">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Usuarios</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="index.php">Homepage</a></li>
				<li><a href="agregar.php">Nuevo</a></li>
				<li><a href="listar.php">Listar</a></li>
				<li><a href="borrar.php">eliminar</a></li>
			</ul>
		</div>
	</div>
	<div><img src="images/img03.png" width="1000" height="40" alt="" /></div>
	</div>
	<!-- end #header -->
	<div id="page">
        		<div id="content">
			       <div class="post">
				      <h2>Sistema de Administraci&oacute;n de Usuarios</h2>
				      <p class="meta"><span class="date"><?php echo date("d - m - Y"); ?></span></p>
				      <div style="clear: both;">&nbsp;</div>
				      <div class="entry">
                        <p>Crear el c&oacute;digo para agregar un usuario.<br>
						Se deber&aacute; mostrar un formulario en el que se pidan los siguientes datos del usuario:</p>
						<ol>
						  <li>Nombre</li>
						  <li>Apellido</li>
						  <li>Sexo</li>
						  <li>e-mail</li>
						  <li>Direcci&oacute;n</li>
						  <li>Nick</li>
						  <li>Tel&eacute;fono</li>
						</ol>
						<p>Los datos deben ser almacenados en el archivo de texto <i>usuarios.txt<i/> con el siguiente formato:<br>
						< nombre >,< apellido >,< e-mail >,< Direccion >,< Nick >,< Telefono >\n
						<p>
                        <p><strong>Nota: </strong>Los datos deben ser validados de manera que ninguno debe estar en blanco (todos son obligatorios).
						<h2>Ejemplo de Formulario y c&oacute;mo trabajar:</h2>
						<p>Formulario de carga de usuarios.</p>
                        <?php if(!isset($enviar)){ ?>
					        <form action="agregar.php" method="post">
                             Nombre: <input type="text" name="nombre" /><br>
                             Apellido: <input type="text" name="apellido" /><br>
                             <input type="submit" value="Enviar" name="enviar" />
                            </form>
                        <?php }else{ 
						   $arch=fopen('usuarios.txt','a+');
						   fwrite($arch,$nombre.",".$apellido.chr(10));
						   fclose($arch);
                          ?>
						  <p>Guardar a archivo </p> 
                        <?php } ?>
				      </div>
			      </div>
					<div style="clear: both;">&nbsp;</div>
		        </div>
		<!-- end #content -->
	  <!-- end #sidebar -->
	  <div style="clear: both;">&nbsp;</div>
	</div>
	<div class="container"><img src="images/img03.png" width="1000" height="40" alt="" /></div>
	<!-- end #page -->
</div>
<div id="footer-content"></div>
<div id="footer">
	<p>Copyright (c) 2012 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>