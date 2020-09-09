<div class="card">
  <div class="card-header card-header-info card-header-icon">
    <div class="card-icon">
      <i class="material-icons">home</i>
    </div>
    <h3 class="card-title">Menú Principal</h3>
  </div>
  <div class="card-body">
  </div>
</div>
<div class="row">
  <div class="col-md-3"><!--Inicia menu con imagenes-->
    <div class="card card-product">
      <div class="card-header card-header-image hinge" data-header-animation="true">
          <img class="img" src="<?php echo base_url("resources/imagenes/index_formatos.jpg"); ?>">
      </div>
      <div class="card-body">
        <div class="card-actions text-center">
          <a class="btn btn-info btn-fab btn-just-icon" href="<?php echo site_url('fclientes'); ?>" rel="tooltip" data-placement="top" data-original-title="Ir a Clientes">
            <i class="material-icons">library_books</i>
          </a>
        </div>
        <h3 class="card-title text-center">
          <a><h3 style="margin: 0px 0px 0px 0px !important;"><b>Clientes</b></h3></a>
        </h3>
        <div class="card-description text-center">
          Control y administración de clientes.
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card card-product">
      <div class="card-header card-header-image hinge" data-header-animation="true">
          <img class="img" src="<?php echo base_url("resources/imagenes/index_proyecto.png"); ?>">
      </div>
      <div class="card-body">
        <div class="card-actions text-center">
          <a class="btn btn-info btn-fab btn-just-icon" href="<?php echo site_url('Equipos'); ?>" rel="tooltip" data-placement="top" data-original-title="Ir a Equipos de computo">
            <i class="material-icons">library_books</i>
          </a>
        </div>
        <h3 class="card-title text-center">
          <a><h3 style="margin: 0px 0px 0px 0px !important;"><b>Computadoras</b></h3></a>
        </h3>
        <div class="card-description text-center">
          Control de Equipos de Computo
        </div>
      </div>
    </div>
  </div>
</div>
