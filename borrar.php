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
					    <p>Crear el código para eliminar un usuario. Para ello, primero se debe seleccionar el usuario de una lista.<br>
						La misma deberá ser armada leyendo los datos del archivo de texto <i>usuarios.txt</i> donde se almacenan los usuarios.<br><br>
						Sugerencia: Utilizar un arreglo como estructura auxiliar.</p>
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