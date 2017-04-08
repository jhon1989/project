<div class="panel-heading">Registro de Productos</div>
<div class="panel-body col-sm-offset-3">
	<form role='form'  method="POST">
		<div class="form-group col-sm-8">
			<label for="codigoProducto">Codigo del Producto</label>
			<input type='text' class="form-control" placeholder="Codigo del Producto"/>
		</div>
		<div class="clearfix"></div>
		<div class="form-group col-sm-8">
			<label for="nombreProducto">Nombre del Producto</label>
			<input type="text" class="form-control" placeholder="Nombre del Producto">
		</div>
		<div class="clearfix"></div>
			<div class="form-group col-sm-8">
				<label for="medida">Medida</label>
				<select class="form-control">
					<option>Kg</option>
					<option>Litro</option>
				</select>
			</div>
		    <div class="clearfix"></div>
		    <div class="form-group col-sm-8">
		    	<label for="cantidad">Cantidad</label>
		    	<input class="form-control" type="text" placeholder="Cantidad"/>
		    </div>
		    <div class="clearfix"></div>
		    <div class="form-group col-md-8">
		    	<label for="descripcion">Descripcion</label>
		    	<input type="text" class="form-control" placeholder="Descripcion"/>
		    </div>
		    <div class="clearfix"></div>
		    <div class="form-group col-sm-8">
		    	<label for="valorUnitario">Valor Unitario</label>
		    	<input type="text" class="form-control" placeholder="Valor Unitario">
		    </div>
		    <div class="clearfix"></div>
		    <div class="form-group col-sm-8">
		    	<label for="stockMaximo">Stock Maximo</label>
		    	<input type="text" class="form-control" placeholder="Stock Maximo"/>
		    </div>
		    <div class="clearfix"></div>
		    <div  class="form-group col-sm-8">
		    	<label for="stockMinimo">Stock Minimo</label>
		    	<input type="text" class="form-control" placeholder="Stock Minimo"/>
		    </div>
		    <div class="clearfix"></div>
		    <div class="form-group col-sm-8">
		    	<button type="submit" class="btn btn-primary">Registrar Nuevo Producto</button>
		    </div>
	</form>
</div>