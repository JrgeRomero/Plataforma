<?php echo form_open('users_group/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="user_id" class="col-md-4 control-label">User Id</label>
		<div class="col-md-8">
			<input type="text" name="user_id" value="<?php echo $this->input->post('user_id'); ?>" class="form-control" id="user_id" />
		</div>
	</div>
	<div class="form-group">
		<label for="group_id" class="col-md-4 control-label">Group Id</label>
		<div class="col-md-8">
			<input type="text" name="group_id" value="<?php echo $this->input->post('group_id'); ?>" class="form-control" id="group_id" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>