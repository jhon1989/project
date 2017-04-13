
  <div class="container">

  <div class="modal fade" id="editar" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Proveedor</h4>
        </div>
        <div class="modal-body">
              <form role='form' method="POST" action="#" class="form-edit">
                <div class="form-group col-sm-12">
                 <label for="identification">Nit</label>
                 <input type="text" class="form-control" placeholder="Nit" name="nit" id="nit" readonly="true" required="required"/>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-sm-12">
                 <label for="name">Razon Social</label>
                 <input type="text" class="form-control" placeholder="Nombre" name="business_name" id="business_name" required="required"/>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-sm-12">
                	<label for="address">Direccion</label>
                	<input type="text" class="form-control" placeholder="Direccion" name="address" id="address"/>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-sm-12">
                	<label for="phone">Telefono</label>
                	<input type="text" class="form-control" placeholder="Telefono" name="phone" id="phone">
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-sm-12">
                	<label for="email">Email</label>
                	<input type='email' class="form-control" placeholder="Email" name="email" id="email" required="required"/>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button type="submit" value="edit" name="edit" class="btn btn-primary">Editar Proveedor</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </form>
      </div>

    </div>
  </div>
</div>
