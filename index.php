<!DOCTYPE <!DOCTYPE html>
<html>
<head>
  <title>Facturex</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link style="text/css" rel="stylesheet" href="./other/css/index.css">
  <link style="text/css" rel="stylesheet" href="./other/css/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
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
    						<li><a href="index.php?page=inventario">Inventario</a></li>
    						<li><a href="index.php?page=factura">Ventas</a></li>

    					</ul>
    				</li>

    				<li class="dropdown">
                <a href="#" class="drodown-togle" data-toggle='dropdown'>Parametros
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                	<li><a href="index.php?page=pais">Pais</a></li>
                	<li><a href="index.php?page=ciudad">Ciudad</a></li>
                </ul>
    				</li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle='dropdown'>Datos<span class="caret"></span></a>
                <ul class="dropdown-menu">
    				        <li><a href="index.php?page=client">Clientes</a></li>
    				        <li><a href="index.php?page=empleado">Empleados</a></li>
    				        <li><a href="index.php?page=proveedor">Proveedores</a></li>
    				        <li><a href="index.php?page=producto">Productos</a></li>
    				    </ul>
    				</li>
    			</ul>
    			<ul class="nav navbar-nav navbar-right">
    				<li><a href="#"><span class="glyphicon glyphicon-user"></span> Salir</a></li>
    				<li><a href="index.php?page=usuario"><span class="glyphicon glyphicon-log-in"></span> Loguin</a></li>
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
    			       	 echo '<h2>No se pudo encontrar el recurso</h2>';
    			       }
    			    }
    			    else
    			    {
    			    	echo '<h2>Herror fatal intentelo mas tarde</h2>';
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

</html>
