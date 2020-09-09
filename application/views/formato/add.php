<?php echo form_open('formato/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="folio" class="col-md-4 control-label"><span class="text-danger">*</span>Folio</label>
		<div class="col-md-8">
			<input type="text" name="folio" value="<?php echo $this->input->post('folio'); ?>" class="form-control" id="folio" />
			<span class="text-danger"><?php echo form_error('folio');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="nombre" class="col-md-4 control-label"><span class="text-danger">*</span>Nombre</label>
		<div class="col-md-8">
			<input type="text" name="nombre" value="<?php echo $this->input->post('nombre'); ?>" class="form-control" id="nombre" />
			<span class="text-danger"><?php echo form_error('nombre');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="logoempresa" class="col-md-4 control-label"><span class="text-danger">*</span>Logoempresa</label>
		<div class="col-md-8">
			<input type="text" name="logoempresa" value="<?php echo $this->input->post('logoempresa'); ?>" class="form-control" id="logoempresa" />
			<span class="text-danger"><?php echo form_error('logoempresa');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="logocliente" class="col-md-4 control-label"><span class="text-danger">*</span>Logocliente</label>
		<div class="col-md-8">
			<input type="text" name="logocliente" value="<?php echo $this->input->post('logocliente'); ?>" class="form-control" id="logocliente" />
			<span class="text-danger"><?php echo form_error('logocliente');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="tipo" class="col-md-4 control-label"><span class="text-danger">*</span>Tipo</label>
		<div class="col-md-8">
			<input type="text" name="tipo" value="<?php echo $this->input->post('tipo'); ?>" class="form-control" id="tipo" />
			<span class="text-danger"><?php echo form_error('tipo');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="descripcion" class="col-md-4 control-label"><span class="text-danger">*</span>Descripcion</label>
		<div class="col-md-8">
			<textarea name="descripcion" class="form-control" id="descripcion"><?php echo $this->input->post('descripcion'); ?></textarea>
			<span class="text-danger"><?php echo form_error('descripcion');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>