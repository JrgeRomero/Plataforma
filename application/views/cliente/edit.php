<?php echo form_open('clientes/edit/'.$clientes['idcliente']); ?>

	<div>
		Nombre : 
		<input type="text" name="nombre" value="<?php echo ($this->input->post('nombre') ? $this->input->post('nombre') : $clientes['nombre']); ?>" />
	</div>
	<div>
		Apaterno : 
		<input type="text" name="apaterno" value="<?php echo ($this->input->post('apaterno') ? $this->input->post('apaterno') : $clientes['apaterno']); ?>" />
	</div>
	<div>
		Amaterno : 
		<input type="text" name="amaterno" value="<?php echo ($this->input->post('amaterno') ? $this->input->post('amaterno') : $clientes['amaterno']); ?>" />
	</div>
	<div>
		Fnacimiento : 
		<input type="text" name="fnacimiento" value="<?php echo ($this->input->post('fnacimiento') ? $this->input->post('fnacimiento') : $clientes['fnacimiento']); ?>" />
	</div>
	<div>
		Empresa : 
		<input type="text" name="empresa" value="<?php echo ($this->input->post('empresa') ? $this->input->post('empresa') : $clientes['empresa']); ?>" />
	</div>
	<div>
		Finicio : 
		<input type="text" name="finicio" value="<?php echo ($this->input->post('finicio') ? $this->input->post('finicio') : $clientes['finicio']); ?>" />
	</div>
	<div>
		Telefono : 
		<input type="text" name="telefono" value="<?php echo ($this->input->post('telefono') ? $this->input->post('telefono') : $clientes['telefono']); ?>" />
	</div>
	<div>
		Correo : 
		<input type="text" name="correo" value="<?php echo ($this->input->post('correo') ? $this->input->post('correo') : $clientes['correo']); ?>" />
	</div>
	<div>
		Rfc : 
		<input type="text" name="rfc" value="<?php echo ($this->input->post('rfc') ? $this->input->post('rfc') : $clientes['rfc']); ?>" />
	</div>
	<div>
		Tipopago : 
		<input type="text" name="tipopago" value="<?php echo ($this->input->post('tipopago') ? $this->input->post('tipopago') : $clientes['tipopago']); ?>" />
	</div>
	<div>
		Direccion : 
		<textarea name="direccion"><?php echo ($this->input->post('direccion') ? $this->input->post('direccion') : $clientes['direccion']); ?></textarea>
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>