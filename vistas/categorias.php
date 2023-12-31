<!DOCTYPE html>
<html lang="en">
<?php
require_once "header.php";
?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <?php include_once "nav.php"; ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once "menu.php"; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="box">
              <div class="box-header with-border">
                <h1 class="box-title">Categoría <button class="btn btn-success" id="btnagregar" onclick="mostrarelformulario(true)"><i class="fa fa-plus-circle"></i>
                    Agregar</button>
                </h1>
                <div class="box-tools pull-right">
                </div>
              </div>
              <!-- /.box-header -->
              <!-- centro -->
              <div class="panel-body table-responsive" id="listadoregistros">
                <table id="tablalistado" class="table table-striped table-bordered table-condensed table-hover">
                  <thead>
                    <th>Opciones</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot>
                    <th>Opciones</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                  </tfoot>
                </table>
              </div>



              <div class="card-body" id="formularioregistros">
                <form name="formulario" id="formulario" method="POST">
                  <div class="row">
                    <div class="col-sm-6">

                      <div class="form-group">
                        <label>nombre</label>
                        <input type="hidden" name="idcategoria" id="idcategoria">
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="escribir nombre" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>descripcion</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="escribir descripcion" required>
                      </div>
                    </div>


                  </div>

                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                    <button class="btn btn-danger" onclick="cancelarformulario()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                  </div>




                </form>
              </div>






              <!--Fin centro -->
            </div><!-- /.box -->
          </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    require_once "footer.php";
    ?>

    <!-- Control Sidebar -->
    <!-- <aside class="control-sidebar control-sidebar-dark"> -->
    <!-- Control sidebar content goes here -->
    <!-- </aside> -->
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->



  <script src="../vistas/codigosjs/categoria.js"></script>
</body>

</html>