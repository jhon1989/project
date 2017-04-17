
  <div class="container">

  <div class="modal fade" id="create" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Crear Proveedor</h4>
        </div>
        <div class="modal-body">
          <form role='form' method="POST" action="index.php?page=product">
              <div class="form-group col-sm-12">
               <label for="Nit">Cdigo</label>
               <input type="text" class="form-control" placeholder="Codigo" name="code" id="code" required="required" maxlength="10"/>
              </div>
              <div class="clearfix"></div>
              <div class="form-group col-sm-12">
               <label for="business_name">Nombre</label>
               <input type="text" class="form-control" placeholder="Nombre" name="name" id="name" required="required"/>
              </div>
              <div class="form-group col-sm-12">
                <label for="business_name">Tipo</label>
                <select class="form-control" name="type">
                  <option value="1">frutas</option>
                  <option value="2">frutas</option>
                </select>
              </div>
              <div class="clearfix"></div>
              <div class="form-group col-sm-12">
                <label for="phone">Stock Maximo</label>
                <input type="number" min="1" class="form-control" placeholder="Stock Maximo" name="st_max" id="st_max" required="required">
              </div>
              <div class="clearfix"></div>
              <div class="form-group col-sm-12">
                <label for="email">Stock Minimo</label>
                <input type='number' min="1" class="form-control" placeholder="Stock Minimo" name="st_min" id="email" required="required"/>
              </div>
              <div class="clearfix"></div>
              <div class="form-group col-sm-12">
                <label for="email">Valor</label>
                <input type='number' min="1" class="form-control" placeholder="value" name="value" id="value" required="required"/>
              </div>
              <div class="clearfix"></div>
              <div class="form-group col-sm-12">
                <label for="email">Cantidad</label>
                <input type='number' min="1" class="form-control" placeholder="Cantidad" name="quantity" id="quantity" required="required"/>
              </div>
              <div class="clearfix"></div>
              <div class="form-group col-sm-12">
                <label for="email">Categoria</label>
                <select class="form-control" name="category">
                  <option value="1">frutas</option>
                  <option value="2">frutas</option>
                </select>
              </div>
              <div class="clearfix"></div>

            </div>
            <div class="modal-footer">
                <button type="submit" value="create" name="create" class="btn btn-primary">Registrar Productos</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </form>
      </div>

    </div>
  </div>


</div>
