
<section class="text-center">
  <h1 class="text-cenetr" style="color:#004B8D;">LISTADO DE CLIENTES</h1>
</section>

<div class="clearfix" style="padding:10px"></div>

<section>
  <section class="container-fluid">
  <?php
  include './controllers/ClientController.php';
  $controller = new ClientController();

       if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $identification = trim($_POST['identificacion']);
          $res = $controller->delete($identification);

            if ($res == 1) {
              echo "<script>";
              echo "alert('Registro eliminado')";
              echo "</script>";
            }
       }

  $result = $controller->show();

  if ( is_array($result)) {

    ?>

    <section>
      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#create">Nuevo Cliente</button>
    </section>
    <div class="clearfix" style="padding:10px"></div>

    <main>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Identificacion</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>Direccion</th>
              <th>Telefono</th>
              <th>Email</th>
              <th>Fecha</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <?php
          foreach ($result as $value) {
            ?>

            <tr>
              <td><?php echo $value->identification ?></td>
              <td><?php echo $value->name ?></td>
              <td><?php echo $value->last_name ?></td>
              <td><?php echo $value->address ?></td>
              <td><?php echo $value->phone ?></td>
              <td><?php echo $value->email ?></td>
              <td><?php echo $value->date_time ?></td>
              <td class="form-horizontal">
                <form class="form-horizontal" action="" method="post" id="form-eliminar">
                  <input type="hidden" name="identificacion" value="<?php echo $value->identification ?>">
                  <button type="submit" name="button" value="eliminar" class="btn btn-xs btn-danger  text-center">Eliminar</button>
                  <a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editar">Editar</a>
                  <a href="#" name="button" class="btn btn-xs btn-info">Ver</a>
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
  <!-- Include model for create client -->
  <?php require_once('edit.php');?>

  <!-- Include model for create client -->
  <?php require_once('create.php');?>


</section>
