
  
  
<!--CSS editor de texto-->


<div class="card">
  <div class="card-header card-header-success card-header-icon">
    <div class="card-icon">
      <i class="material-icons">folder</i>
    </div>
    <h3 class="card-title">Repositorio de Información</h3>
  </div>
  <div class="card-body">
    <div class="toolbar">
      <!--Here you can write extra buttons/actions for the toolbar-->
    </div>
    <div class="row">
       <div class="col-sm-12">
        <!--   Main Part   -->
        <p class="card-text">
          <!--editor de texto-->
            <div class="row">
              <div class="col-sm-3">
                <div class="row">
                  <div class="titlefolders col-sm-12">
                    <h3>Lista de Carpetas</h3>
                  </div>
                  <div class="easy-tree col-sm-12">
                      <ul>
                        <?php foreach ($root as $r) { ?>
                          <li id="<?php echo $r['id']; ?>"> <?php echo $r['nombre']; ?>
                              <ul>
                                <?php foreach ($this->Carpeta_model->carpetaslevel(2,$r['id']) as $c) { ?>
                                  <li id="<?php echo $c['id']; ?>"><?php echo $c['nombre']; ?>
                                      <ul>
                                        <?php foreach ($this->Carpeta_model->carpetaslevel(3,$c['id']) as $f) { ?>
                                          <li id="<?php echo $f['id']; ?>"><?php echo $f['nombre']; ?>
                                            <ul>
                                              <?php foreach ($this->Carpeta_model->carpetaslevel(4,$f['id']) as $g) { ?>
                                                <li id="<?php echo $g['id']; ?>"><?php echo $g['nombre']; ?>
                                                  <ul>
                                                    <?php foreach ($this->Carpeta_model->carpetaslevel(5,$g['id']) as $h) { ?>
                                                      <li id="<?php echo $h['id']; ?>"><?php echo $h['nombre']; ?></li>
                                                    <?php } ?> 
                                                  </ul>
                                                </li>
                                                <?php } ?> 
                                            </ul>
                                          </li>
                                          <?php } ?> 
                                      </ul>
                                  </li>
                                  <?php } ?>  
                              </ul>                            
                          </li>                          
                        <?php } ?>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-9">
                <div class="row">
                  <div class="titledocs col-sm-12">
                    <div class="row">
                      <div class="col-sm-8">
                        
                        <h3><i class="fa fa-folder-o"></i> <span id="namefolder"></span></h3>
                      </div>
                      <div class="col-sm-4">
                        <input type="search" id="buscararchivos" class="form-control" placeholder="Buscar" />
                      </div>
                    </div> 
                  </div>
                  <div class="listadocs col-sm-12">
                    <table id="tarchivos" class="table table-borderless table-hover table-sm">
                      <thead>
                        <tr>
                            <th>
                                <div class="row">
                                    <div class="col-sm-6 col-md-4" id="toolsfolder">
                                       
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <div class="row">
                                    <div class="col-sm-8 col-md-9">
                                        Nombre
                                    </div>
                                    <div class="col-sm-4 col-md-3 td-actions text-right" id="toolsdocs">

                                    </div>
                                    <div class="col-sm-8 col-md-9">
                                        Usuario | Tamaño | Fecha
                                    </div>
                                </div>
                            </th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>   
            </div>
          <!--editor de texto-->
        </p>
       </div>
    </div><!--/.row-->
  </div>
  <div class="card-footer">
  <!--Here you can write extra buttons/actions for the footer-->
    
  </div>
</div>
  
