<!--Card Principal-->
<div class="card">
	<div class="card-header card-header-rose card-header-icon">
	<div class="card-icon">
		<i class="material-icons">announcement</i>
	</div>
	<h4 class="card-title">Clientes</h4>
	</div>
	<div class="card-body">
		<div class="toolbar">
			<div class="pull-right">
				<button type="button" class="btn btn-success btn-round" data-toggle="modal" data-target="#ModalAgregarCliente">
					<i class="material-icons">add</i>Agregar Cliente
				</button>
			</div>
		</div>
		<div class="table-responsive">
			<table id="datatable" class="table table-striped table-bordered" style="width:100%">
				<thead class="bg-info" style="color: white !important">  
					<tr>
            <th><b>Id</b></th>
						<th><b>Nombre</b></th>
						<th><b>Apaterno</b></th>
						<th><b>Amaterno</b></th>
						<th><b>Empresa</b></th>
						<th><b>Finicio</b></th>
						<th><b>Telefono</b></th>
						<th><b>Correo</b></th>
						<th><b>Tipopago</b></th>
						<th><b>Acciones</b></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($clientes as $c){ ?>
						<tr>
              <td><?php echo $c['id']; ?></td>
							<td><?php echo $c['nombre']; ?></td>
							<td><?php echo $c['apaterno']; ?></td>
							<td><?php echo $c['amaterno']; ?></td>
							<td><?php echo $c['empresa']; ?></td>
							<td><?php echo $c['finicio']; ?></td>
							<td><?php echo $c['telefono']; ?></td>
							<td><?php echo $c['correo']; ?></td>
							<td><?php echo $c['tipopago']; ?></td>
							<td class="td-actions text-center">
							<a href="<?php echo site_url('cliente/pdf/'.$c['id']); ?>" title="Ver PDF" target="_blank" class="btn btn-info btn-round" rel="tooltip">
								<i class="material-icons">pageview</i>
								<div class="ripple-container"></div>
							</a>
								<button type="button" class="btn btn-warning btn-round" title="Editar" rel="tooltip" data-toggle="modal" data-target="#ModalEditarCliente" onclick="upcliente(<?php echo $c['id'];?>)">
									<i class="material-icons">edit</i>
									<div class="ripple-container"></div>
								</button>
								<!--Botón eliminar-->
								<button type="button" class="btn btn-danger btn-round" title="Eliminar" rel="tooltip" data-toggle="modal" data-target="#ModalEliminaCliente" onclick="eliminarcliente(<?php echo $c['id'];?>)" >
									<i class="material-icons">delete_forever</i>
									<div class="ripple-container"></div>
								</button>
							<?php } ?>
							</td>
						</tr>
				</tbody>
			</table>
		</div><!--/.table-responsive-->
	</div><!--/.card-body-->
</div><!--/.card-->

<!--Modal Agregar-->
<div class="modal fade" id="ModalAgregarCliente" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-full" role="document">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Registra un nuevo Cliente</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div><!--/.Modal header-->
			<?php echo form_open('cliente/add'); ?>
			<div class="modal-body">
        <div class="container-fluid">
          <div class="form-row"><!-- inicia form row 1-->
            <div class="form-group col-md-4">
              <label for="nombre" class="control-label">Nombre</label>
              <input type="text" name="nombre" value="<?php echo $this->input->post('nombre'); ?>" class="form-control"  required>
              <span class="text-danger"><?php echo form_error('nombre');?></span>
            </div>
            <div class="form-group col-md-4">
                <label for="apaterno" class="control-label">Apellido Paterno</label>
                <input type="text" name="apaterno" value="<?php echo $this->input->post('apaterno'); ?>" class="form-control"  required>
                <span class="text-danger"><?php echo form_error('apaterno');?></span>
              </div>
            <div class="form-group col-md-4">
              <label for="amaterno" class="control-label">Apellido Materno</label>
              <input type="text" name="amaterno" value="<?php echo $this->input->post('amaterno'); ?>" class="form-control" required/>
              <span class="text-danger"><?php echo form_error('amaterno');?></span>
            </div>
          </div><!--/.cierra form-row 1"-->
            <div class="form-row"><!-- inicia form row 2-->
              <div class="form-group col-md-4">
                <label for="fnacimiento" class="control-label">Fecha de Nacimiento </label>
                <input type="date" name="fnacimiento" value="<?php echo $this->input->post('fnacimiento'); ?>" class="form-control"  required>
                <span class="text-danger"><?php echo form_error('fnacimiento');?></span>
              </div>
              <div class="form-group col-md-4">
                  <label for="empresa" class="control-label">Empresa</label>
                  <input type="text" name="empresa" value="<?php echo $this->input->post('empresa'); ?>" class="form-control"  required>
                  <span class="text-danger"><?php echo form_error('empresa');?></span>
                </div>
              <div class="form-group col-md-4">
                <label for="finicio" class="control-label">Fecha de Inicio</label>
                <input type="date" name="finicio" value="<?php echo $this->input->post('finicio'); ?>" class="form-control" required/>
                <span class="text-danger"><?php echo form_error('finicio');?></span>
              </div>
            </div><!--/.cierra form-row 2"-->
            <div class="form-row"><!-- inicia form row 3-->
              <div class="form-group col-md-4">
                <label for="telefono" class="control-label">Telefono </label>
                <input type="text" name="telefono" value="<?php echo $this->input->post('telefono'); ?>" class="form-control"  required>
                <span class="text-danger"><?php echo form_error('telefono');?></span>
              </div>
              <div class="form-group col-md-4">
                  <label for="correo" class="control-label">Correo</label>
                  <input type="e-mail" name="correo" value="<?php echo $this->input->post('correo'); ?>" class="form-control"  required>
                  <span class="text-danger"><?php echo form_error('correo');?></span>
                </div>
              <div class="form-group col-md-4">
                <label for="rfc" class="control-label">RFC</label>
                <input type="text" name="rfc" value="<?php echo $this->input->post('rfc'); ?>" class="form-control" />
                <span class="text-danger"><?php echo form_error('rfc');?></span>
              </div>
            </div><!--/.cierra form-row 3"-->
            <div class="form-row"><!-- inicia form row 4-->
              <div class="form-group col-md-6">
                <label for="tipopago" class="control-label">Tipo de Pago </label>
                <input type="text" name="tipopago" value="<?php echo $this->input->post('tipopago'); ?>" class="form-control"  required>
                <span class="text-danger"><?php echo form_error('tipopago');?></span>
              </div>
              <div class="form-group col-md-6">
                  <label for="direccion" class="control-label">Direccion</label>
                  <input type="text" name="direccion" value="<?php echo $this->input->post('direccion'); ?>" class="form-control"  required>
                  <span class="text-danger"><?php echo form_error('direccion');?></span>
                </div>
            </div><!--/.cierra form-row 4"-->
        </div><!--/.container-fluid-->
			</div><!--/.modal-body-->
			<div class="modal-footer">
        <button type="submit" class="btn btn-success" id="">
          <i class="material-icons">check</i> Aceptar y Crear
        </button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">
            <i class="material-icons">close</i> Cancelar
        </button>
			</div><!--/.modal-footer-->
			<?php echo form_close(); ?>

		</div><!--/.modal-content-->
	</div><!--/.modal-dialog-->
