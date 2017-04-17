
<div class="text-center">
	<div class="panel-heading">Modulo de Faccturacion</div>
</div>

<div class="panel-body">
	<form role='form' action="index.php?page=bill" method="post">
		<div class="form-group col-sm-6">
			<label>Facturex</label><br>
			<label>Nit. 1192894386 Regimen Simplificado</label>
		</div>
		<div class="form-group col-sm-3">
			<label>Fecha</label>
			<input class="form-control date_time" type="date" readonly="true" id="date_time"/>
		</div>
		<div class="form-group col-sm-3">
			<label>Factura de Venta</label>
			<input type="text" class="form-control" disabled="true"></input>
		</div>
		<div class="form-group col-sm-offset-8">
			<label> &nbsp;&nbsp;&nbsp;&nbsp; Carrera 1A11 Cll 73A-70  </label><br>
			<label>Cels: 3104232945 - 3165573805</label><br>
			<label> &nbsp;&nbsp;&nbsp;&nbsp; janeroski12@hotmail.com</label>
		</div>
		<div class="form-group col-sm-5">
			<input class="form-control" type="text" placeholder="Cliente"/>
		</div>
		<div class="form-group col-sm-4">
			<input class="form-control" type="text" placeholder="Nit"/>
		</div>
		<div class="form-group col-sm-3">
			<input class="form-control" type="text" placeholder="Telefono"/>
		</div>
		<div class="clearfix"></div>
		<div class="form-group">
			<table class="table">
				<thead>
					<th>CANTIDAD</th>
					<th>PRODUCTO</th>
					<th>VR. UNITARIO</th>
					<th>VR. TOTAL</th>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Manzana</td>
						<td>1000</td>
						<td>1000</td>
						<td><button type="submit" class="btn btn-danger btn-xs">Editar</button></td>
					    <td><button type="submit" class="btn btn-warning btn-xs">Quitar</button></td>
					</tr>
					<tr>
						<td>2</td>
						<td>Pera</td>
						<td>1200</td>
						<td>1200</td>
						<td><button type="submit" class="btn btn-danger btn-xs">Editar</button></td>
					    <td><button type="submit" class="btn btn-warning btn-xs">Quitar</button></td>
					</tr>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="">
			<div class="form-group col-md-4 col-sm-3 col-sm-offset-8">
				<label>IVA</label>
				<input type="text" class="form-control" disabled></input>
			</div>
			<div class="from-group col-md-4 col-sm-3 col-sm-offset-8">
				<label>DESCUENTO</label>
				<input type="text" class="form-control" disabled></input>
			</div>
			<div class="form-group col-sm-2 col-sm-offset-8">
				<label>SUBTOTAL</label>
				<input type="text" class="form-control" disabled></input>
			</div>
			<div class="form-group col-sm-2">
				<label>TOTAL</label>
				<input type="text" class="form-control" disabled></input>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Facturar</button>
		</div>
	</form>
</div>
<script>
    var f = new Date();
    document.getElementById('date_time').value = f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
</script>