<div class="modal fade" id="NuevoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar:<b> Documento</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open_multipart('documento/newDoc/', array('class'=>'formdoc')); ?>
      <div class="modal-body">

          <div class="fileinput fileinput-new text-center" data-provides="fileinput">
              <div class="fileinput-new thumbnail img-raised">
                  
              </div>
              <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
              <div>
                  <span class="btn btn-raised btn-round btn-default btn-file">
                      <span class="fileinput-new">Selecciona el documento</span>
                      <span class="fileinput-exists">Cambiar</span>
                      <input type="file" name="documento" />
                  </span>
                  <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Borrar</a>
              </div>
          </div>

          <div class="form-group">
            <label for="formato" class="col-form-label">Formato:</label>
            <select name="formato" id="formato" class="form-control">
              <option value="0">Ninguno</option>
                <?php foreach ($formatos as $f) { ?>
                  <option value="<?php echo $f['id']; ?>"><?php echo $f['nombre']; ?></option>
                <?php } ?> 
            </select>
          </div>
          <div class="form-group">
            <label for="asunto" class="col-form-label">Asunto:</label>
            <input type="text" name="asunto" class="form-control">
          </div>
          <div class="form-group">
            <label for="observaciones" class="col-form-label">Descripcion:</label>
            <textarea name="observaciones" class="form-control" id="observaciones"></textarea>
          </div>

      </div>
      <div class="modal-footer">
        <input type="hidden" name="carpetadoc"  id="carpetadoc"/>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<div class="modal fade" id="NuevaCarpeta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar:<b> Carpeta</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo form_open('carpeta/add/', array('class'=>'formcarp')); ?>
      <div class="modal-body">

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" id="nombre" />
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Descripción:</label>
            <textarea name="descripcion" class="form-control" id="adescripcion"></textarea>
          </div>

      </div>
      <div class="modal-footer">
        <input type="hidden" name="carpetaid"  id="carpetaid"/>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>

<div class="modal fade" id="confirmDelete" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Borrar  </h4>
      </div>
      <?php echo form_open_multipart('carpetas/remove', array('class'=>'jsEraser')); ?>
      <div class="modal-body">
        <input type="hidden" name="carpetaideraser" id="carpetaideraser">
        <p>¿Esta seguro de borrar esta carpeta y todo su contenido?</p>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger"> Borrar</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>

<div class="modal fade" id="mfileview" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
  <div class="modal-dialog modal-full">
    <div class="modal-content" id="filecontent">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">
        <div id="vistaprevia"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>
<div class="modal fade" id="" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">
        <div >
          <div class="fileinput fileinput-new text-center" data-provides="fileinput">
              <div class="fileinput-new thumbnail img-raised">
                  
              </div>
              <div>
                  <span class="btn btn-raised btn-round btn-default btn-file">
                      <span class="fileinput-new">Selecciona el documento</span>
                      <span class="fileinput-exists">Cambiar</span>
                      <input type="file" name="files" id="files" multiple />
                  </span>
                  <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Borrar</a>
              </div>
          </div>
          <input type="hidden" name="capetaupdate" id="capetaupdate">
          <div class="form-group">
            <label for="formatos" class="col-form-label">Formato:</label>
            <select name="formatos" id="formatos" class="form-control">
              <option value="0">Ninguno</option>
                <?php foreach ($formatos as $f) { ?>
                  <option value="<?php echo $f['id']; ?>"><?php echo $f['nombre']; ?></option>
                <?php } ?> 
            </select>
          </div>
          
        </div>
      </div>
      <div class="modal-footer">
        <input id="image_upload" class="btn btn-default" value="submit" type="submit" >
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>
<div class="modal fade" id="mfilemultiple" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <?php echo form_open_multipart('documento/upload', array('class'=>'jsUpload')); ?>
      <div class="modal-body">
        
          <div class="fileinput fileinput-new text-center" data-provides="fileinput">
              <div>
                  <span class="btn btn-raised btn-round btn-default btn-file">
                      <span class="fileinput-new">Selecciona el documento</span>
                      <span class="fileinput-exists">Cambiar</span>
                      <input type="file" name="files[]" id="files" multiple />
                  </span>
                  <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Borrar</a>
              </div>
          </div>
          <input type="hidden" name="carpetaupdate" id="carpetaupdate">
          <div class="form-group">
            <label for="formatos" class="col-form-label">Formato:</label>
            <select name="formatos" id="formatos" class="form-control">
              <option value="0">Ninguno</option>
                <?php foreach ($formatos as $f) { ?>
                  <option value="<?php echo $f['id']; ?>"><?php echo $f['nombre']; ?></option>
                <?php } ?> 
            </select>
          </div>
          <div class="form-group">
            <label for="observaciones" class="col-form-label">Descripcion:</label>
            <textarea name="observaciones" class="form-control" id="observaciones"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <input id="image_upload" class="btn btn-default" value="submit" type="submit" >
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>