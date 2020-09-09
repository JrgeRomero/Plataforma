<div class="pull-right">
	<a href="<?php echo site_url('formato/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Folio</th>
		<th>Nombre</th>
		<th>Logoempresa</th>
		<th>Logocliente</th>
		<th>Tipo</th>
		<th>Descripcion</th>
		<th>Actions</th>
    </tr>
	<?php foreach($formatos as $f){ ?>
    <tr>
		<td><?php echo $f['id']; ?></td>
		<td><?php echo $f['folio']; ?></td>
		<td><?php echo $f['nombre']; ?></td>
		<td><?php echo $f['logoempresa']; ?></td>
		<td><?php echo $f['logocliente']; ?></td>
		<td><?php echo $f['tipo']; ?></td>
		<td><?php echo $f['descripcion']; ?></td>
		<td>
            <a href="<?php echo site_url('formato/edit/'.$f['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('formato/remove/'.$f['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
