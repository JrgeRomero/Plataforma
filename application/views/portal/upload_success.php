<h3>Tu archivo fue correctamente subido!</h3>

<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>

<a style="color :white !important;" href="<?php echo site_url('subirarchivos'); ?>">
	<button type="button" class="btn btn-success btn-round">
		<i class="material-icons">add</i>Sube Otro Archivo
	</button>
</a>