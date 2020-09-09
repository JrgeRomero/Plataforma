/*:::::::  CONFIGURACIÓN SIGEVO  :::::::::::*/
//Configuración SIGEVO
  function versystemsettings(id) {
    
    var editsystemsettings = $('#editsystemsettings');
    editsystemsettings.attr('action','portal/editsystemsettings/'+id)
    var etitulo  = $('#editsystemsettings #etitulo');
    var ecolor  = $('#editsystemsettings #ecolor');
    var esidebarbackground  = $('#editsystemsettings #esidebarbackground');

    $.get(baseurl+"portal/datasystemsettings/"+id, function(data){
      var s = JSON.parse(data);

      etitulo.val(s.titulo);
      ecolor.val(s.color);
      esidebarbackground.val(s.sidebarbackground);
    });
  }

  //Subir Sidebar
  function subirsidebar(id) {
    var uploadsidebar = $ ('#uploadsidebar');
    uploadsidebar.attr('action','portal/cambiarsidebar/'+id)
  }


/*:::::::  ENTIDADES  :::::::::::*/
//Entidades
  function verenti(id) {
    
    var entiedi = $('#entiedi');
    entiedi.attr('action','entidades/edit/'+id)
    var enombre  = $('#entiedi #enombre');
    var ecodigo  = $('#entiedi #ecodigo');
    var erazonsocial  = $('#entiedi #erazonsocial');
    var edireccion  = $('#entiedi #edireccion');
    var erfc  = $('#entiedi #erfc');
    var etelefono  = $('#entiedi #etelefono');
    var ecorreoelectronico  = $('#entiedi #ecorreoelectronico');
    var epaginaweb  = $('#entiedi #epaginaweb');
    var elogo  = $('#entiedi #elogo');
    var edescripcion  = $('#entiedi #edescripcion');

    $.get(baseurl+"entidades/dataentidades/"+id, function(data){
      var s = JSON.parse(data);

      enombre.val(s.nombre);
      ecodigo.val(s.codigo);
      erazonsocial.val(s.razonsocial);
      edireccion.val(s.direccion);
      erfc.val(s.rfc);
      etelefono.val(s.telefono);
      ecorreoelectronico.val(s.correoelectronico);
      epaginaweb.val(s.paginaweb);
      elogo.val(s.logo);
      edescripcion.val(s.descripcion);
    });
  }  

  //Eliminar Entidad
  function eliminarenti(id) {
    
    var entielim = $('#entielim');
    entielim.attr('action','entidades/remove/'+id)
  }

  //Ver Proyecto de Entidad
  function verentiproyecto(id) {
    
    var entiediproyecto = $('#entiediproyecto');
    entiediproyecto.attr('action','entidades/editproyecto/'+id)
    var enocontrato  = $('#entiediproyecto #enocontrato');
    var eproyecto  = $('#entiediproyecto #eproyecto');
    var ecodigoproyecto  = $('#entiediproyecto #ecodigoproyecto');
    var eubicacionproyecto  = $('#entiediproyecto #eubicacionproyecto');
    var edesccontractual  = $('#entiediproyecto #edesccontractual');
    var eimportecontrato  = $('#entiediproyecto #eimportecontrato');
    var eporcentajeanticipo  = $('#entiediproyecto #eporcentajeanticipo');
    var emontoanticipo  = $('#entiediproyecto #emontoanticipo');
    var efechainiciocontractual  = $('#entiediproyecto #efechainiciocontractual');
    var efechaterminocontractual  = $('#entiediproyecto #efechaterminocontractual');
    var eplazocontractual  = $('#entiediproyecto #eplazocontractual');

    $.get(baseurl+"entidades/dataentidades/"+id, function(data){
      var s = JSON.parse(data);

      enocontrato.val(s.nocontrato);
      eproyecto.val(s.proyecto);
      ecodigoproyecto.val(s.codigoproyecto);
      eubicacionproyecto.val(s.ubicacionproyecto);
      edesccontractual.val(s.desccontractual);
      eimportecontrato.val(s.importecontrato);
      eporcentajeanticipo.val(s.porcentajeanticipo);
      emontoanticipo.val(s.montoanticipo);
      efechainiciocontractual.val(s.fechainiciocontractual);
      efechaterminocontractual.val(s.fechaterminocontractual);
      eplazocontractual.val(s.plazocontractual);
    });
  }

  //Subir Logo
  function verlogo(id) {
    var logoadd = $ ('#logoadd');
    logoadd.attr('action','entidades/subirlogo/'+id)
  }

  //Funciones de Ejercicios Fiscales y Convenios
    function agregarejercicio(id) {

      var ejeragregar = $ ('#ejeragregar');
      ejeragregar.attr('action','entidades/addejercicio')
      var porcen = $('#ejeragregar #porcen');

      document.getElementById('identidadejerciciofiscal').value=id;
      $.get(baseurl+"entidades/dataentidades/"+id, function(data){
        var s = JSON.parse(data);
        porcen.val(s.porcentajeanticipo);
       }); 
    }

    function anticipoejercicio(){
       var v1 = document.getElementById("monto").value;
       var v2 = document.getElementById("porcen").value;
       var anej = (v1*v2)/100;
        document.getElementById("poranticipo").value = anej;
    }

    function verejercicio(id) {
      
      var editejer = $('#editejer');
      editejer.attr('action','entidades/editejercicio/'+id)
      var ejnombre = $('#editejer #ejnombre');
      var ejanio = $('#editejer #ejanio');
      var ejporcentaje = $('#editejer #ejporcentaje');
      var ejmonto = $('#editejer #ejmonto');
      var ejporanticipo = $('#editejer #ejporanticipo');
      
      $.get(baseurl+"entidades/dataejercicio/"+id, function(data){
        var s = JSON.parse(data);

        ejnombre.val(s.nombre);
        ejanio.val(s.anio);
        ejporcentaje.val(s.porcentaje);
        ejmonto.val(s.monto);
        ejporanticipo.val(s.montoanticipo);
      });   
    }

    function anticipoejercicioedit(){
       var v1 = document.getElementById("ejmonto").value;
       var v2 = document.getElementById("ejporcentaje").value;
       var anej = (v1*v2)/100;
        document.getElementById("ejporanticipo").value = anej;
    }

    function eliminarejercicio(id) {
      
      var ejerelim = $('#ejerelim');
      ejerelim.attr('action','entidades/removeejercicio/'+id)
    }

    function agregarconvenio(id) {
      var convagregar = $ ('#convagregar');
      convagregar.attr('action','entidades/addconvenio')
      
      document.getElementById('identidadconvenio').value=id;  
    }

    function verconvenio(id) {
      
      var editconv = $('#editconv');
      editconv.attr('action','entidades/editconvenio/'+id)
      var convnombreconvenio = $ ('#editconv #convnombreconvenio');
      var convtipoconvenio = $ ('#editconv #convtipoconvenio');
      var convdescripcion = $ ('#editconv #convdescripcion');
      var convfechaelaboracion = $ ('#editconv #convfechaelaboracion');
      var convajustemonto = $ ('#editconv #convajustemonto');
      var convajustetiempoinicio = $ ('#editconv #convajustetiempoinicio');
      var convajustetiempofin = $ ('#editconv #convajustetiempofin');
      var convajustemontocostos = $ ('#editconv #convajustemontocostos');
      
      $.get(baseurl+"entidades/dataconvenio/"+id, function(data){
        var s = JSON.parse(data);

        convnombreconvenio.val(s.nombreconvenio);
        convtipoconvenio.val(s.tipoconvenio);
        convdescripcion.val(s.descripcion);
        convfechaelaboracion.val(s.fechaelaboracion);
        convajustemonto.val(s.ajustemonto);
        convajustetiempoinicio.val(s.ajustetiempoinicio);
        convajustetiempofin.val(s.ajustetiempofin);
        convajustemontocostos.val(s.ajustemontocostos);
      });   
    }

    function eliminarconvenio(id) {
      
      var elimconv = $('#elimconv');
      elimconv.attr('action','entidades/removeconvenio/'+id)
    }


