<?php if (isset($error)) { echo $error; }?>

<?php echo form_open_multipart('portal/do_upload');?>

	<input type="file" name="userfile" size="20" id="upload"/>
	<input id="filename" type="text" />

	<br /><br />

	<button type="submit" class="btn btn-success">
	  <i class="material-icons">check</i> Subir
	</button>
</form>

<script type="text/javascript">
	document.getElementById('upload').onchange = uploadOnChange;
	    
		function uploadOnChange() {
		    var filename = this.value;
		    var lastIndex = filename.lastIndexOf("\\");
		    if (lastIndex >= 0) {
		        filename = filename.substring(lastIndex + 1);
		    }
		    document.getElementById('filename').value = filename;
		}
</script>