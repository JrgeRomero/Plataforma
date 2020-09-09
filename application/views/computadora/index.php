<div class="card">
	<div class="card-header card-header-rose card-header-icon">
	<div class="card-icon">
		<i class="material-icons">announcement</i>
	</div>
	<h4 class="card-title">Computadoras</h4>
	</div>
	<div class="card-body">
	<div class="toolbar">
		<div class="pull-right">
			<button type="button" class="btn btn-success btn-round" data-toggle="modal" data-target="#ModalAddComputadora">
				<i class="material-icons">add</i>Registrar equipo
			</button>
		</div>
	</div>
	<div class="table-responsive">
		<table id="datatable" class="table table-striped table-bordered" style="width:100%">
			<thead class="bg-info" style="color: white !important">
				<tr>
					<th><b>Tipo de Computadora</b></th>
					<th><b>Disco duro</b></th>
					<th><b>RAM</b></th>
					<th><b>Procesador</b></th>
					<th><b>Sistema Operativo Actual</b></th>
					<th><b>Sistema Operativo Nuevo</b></th>
					<th><b>Software</b></th>
					<th><b>Descripción</b></th>
					<th><b>Acciones</b></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($computadoras as $c){ ?>
					<tr>
						<td><?php echo $c['tipoc']; ?></td>
						<td><?php echo $c['hd']; ?></td>
						<td><?php echo $c['ram']; ?></td>
						<td><?php echo $c['procesador']; ?></td>
						<td><?php echo $c['soac']; ?></td>
						<td><?php echo $c['sonu']; ?></td>
						<td><?php echo $c['software']; ?></td>
						<td><?php echo $c['desc']; ?></td>
						<td class="td-actions text-center">
						<a href="<?php echo site_url('computadora/pdf/'.$c['id']); ?>" title="Ver PDF" target="_blank" class="btn btn-info btn-round" rel="tooltip">
							<i class="material-icons">pageview</i>
							<div class="ripple-container"></div>
						</a>
							<button type="button" class="btn btn-warning btn-round" data-toggle="modal" data-target="#ModalEditarEquipo" onclick="updatecompu(<?php echo $c['id']; ?>)" >
								<i class="material-icons">edit</i>
								<div class="ripple-container"></div>
							</button>
							<!--Botón Archivar-->
							<button type="button" class="btn btn-danger btn-round" title="Eliminar" rel="tooltip" data-toggle="modal" data-target="#ModalEliminarComputadora" onclick="eliminarcomputadora(<?php echo $c['id']; ?>)">
								<i class="material-icons">delete_forever</i>
								<div class="ripple-container"></div>
							</button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div><!--/.table-responsive-->
	</div><!--/.card-body-->
</div><!--/.card-->
<!--Modal Agregar-->
<div class="modal fade" id="ModalAddComputadora" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-full" role="document">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Registra una Computadora</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div><!--/.Modal header-->
			<?php echo form_open('computadora/add'); ?>
			<div class="modal-body">
        <div class="container-fluid">
          <div class="form-row"><!-- inicia form row 1-->
            <div class="form-group col-md-4">
              <label for="tipoc" class="control-label">Tipo de Computadora</label>
              <input type="text" name="tipoc" value="<?php echo $this->input->post('tipoc'); ?>" class="form-control"  required>
              <span class="text-danger"><?php echo form_error('tipoc');?></span>
            </div>
            <div class="form-group col-md-4">
                <label for="hd" class="control-label">Capacidad del Disco Duro</label>
                <input type="text" name="hd" value="<?php echo $this->input->post('hd'); ?>" class="form-control"  required>
                <span class="text-danger"><?php echo form_error('hd');?></span>
              </div>
            <div class="form-group col-md-4">
              <label for="ram" class="control-label">Cantidad de RAM</label>
              <input type="text" name="ram" value="<?php echo $this->input->post('ram'); ?>" class="form-control" required/>
              <span class="text-danger"><?php echo form_error('ram');?></span>
            </div>
          </div><!--/.cierra form-row 1"-->
            <div class="form-row"><!-- inicia form row 2-->
              <div class="form-group col-md-4">
                <label for="procesador" class="control-label">Tipo de Procesador </label>
                <input type="text" name="procesador" value="<?php echo $this->input->post('procesador'); ?>" class="form-control"  required>
                <span class="text-danger"><?php echo form_error('procesador');?></span>
              </div>
              <div class="form-group col-md-4">
                  <label for="soac" class="control-label">Sistema Operativo Actual</label>
                  <input type="text" name="soac" value="<?php echo $this->input->post('soac'); ?>" class="form-control"  required>
                  <span class="text-danger"><?php echo form_error('soac');?></span>
                </div>
              <div class="form-group col-md-4">
                <label for="sonu" class="control-label">Sistema Operativo Nuevo</label>
                <input type="text" name="sonu" value="<?php echo $this->input->post('sonu'); ?>" class="form-control" required/>
                <span class="text-danger"><?php echo form_error('sonu');?></span>
              </div>
            </div><!--/.cierra form-row 2"-->
            <div class="form-row"><!-- inicia form row 3-->
              <div class="form-group col-md-4">
                <label for="software" class="control-label">Software Extra </label>
                <input type="text" name="software" value="<?php echo $this->input->post('software'); ?>" class="form-control"  required>
                <span class="text-danger"><?php echo form_error('software');?></span>
              </div>
              <div class="form-group col-md-4">
                  <label for="desc" class="control-label">Obvervaciones, Cometarios, Descripcion</label>
                  <input type="text" name="desc" value="<?php echo $this->input->post('desc'); ?>" class="form-control"  required>
                  <span class="text-danger"><?php echo form_error('desc');?></span>
                </div>
            </div><!--/.cierra form-row 3"-->
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
<div class="modal fade" id="ModalEditarEquipo" tabindex="-1" role="dialog" aria-hidden="true" >

  <div class="modal-dialog modal-full" role="document">    

    <!-- Modal content-->
    <div class="modal-content">     
      <div class="modal-header">
        <h5 class="modal-title">Editar Computadora</h5><?php echo $c['id']; ?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><!--/.modal-header-->
      <?php echo form_open('computadora/edit/',array("id"=>"updatecomputadora")); ?>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="tipoc" class="control-label">Tipo de Computadora</label>
                <input type="text" name="tipoc" class="form-control" id="edittipoc" required /> 
            </div>
            <div class="form-group col-md-4">
              <label for="hd" class="control-label">Capacidad de disco duro</label>
                <input type="text" name="hd" class="form-control" id="edithd" required /> 
            </div>
            <div class="form-group col-md-4">
              <label for="ram" class="control-label">Capacidad de RAM</label>
                <input type="text" name="ram" class="form-control" id="editram" required /> 
            </div>
          </div><!--/.form-row"-->
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="procesador" class="control-label">Tipo de procesador</label>
                <input type="text" name="procesador" class="form-control" id="editproce" required/>
            </div>
            <div class="form-group col-md-4">
              <label for="soac" class="control-label">Sistema operativo actual</label>
                <input type="text" name="soac" class="form-control" id="editsoac" required/>
            </div>
            <div class="form-group col-md-4">
              <label for="sonu" class="control-label">Sistema operativo nuevo</label>
                <input type="text" name="sonu" class="form-control" id="editsonu" required/>
            </div>
          </div><!--/.form-row"-->
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="software" class="control-label">Software</label>
                <input type="text" name="software"  class="form-control" id="editsoftware" required/>
            </div>
            <div class="form-group col-md-4">
              <label for="desc" class="control-label">Descripción</label>
                <input type="text" name="desc"  class="form-control" id="editdesc" required/>
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
<div class="modal fade" id="ModalEliminarComputadora" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Eliminar Computadora</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><!--/.modal-header-->
      <?php echo form_open('computadora/remove/',array("id"=>"dropcomputadora")); ?>
      <div class="modal-body">
        <div class="container-fluid">

            <h3>¿Realmente quieres eliminar esta computadora?</h3>
            <h4>se perderan todos los datos asociados a ella ...</h4>

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