/*:::::::  DATOS PROYECTO   :::::::::::*/
//Datos de Proyecto
  function verdatosproyecto(id) {
    
    var editdatosproyecto = $('#editdatosproyecto');
    editdatosproyecto.attr('action','datosproyecto/edit/'+id)
    var didentidadproveedor  = $('#editdatosproyecto #didentidadproveedor');
    var didentidadcliente  = $('#editdatosproyecto #didentidadcliente');
    var didentidadproyecto  = $('#editdatosproyecto #didentidadproyecto');

    $.get(baseurl+"datosproyecto/datadatosproyecto/"+id, function(data){
      var s = JSON.parse(data);

      didentidadproveedor.val(s.identidadproveedor);
      didentidadcliente.val(s.identidadcliente);
      didentidadproyecto.val(s.identidadproyecto);
    });
  }


/*:::::::  USUARIOS  :::::::::::*/
//Usuarios
  function verusr(id) {
    var usrcom = $('#usrcom');
    usrcom.attr('action','authuser/edit/'+id)
    var ecusername = $('#usrcom #ecusername');
    var ecname = $('#usrcom #ecname');
    var eclastname = $('#usrcom #eclastname');
    var ecemail = $('#usrcom #ecemail');
    var ectratamiento = $('#usrcom #ectratamiento');
    var ecpuesto = $('#usrcom #ecpuesto');
    var ecentidad = $('#usrcom #ecentidad');
    var ectelefono = $('#usrcom #ectelefono');
    var ecdireccion = $('#usrcom #ecdireccion');
    var ecubicaciontrabajo = $('#usrcom #ecubicaciontrabajo');
    var ecdepartamento = $('#usrcom #ecdepartamento');
    var ecgenero = $('#usrcom #ecgenero');
    $.get(baseurl+"authuser/datauser/"+id, function(data){
          var s = JSON.parse(data);
          ecusername.val(s.username);
          ecname.val(s.name);
          eclastname.val(s.lastname);
          ecemail.val(s.email);
          ectratamiento.val(s.tratamiento);       
          ecpuesto.val(s.puesto);
          ecentidad.val(s.entidad);
          ectelefono.val(s.telefono);
          ecdireccion.val(s.direccion);
          ecubicaciontrabajo.val(s.ubicaciontrabajo);
          ecdepartamento.val(s.departamento);
          ecgenero.val(s.genero);
      });
  }

  //Eliminar Usuario
  function eliminarusr(id) {
    
    var userelim = $('#userelim');
    userelim.attr('action','authuser/remove/'+id)
  }


  //Niveles
    function verniv(user_id) {
      var nivedi = $('#nivedi');
      nivedi.attr('action','authuser/edit_usergroup/'+user_id)
      var euser_id = $('#nivedi #euser_id');
      var egroup_id = $('#nivedi #egroup_id');
      
      $.get(baseurl+"authuser/datanivel/"+user_id, function(data){
        var s = JSON.parse(data);
            
            euser_id.val(s.user_id);
            egroup_id.val(s.group_id);
        });
    }


