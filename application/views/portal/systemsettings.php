<!--Card Principal-->
<div class="card">

  <div class="card-header card-header-info card-header-icon">
    <div class="card-icon">
      <i class="material-icons">settings</i>
    </div>
    <h4 class="card-title">Configuraciones</h4>
	    <div class="toolbar">
	      <div class="pull-right">
	        <button type="button" class="btn btn-warning btn-round" data-toggle="modal" data-target="#ModalConfiguración" onclick="versystemsettings(1)">
	            <i class="material-icons">brush</i>Titulo & Color
	        </button>
	        <button type="button" class="btn btn-success btn-round" data-toggle="modal" data-target="#ModalEditarSidebar" onclick="subirsidebar(1)">
	        	<i class="material-icons">add_photo_alternate</i>Sidebar
	        </button>
	      </div>
	    </div>
  </div><!--/.card-header-->

  <div class="card-body">
  </div><!--/.card-body-->	
</div><!--/.Card Principal-->

<!-- Modal Editar-->
<div class="modal fade bd-example-modal-lg" id="ModalConfiguración" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">

	     	<div class="modal-header">
	        <h4 class="modal-title">Editar Titulo & Color</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div><!--/.modal-header-->

        <?php echo form_open('portal/editsystemsettings/',array("id"=>"editsystemsettings")); ?>
        <div class="modal-body">
           	<div class="container-fluid">

	            <div class="form-row">
		            <div class="form-group col-md-12">
		              <label for="titulo" class="control-label">Titulo de Plataforma</label>
		              <input type="text" name="titulo" class="form-control" id="etitulo" maxlength="15" required/>
		            </div>
	            </div><!--/.form-row"-->  
							
							<div class="form-row">
		            <div class="form-group col-md-12">
		              <label for="razonsocial" class="control-label">Color</label>
		              <input type="color" name="color" class="form-control" id="ecolor" list="color" />
										<datalist id="color">
										  <option value="#0275d8">Azul</option>
										  <option value="#5cb85c">Verde</option>
										  <option value="#5bc0de">Azul Claro</option>
										  <option value="#f0ad4e">Naranja</option>
										  <option value="#d9534f">Rojo</option>
										  <option value="#9124a3">Morado</option>
										</datalist>
		            </div>
	            </div><!--/.form-row"-->

	            <input type="text" name="sidebarbackground" class="form-control" id="esidebarbackground" hidden="hidden"/>
	            
            </div><!--/.container-fluid-->
	      </div><!--/.modal-body-->

		    <div class="modal-footer">
	        <button type="submit" class="btn btn-success">
	        	 <i class="material-icons">check</i> Guardar
	      	</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal">
	          <i class="material-icons">close</i> Cancelar
	        </button>
	      </div><!--/.modal-footer-->

	      <?php echo form_close(); ?>
	    </div><!--/.modal-content-->

	</div><!--/.modal-dialog-->
</div><!--/.Modal Editar-->

<!-- Modal ModalEditarSidebar-->
<div class="modal fade" id="ModalEditarSidebar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Editar Sidebar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><!--/.modal-header-->

      <div class="form-row">
      	<div class="form-group col-md-2">
      		<p>&nbsp;&nbsp;&nbsp;&nbsp;Actual:
      			<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">arrow_forward</i>
      		</p>
      	</div>

        <div class="form-group col-md-4">
					<img src="resources/imagenes/sidebar.png" class="img-thumbnail" width="100%">
        </div>

        <div class="form-group col-md-2">
      		<p>&nbsp;&nbsp;&nbsp;&nbsp;Nuevo:
      			<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons">arrow_forward</i>
      		</p>
      	</div>

		 		<div class="form-group col-md-4">
		 			<img id="output_image" class="img-thumbnail" width="60%">
		 		</div>

		 </div> 

     <?php echo form_open_multipart('portal/cambiarsidebar/',array("id"=>"uploadsidebar")); ?>
        <div class="modal-body">

          <div class="container-fluid">

            <div class="form-row">

            	<script type='text/javascript'>
					function preview_image(event) 
					{
						var reader = new FileReader();
						reader.onload = function()
						{
						var output = document.getElementById('output_image');
						output.src = reader.result;
						}
						reader.readAsDataURL(event.target.files[0]);
					}
				</script>

              <div class="col-md-12">
                <span class="btn btn-success btn-round btn-file">
                  <span><i class="material-icons">attach_file</i>&nbsp;Seleccionar Archivo</span>
                  <input type="file" name="userfile" id="archivoimagen" accept="image/jpeg,image/gif,image/png" onchange="preview_image(event)">
                </span>
              </div>

            </div><!--/form-row-->

          </div><!--/.container-fluid--> 

        </div><!--/.modal-body-->

        <div class="modal-footer">
            <button type="submit" class="btn btn-success" id="">
              <i class="material-icons">check</i> Aceptar
            </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">
                <i class="material-icons">close</i> Cancelar
            </button>
        </div><!--/.modal-footer-->
      </form>

    </div><!--/.modal-content-->
  </div><!--/.modal-dialog-->
</div><!--/.Modal ModalEditarSidebar-->