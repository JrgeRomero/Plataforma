<?php echo form_open('computadora/edit/'.$computadora['id']); ?>

	<div>
		Tipoc : 
		<input type="text" name="tipoc" value="<?php echo ($this->input->post('tipoc') ? $this->input->post('tipoc') : $computadora['tipoc']); ?>" />
	</div>
	<div>
		Ram : 
		<input type="text" name="ram" value="<?php echo ($this->input->post('ram') ? $this->input->post('ram') : $computadora['ram']); ?>" />
	</div>
	<div>
		Procesador : 
		<input type="text" name="procesador" value="<?php echo ($this->input->post('procesador') ? $this->input->post('procesador') : $computadora['procesador']); ?>" />
	</div>
	<div>
		SOA : 
		<input type="text" name="SOA" value="<?php echo ($this->input->post('SOA') ? $this->input->post('SOA') : $computadora['SOA']); ?>" />
	</div>
	<div>
		SON : 
		<input type="text" name="SON" value="<?php echo ($this->input->post('SON') ? $this->input->post('SON') : $computadora['SON']); ?>" />
	</div>
	<div>
		Software : 
		<input type="text" name="software" value="<?php echo ($this->input->post('software') ? $this->input->post('software') : $computadora['software']); ?>" />
	</div>
	<div>
		Hd : 
		<input type="text" name="hd" value="<?php echo ($this->input->post('hd') ? $this->input->post('hd') : $computadora['hd']); ?>" />
	</div>
	<div>
		Desc : 
		<textarea name="desc"><?php echo ($this->input->post('desc') ? $this->input->post('desc') : $computadora['desc']); ?></textarea>
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>