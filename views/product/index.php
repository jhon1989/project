
<?php
      function reload() {
?>
     <script type="text/javascript">
        location.href="index.php?page=product";
     </script>

<?php
      }
 ?>

<?php
   include './controllers/ProductController.php';
   $controller = new ProductController();
?>

<?php
   function message() {
     if (isset($_COOKIE['message']) && isset($_COOKIE['message']) && $_COOKIE['type_message'] == 'danger') {
?>
      <div class="alert alert-danger alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>Opp!</strong> <?php echo $_COOKIE['message']; ?>
      </div>
<?php
     } elseif (isset($_COOKIE['message']) && isset($_COOKIE['message']) && $_COOKIE['type_message'] == 'success') {
?>
      <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>Opp!</strong> <?php echo $_COOKIE['message']; ?>
      </div>
<?php
     }

  }
?>

<section class="text-center">
  <h1 class="text-cenetr" style="color:#004B8D;">LISTADO DE PRODUCTOS</h1>
</section>

<div class="clearfix" style="padding:10px"></div>

<section>
  <section class="container-fluid">
    <div class="row">
      <section class="col-md-6 col-xs-6">
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#create">Nuevo Producto</button>
      </section>
      <section class="col-md-4 col-xs-4">
        <form class="form-horizontal" action="" method="post">
          <div class="form-group">
            <input type="text" name="search" class="form-control" autocomplete="off">
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
             $controller->save();
             reload();
          }
     ?>

     <?php
     /* Code for edit records */
           if ( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit']) ) {
            $controller->edit($_POST['name']);
            reload();
            message();
           }
      ?>

    <?php
    /* Code for delete records */
         if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
            echo $controller->delete();
            reload();
            message();
         }
    ?>

  <?php
       /* Code for search */
        if ( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search'])) {
           $result = $controller->searchGeneral();
        } else {
           $result = $controller->show();
           message();
        }

        if ( is_array($result)) {
    ?>

    <main>
        <table class="table table-bordered table table-condensed table-striped">
          <thead>
            <tr>
              <th class="text-center">Codigo</th>
              <th class="text-center hidden-xs">Nombre</th>
              <th class="text-center hidden-xs">Tipo</th>
              <th class="text-center hidden-xs hidden-sm">St Maximo</th>
              <th class="text-center hidden-xs hidden-sm">St Minimo</th>
              <th class="text-center hidden-xs hidden-sm">Valor</th>
              <th class="text-center hidden-xs hidden-sm">Cantidad</th>
              <th class="text-center hidden-xs hidden-sm">Categoria</th>
              <th class="text-center hidden-xs hidden-sm">Fecha</th>
              <th class="text-center">Opciones</th>
            </tr>
          </thead>
          <?php
          foreach ($result as $value) {
            ?>

            <?php $string = $value->code_produc .','. $value->name .','. $value->type_measure .','. $value->stock_maximo .','. $value->stock_minimo .','. $value->unit_value .','. $value->quantity .','. $value->id_category .','. $value->date_time;?>
            <tr data-id="<?php echo $string ?>">
              <td><?php echo $value->code_produc ?></td>
              <td class="hidden-xs"><?php echo $value->name ?></td>
              <td class="hidden-xs"><?php echo $value->type_measure ?></td>
              <td class="hidden-xs hidden-sm"><?php echo $value->stock_maximo ?></td>
              <td class="hidden-xs hidden-sm"><?php echo $value->stock_minimo ?></td>
              <td class="hidden-xs hidden-sm"><?php echo $value->unit_value ?></td>
              <td class="hidden-xs hidden-sm"><?php echo $value->quantity ?></td>
              <td class="hidden-xs hidden-sm"><?php echo $value->id_category ?></td>
              <td class="hidden-xs hidden-sm"><?php echo $value->date_time ?></td>
              <td class="form-horizontal text-center" >
                <form class="form-horizontal" action="index.php?page=product" method="post" id="form-eliminar">
                  <input type="hidden" name="code" value="<?php echo $value->code_produc ?>">
                  <button type="submit" name="delete" value="delete" class="btn btn-xs btn-danger text-center">Eliminar</button>
                  <a href="#" class="btn btn-xs btn-warning btn-edit-product" data-toggle="modal" data-target="#editar">Editar</a>
                  <a href="#" class="btn btn-xs btn-info btn-show-product" data-toggle="modal" data-target="#show-provider">Ver</a>
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