</div><!--/.Modal Agregar-->

<!--Modal Editar-->
<div class="modal fade" id="ModalEditarCliente" tabindex="-1" role="dialog" aria-hidden="true" tabindex="-1"> <!-- doble tabindex="-1" ?? -->

  <div class="modal-dialog modal-full">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Actualizar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><!--/.modal-header-->
      <?php echo form_open('cliente/edit/',array("id"=>"updatecliente")); ?>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="nombre" class="control-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="editnombre"  />
            </div>
            <div class="form-group col-md-4">
              <label for="apaterno" class="control-label">Apellido Paterno</label>
                <input type="text" name="apaterno" class="form-control" id="editap"  />
            </div>
            <div class="form-group col-md-4">
              <label for="amaterno" class="control-label">Apellido Materno</label>
                <input type="text" name="amaterno" class="form-control" id="editam"  />
            </div>
          </div><!--/.form-row"-->
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="fnacimiento" class="control-label">Fecha de Nacimiento</label>
                <input type="date" name="fnacimiento" class="form-control" id="editfn" />
            </div>
            <div class="form-group col-md-4">
              <label for="empresa" class="control-label">Empresa</label>
                <input type="text" name="empresa" class="form-control" id="editemp" />
            </div>
            <div class="form-group col-md-4">
              <label for="finicio" class="control-label">Fecha Inicio</label>
                <input type="date" name="finicio" class="form-control" id="editfi" />
            </div>
          </div><!--/.form-row"-->
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="telefono" class="control-label">Telefono</label>
                <input type="text" name="telefono"  class="form-control" id="edittel" />
            </div>
            <div class="form-group col-md-4">
              <label for="correo" class="control-label">Correo</label>
              <input type="text" name="correo"  class="form-control" id="editcorr" />
            </div>
            <div class="form-group col-md-4">
                <label for="rfc" class="control-label">RFC</label>
                <input type="text" name="rfc"  class="form-control" id="editrfc" />
              </div>
          </div><!--/.form-row"-->
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="tipopago" class="control-label">Tipo de Pago</label>
                <input type="text" name="tipopago"  class="form-control" id="editpago" />
              </div>
              <div class="form-group col-md-6">
              <label for="direccion" class="control-label">Direccion</label>
                <input type="text" name="direccion"  class="form-control" id="editdirec" />
            </div>
          </div><!--/.form-row"-->
        </div><!--/.container-fluid-->
      </div><!--/.modal-body-->
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="btn-enviar">
            <i class="material-icons">check</i> Guardar Edición
        </button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">
              <i class="material-icons">close</i> Cancelar
        </button>
      </div><!--/modal-footer-->
      <?php echo form_close(); ?>
    </div><!--/.modal-content-->
  </div><!--/.modal-dialog-->
</div><!--/.Modal Editar-->

<!--Modal eliminar-->
<div class="modal fade" id="ModalEliminaCliente" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Eliminar Cliente</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><!--/.modal-header-->
      <?php echo form_open('cliente/remove/',array("id"=>"dropcliente")); ?>
      <div class="modal-body">
        <div class="container-fluid">

            <h3>¿Realmente quieres eliminar a este cliente?</h3>
            <h4>se perderan todos los datos asociados a el ...</h4>

        </div><!--/.container-fluid-->
      </div><!--/.modal-body-->
      <div class="modal-footer">
          <button type="submit" class="btn btn-success">
            <i class="material-icons">check</i> Eliminar
          </button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">
              <i class="material-icons">close</i> Cancelar
          </button>
      </div><!--/.modal-footer-->
      <?php echo form_close(); ?>
    </div><!--/.modal-content-->

  </div><!--/.modal-dialog-->
</div><!--/.Modal eliminar-->
<h1>
  Prueba 1 Vane
</h1>

<h1>holaP</h1>
