<!DOCTYPE <!DOCTYPE html>
<html lang="es">
<head>
  <title>Facturex</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link style="text/css" rel="stylesheet" href="./other/css/index.css">
  <link style="text/css" rel="stylesheet" href="./other/css/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Asar|Roboto" rel="stylesheet"> 
</head>
<body>
    <nav class="navbar navbar-inverse">
    	<div class="container-fluid">
    		<div class="navbar-header">
    			<button type='button' class="navbar-toggle" data-toggle='collapse' data-target='#myNavbar'>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</button>
    			<a class='navbar-brand' href="#">FACTUREX</a>
    		</div>
    		<div class="collapse navbar-collapse" id='myNavbar'>
    			<ul class="nav navbar-nav">
    				<li class="active"><a href="index.php?page=principal">Inicio</a></li>
    				<li class="dropdown">
    					<a href="#" class="dropdown-toggle" data-toggle='dropdown'>Operaciones<span class="caret"></span></a>
    					<ul class='dropdown-menu'>
    						<li><a href="index.php?page=inventario" hreflang="es">Inventario</a></li>
    						<li><a href="index.php?page=bill">Ventas</a></li>

    					</ul>
    				</li>

    				<li class="dropdown">
                <a href="#" class="drodown-togle" data-toggle='dropdown' hreflang="es">Configuracion
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                	<li><a href="index.php?page=pais">Pais</a></li>
                	<li><a href="index.php?page=ciudad">Ciudad</a></li>
                </ul>
    				</li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle='dropdown' hreflang="es">Datos<span class="caret"></span></a>
                <ul class="dropdown-menu">
    				        <li><a href="index.php?page=client" hreflang="es">Clientes</a></li>
    				        <li><a href="index.php?page=employee" hreflang="es">Empleados</a></li>
    				        <li><a href="index.php?page=provider" hreflang="es">Proveedores</a></li>
    				        <li><a href="index.php?page=product" hreflang="es">Productos</a></li>
    				    </ul>
    				</li>
    			</ul>
    			<ul class="nav navbar-nav navbar-right">
    				<li><a href="#" hreflang="es"><span class="glyphicon glyphicon-user"></span> Salir</a></li>
    				<li><a href="index.php?page=usuario" hreflang="es"><span class="glyphicon glyphicon-log-in"></span> Loguin</a></li>
    			</ul>
    		</div>
    	</div>
    </nav>
    <div class="container-fluid">

    	<div class=" ">
    			<?php
    			    if(isset($_GET['page']))
    			    {
    			       $page = $_GET['page'];
    			       $path = 'views/' . $page . '/index.php';

    			       if(file_exists($path))
    			       {
                     require_once($path);
    			       }
    			       else
    			       {
    			       	 require_once('views/principal/index.php');
    			       }
    			    }
    			    else
    			    {
    			    	require_once('views/principal/index.php');
    			    }
    			?>
    		</div>


    </div>

    <div class="container-footer">
      <?php include 'footer.php'; ?>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./other/js/client/getClientForEdit.js"></script>
<script type="text/javascript" src="./other/js/client/showClient.js"></script>
<script type="text/javascript" src="./other/js/provider/getProviderForEdit.js"></script>
<script type="text/javascript" src="./other/js/provider/showProvider.js"></script>
<script type="text/javascript" src="./other/js/product/getProductForEdit.js"></script>
<script type="text/javascript" src="./other/js/product/showProduct.js"></script>


</html>
