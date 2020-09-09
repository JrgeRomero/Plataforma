<?php echo form_open('cliente/add'); ?>

	<div>
		Nombre : 
		<input type="text" name="nombre" value="<?php echo $this->input->post('nombre'); ?>" />
	</div>
	<div>
		Apaterno : 
		<input type="text" name="apaterno" value="<?php echo $this->input->post('apaterno'); ?>" />
	</div>
	<div>
		Amaterno : 
		<input type="text" name="amaterno" value="<?php echo $this->input->post('amaterno'); ?>" />
	</div>
	<div>
		Fnacimiento : 
		<input type="text" name="fnacimiento" value="<?php echo $this->input->post('fnacimiento'); ?>" />
	</div>
	<div>
		Empresa : 
		<input type="text" name="empresa" value="<?php echo $this->input->post('empresa'); ?>" />
	</div>
	<div>
		Finicio : 
		<input type="text" name="finicio" value="<?php echo $this->input->post('finicio'); ?>" />
	</div>
	<div>
		Telefono : 
		<input type="text" name="telefono" value="<?php echo $this->input->post('telefono'); ?>" />
	</div>
	<div>
		Correo : 
		<input type="text" name="correo" value="<?php echo $this->input->post('correo'); ?>" />
	</div>
	<div>
		Rfc : 
		<input type="text" name="rfc" value="<?php echo $this->input->post('rfc'); ?>" />
	</div>
	<div>
		Tipopago : 
		<input type="text" name="tipopago" value="<?php echo $this->input->post('tipopago'); ?>" />
	</div>
	<div>
		Direccion : 
		<textarea name="direccion"><?php echo $this->input->post('direccion'); ?></textarea>
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>