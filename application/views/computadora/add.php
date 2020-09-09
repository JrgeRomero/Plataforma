<?php echo form_open('computadora/add'); ?>

	<div>
		Tipoc : 
		<input type="text" name="tipoc" value="<?php echo $this->input->post('tipoc'); ?>" />
	</div>
	<div>
		Ram : 
		<input type="text" name="ram" value="<?php echo $this->input->post('ram'); ?>" />
	</div>
	<div>
		Procesador : 
		<input type="text" name="procesador" value="<?php echo $this->input->post('procesador'); ?>" />
	</div>
	<div>
		SOA : 
		<input type="text" name="SOA" value="<?php echo $this->input->post('SOA'); ?>" />
	</div>
	<div>
		SON : 
		<input type="text" name="SON" value="<?php echo $this->input->post('SON'); ?>" />
	</div>
	<div>
		Software : 
		<input type="text" name="software" value="<?php echo $this->input->post('software'); ?>" />
	</div>
	<div>
		Hd : 
		<input type="text" name="hd" value="<?php echo $this->input->post('hd'); ?>" />
	</div>
	<div>
		Desc : 
		<textarea name="desc"><?php echo $this->input->post('desc'); ?></textarea>
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>