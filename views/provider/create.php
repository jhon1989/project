
  <div class="container">

  <div class="modal fade" id="create" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Crear Proveedor</h4>
        </div>
        <div class="modal-body">
          <form role='form' method="POST" action="index.php?page=provider">
              <div class="form-group col-sm-12">
               <label for="Nit">Nit</label>
               <input type="text" class="form-control" placeholder="nit" name="nit" id="nit" required="required" maxlength="10"/>
              </div>
              <div class="clearfix"></div>
              <div class="form-group col-sm-12">
               <label for="business_name">Razon Social</label>
               <input type="text" class="form-control" placeholder="Razon Social" name="business_name" id="business_name" required="required"/>
              </div>
              <div class="form-group col-sm-12">
                <label for="address">Direccion</label>
                <input type="text" class="form-control" placeholder="Direccion" name="address" id="address"/>
              </div>
              <div class="clearfix"></div>
              <div class="form-group col-sm-12">
                <label for="phone">Telefono</label>
                <input type="text" class="form-control" placeholder="Telefono" name="phone" id="phone" required="required">
              </div>
              <div class="clearfix"></div>
              <div class="form-group col-sm-12">
                <label for="email">Email</label>
                <input type='email' class="form-control" placeholder="Email" name="email" id="email" required="required"/>
              </div>
              <div class="clearfix"></div>

            </div>
            <div class="modal-footer">
                <button type="submit" value="create" name="create" class="btn btn-primary">Registrar Proveedor</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </form>
      </div>

    </div>
  </div>


</div>
