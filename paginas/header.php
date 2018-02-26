<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Ejemplo de navegación usando Bootstrap 3 y PHP</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	    <meta charset="utf-8" />
        
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        
        <style>body{padding-top:30px;}</style>
	</head>
    <body>
        
        <div class="container">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                      <li class="<?php echo $pagina == 'inicio' ? 'active' : ''; ?>"><a href="?p=inicio">Inicio</a></li>
                      <li class="<?php echo $pagina == 'nosotros' ? 'active' : ''; ?>"><a href="?p=nosotros">Nosotros</a></li>
                      <li class="<?php echo $pagina == 'contacto' ? 'active' : ''; ?>"><a href="?p=contacto">Contacto</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav> 
