
  <div class="container">

  <div class="modal fade" id="create" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Crear cliente</h4>
        </div>
        <div class="modal-body">
          <form role='form' method="POST" action="#">
              <div class="form-group col-sm-12">
               <label for="identification">Identificacion</label>
               <input type="text" class="form-control" placeholder="Identificacion" name="identification" id="identification" required="required" maxlength="10"/>
              </div>
              <div class="clearfix"></div>
              <div class="form-group col-sm-12">
               <label for="name">Nombre</label>
               <input type="text" class="form-control" placeholder="Nombre" name="name" id="name" required="required"/>
              </div>
              <div class="clearfix"></div>
              <div class="form-group col-sm-12">
                <label for="last_name">Apellido</label>
                <input type="text" class="form-control" placeholder="Apellido" name="last_name" id="last_name"/>
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
                <button type="submit" value="create" name="create" class="btn btn-primary">Registrar Clientes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </form>
      </div>

    </div>
  </div>


</div>
