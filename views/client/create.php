
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
	          <?php require_once('form.php');?>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Registrar Clientes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </form>
      </div>

    </div>
  </div>

  <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
           $identification = trim($_POST['identification']);
           $res = $controller->save();

             echo $res;
        }

   ?>

</div>
