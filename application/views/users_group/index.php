<div class="pull-right">
	<a href="<?php echo site_url('users_group/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>User Id</th>
		<th>Group Id</th>
		<th>Actions</th>
    </tr>
	<?php foreach($users_groups as $u){ ?>
    <tr>
		<td><?php echo $u['id']; ?></td>
		<td><?php echo $u['user_id']; ?></td>
		<td><?php echo $u['group_id']; ?></td>
		<td>
            <a href="<?php echo site_url('users_group/edit/'.$u['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('users_group/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