/*:::::::  PUESTOS  :::::::::::*/
//Puestos
  function verpuesto(id) {
    var puesedi = $('#puesedi');
    puesedi.attr('action','puestos/edit/'+id)
    var pnombre = $('#puesedi #pnombre');
    var pdescripcion = $('#puesedi #pdescripcion');

    $.get(baseurl+"puestos/datapuesto/"+id, function(data){
      var s = JSON.parse(data);

      pnombre.val(s.nombre);
      pdescripcion.val(s.descripcion);
    });
  }

  function eliminarpuesto(id) {
    
    var puestoelim = $('#puestoelim');
    puestoelim.attr('action','puestos/remove/'+id)
  }


/*:::::::  DEPARTAMENTOS  :::::::::::*/
//Departamentos
  function verdepartamento(id) {
    var deptedi = $('#deptedi');
    deptedi.attr('action','departamentos/edit/'+id)
    var dnombre = $('#deptedi #dnombre');
    var ddescripcion = $('#deptedi #ddescripcion');

    $.get(baseurl+"departamentos/datadepartamento/"+id, function(data){
      var s = JSON.parse(data);

      dnombre.val(s.nombre);
      ddescripcion.val(s.descripcion);
    });
  }

  function eliminardepartamento(id) {
    
    var deptoelim = $('#deptoelim');
    deptoelim.attr('action','departamentos/remove/'+id)
  }


/*:::::::  UBICACIONES  :::::::::::*/
//Ubicaciones
  function verubicacion(id) {
    var ubedi = $('#ubedi');
    ubedi.attr('action','ubicaciones/edit/'+id)
    var unombre = $('#ubedi #unombre');
    var udescripcion = $('#ubedi #udescripcion');
    var udireccion = $('#ubedi #udireccion');

    $.get(baseurl+"ubicaciones/dataubicacion/"+id, function(data){
      var s = JSON.parse(data);

      unombre.val(s.nombre);
      udescripcion.val(s.descripcion);
      udireccion.val(s.direccion);
    });
  }

  function eliminarubicacion(id) {
    
    var ubelim = $('#ubelim');
    ubelim.attr('action','ubicaciones/remove/'+id)
  }