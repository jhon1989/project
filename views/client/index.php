
<?php
   include './controllers/ClientController.php';
   $controller = new ClientController();
?>

<?php
     function showMessage($message) {
       header("Location:index.php?page=client");
       echo "<script>";
       echo "alert('$message')";
       echo "</script>";
     }
?>

<section class="text-center">
  <h1 class="text-cenetr" style="color:#004B8D;">LISTADO DE CLIENTES</h1>
</section>

<div class="clearfix" style="padding:10px"></div>

<section>
  <section class="container-fluid">
    <div class="row">
      <section class="col-md-6 col-xs-6">
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#create">Nuevo Cliente</button>
      </section>
      <section class="col-md-4 col-xs-4">
        <form class="form-horizontal" action="" method="post">
          <div class="form-group">
            <input type="text" name="search" class="form-control">
          </div>

      </section>
      <section class="col-xs-2  col-md-2">
        <div class="form-group">
          <button type="submit" class="btn btn-warning" name="btnsearch" value="search"><span class="glyphicon glyphicon-search" style="font-size:20px"></span></button>
        </div>
      </section>
      </form>
    </div>
    <div class="clearfix" style="padding:10px"></div>

    <?php
    /* Code for save records */
          if ( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create'])) {
             $result = $controller->save();
             showMessage($result);
          }
     ?>

     <?php
     /* Code for edit records */
           if ( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit']) ) {
              $result = $controller->edit($_POST['name']);
              showMessage($result);

           }
      ?>

    <?php
    /* Code for delete records */
         if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
            $result = $controller->delete();
            showMessage($result);
         }
    ?>

  <?php

       /* Code for search */
        if ( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search'])) {
           $result = $controller->searchGeneral();
        } else {
          $result = $controller->show();
        }

        if ( is_array($result)) {

    ?>

    <main>
        <table class="table table-bordered table table-condensed table-striped">
          <thead>
            <tr>
              <th class="text-center">Identificacion</th>
              <th class="text-center hidden-xs">Nombre</th>
              <th class="text-center hidden-xs">Apellidos</th>
              <th class="text-center hidden-xs">Direccion</th>
              <th class="text-center hidden-xs hidden-sm">Telefono</th>
              <th class="text-center hidden-xs hidden-sm">Email</th>
              <th class="text-center hidden-xs hidden-sm">Fecha</th>
              <th class="text-center">Opciones</th>
            </tr>
          </thead>
          <?php
          foreach ($result as $value) {
            ?>

            <?php $string = $value->identification .','. $value->name .','. $value->last_name .','. $value->address .','. $value->phone .','. $value->email .','. $value->date_time ;?>
            <tr data-id="<?php echo $string ?>">
              <td><?php echo $value->identification ?></td>
              <td class="hidden-xs"><?php echo $value->name ?></td>
              <td class="hidden-xs"><?php echo $value->last_name ?></td>
              <td class="hidden-xs"><?php echo $value->address ?></td>
              <td class="hidden-xs hidden-sm"><?php echo $value->phone ?></td>
              <td class="hidden-xs hidden-sm"><?php echo $value->email ?></td>
              <td class="hidden-xs hidden-sm"><?php echo $value->date_time ?></td>
              <td class="form-horizontal text-center" >
                <form class="form-horizontal" action="" method="post" id="form-eliminar">
                  <input type="hidden" name="identification" value="<?php echo $value->identification ?>">
                  <button type="submit" name="delete" value="delete" class="btn btn-xs btn-danger text-center">Eliminar</button>
                  <a href="#" class="btn btn-xs btn-warning btn-eliminar" data-toggle="modal" data-target="#editar">Editar</a>
                  <a href="#" class="btn btn-xs btn-info btn-show" data-toggle="modal" data-target="#show">Ver</a>
                </form>
              </td>
            </tr>

            <?php
          }
          ?>
          <tbody>

          </tbody>
        </table>
      </section>
    </main>

    <?php

  } else {
    echo 'No se encontro ningun registro';
  }
  ?>

</section>

<!-- Include model for create client -->
<?php require_once('edit.php');?>

<!-- Include model for create client -->
<?php require_once('create.php');?>

<!-- Include model for show client -->
<?php require_once('show.php');?>
