<div class="pull-right">
	<a href="<?php echo site_url('group/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Description</th>
		<th>Actions</th>
    </tr>
	<?php foreach($groups as $g){ ?>
    <tr>
		<td><?php echo $g['id']; ?></td>
		<td><?php echo $g['name']; ?></td>
		<td><?php echo $g['description']; ?></td>
		<td>
            <a href="<?php echo site_url('group/edit/'.$g['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('group/remove/'.$g['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
