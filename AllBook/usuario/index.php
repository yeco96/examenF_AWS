<?php
require '../validar-accesoCrud.php';
?>

<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>All Book S.A</title>
  <?php include '../referenciasCrud.html'; ?>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="menu-principal.php">All Book S.A</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../menu-principal.php">Inicio

              </a>
            </li>

          

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Usuario</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Usuario</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" onclick="cerrar()">Cerrar Sesión</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>


  <!-- Begin page content -->

  <div class="container">

    <br>
    <div class="row">
      <div class="col-12 col-md-12">
        <!-- Contenido -->

        <!-- Content Section -->
        <!-- crud jquery-->
        <div class="">
          <div class="row">
            <div class="col-md-12">
              <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Agregar Libro</button>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <div id="records_content"></div>
            </div>
          </div>
        </div>
        <!-- /Content Section -->

        <!-- Bootstrap Modals -->
        <!-- Modal - Add New Record/User -->
        <div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">

              <div class="modal-header">
                <h5 class="modal-title">Agregar </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <div class="form-group">
                  <label for="codigo">Codigo</label>
                  <input type="text" id="codigo" maxlength="13" value="" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="descripcion">Descripción</label>
                  <input type="text" id="descripcion" value="" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="tipo">Tipo</label>
                  <input type="text" id="tipo" class="form-control" value="" />
                </div>
                <div class="form-group">
                  <label for="fechaIngreso">Fecha Ingreso</label>
                  <input type="date" id="fechaIngreso" class="form-control" value="" />
                </div>
                <div class="form-group">
                  <label for="precio">Precio</label>
                  <input type="number" id="precio" class="form-control" value="" />
                </div>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Agregar</button>
              </div>
            </div>
          </div>
        </div>
        <!-- // Modal -->

      

        <!-- Inicio crud jquery -->
        <script type="text/javascript" src="js/script.js"></script>
        <!-- Fin crud jquery-->



        <!-- Fin Contenido -->
      </div>
    </div>
    <!-- Fin row -->

  </div>

</body>

</html>