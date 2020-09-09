/*ID Select 2*/

  /*Acta de Finiquito*/
  $('#ffiniquitoserviciostestigo1').select2();
  $('#ffiniquitoserviciostestigo2').select2();
  $('#ffiniquitoserviciosrepcontratista').select2();
  $('#ffiniquitoserviciosentidadcontratista').select2();
  id="identidadasistencia"

/*Funciones VER/EDITAR*/

  //Ver Finiquito
  function ffine(id) {
    var ffiniquitoedi = $('#ffiniquitoedi');
    ffiniquitoedi.attr('action','ffiniquitoservicios/edit/'+id)
    var edfolio = $('#ffiniquitoedi #edfolio');
    var edfecha = $('#ffiniquitoedi #edfecha');
    var edrepcontratista = $('#ffiniquitoedi #edrepcontratista');
    var edentidadcontratista = $('#ffiniquitoedi #edentidadcontratista');
    var edespecialidades = $('#ffiniquitoedi #edespecialidades');
    var edareas = $('#ffiniquitoedi #edareas');
    var edlugar = $('#ffiniquitoedi #edlugar');
    var edtestigo1 = $('#ffiniquitoedi #edtestigo1');
    var edtestigo2 = $('#ffiniquitoedi #edtestigo2');
    var edestatusformato = $('#ffiniquitoedi #edestatusformato')
   

    $.get(baseurl+"ffiniquitoservicios/dataffiniquitoservicios/"+id, function(data){
      var s = JSON.parse(data);
  
      edfolio.val(s.folio);
      edfecha.val(s.fecha);
      edrepcontratista.val(s.repcontratista);
      edentidadcontratista.val(s.entidadcontratista);
      edespecialidades.val(s.especialidades);
      edareas.val(s.areas);
      edlugar.val(s.lugar);
      edtestigo1.val(s.testigo1);
      edtestigo2.val(s.testigo2);
      edestatusformato.val(s.estatusformato);
    });
  }


 //Archivar Finiquito
  function archfiniquito(id) {
    var ffiniquitoserviciosarch = $('#ffiniquitoserviciosarch');
    ffiniquitoserviciosarch.attr('action','ffiniquitoservicios/archivarf/'+id)
    var edestatusformato = $('#ffiniquitoserviciosarch #edestatusformato');

    $.get(baseurl+"ffiniquitoservicios/dataffiniquitoservicios/"+id, function(data){
      var s = JSON.parse(data);

      edestatusformato.val(s.estatusformato);   
    });
  }

  //Desarchivar Finiquito
  function desarchfiniquito(id) {
    var ffiniquitoserviciosdesarch = $('#ffiniquitoserviciosdesarch');
    ffiniquitoserviciosdesarch.attr('action','ffiniquitoservicios/desarchivarf/'+id)
    var edestatusformato = $('#ffiniquitoserviciosdesarch #edestatusformato');

    $.get(baseurl+"ffiniquitoservicios/dataffiniquitoservicios/"+id, function(data){
      var s = JSON.parse(data);

      edestatusformato.val(s.estatusformato);   
    });
  }


//Editar Trabajador
  function lies(id) {
    var listaesedit = $('#listaesedit');
    listaesedit.attr('action','listaentradasalida/edit/'+id)
    var edinombre = $('#listaesedit #edinombre');
    var ediapellidopaterno = $('#listaesedit #ediapellidopaterno');
    var ediapellidomaterno = $('#listaesedit #ediapellidomaterno');
    var edinoimss = $('#listaesedit #edinoimss');
    var edipuesto = $('#listaesedit #edipuesto');
    var ediarea = $('#listaesedit #ediarea');   

    $.get(baseurl+"listaentradasalida/datalistaentradasalida/"+id, function(data){
      var s = JSON.parse(data);
  
      edinombre.val(s.nombre);
      ediapellidopaterno.val(s.apellidopaterno);
      ediapellidomaterno.val(s.apellidomaterno);
      edinoimss.val(s.noimss);
      edipuesto.val(s.puesto);
      ediarea.val(s.area);
    });
  }

$('#id').on('change',function () {
      var id = $('#nombret').val();
            var apellidot = $('#apellidot');
            var areat = $('#areat');
            var noimss = $('#noimss');
            var puesto = $('#puesto');           
            $.get(baseurl+"listaentradasalida/datalistaentradasalida/"+id, function(data){
                  var s = JSON.parse(data);
                  apellidot.val(s.valordetabla);
                  valor2.text(s.valordetabla2);
    });
    
});

//editar area
  function editararea(id) {
    var aedit = $('#aedit');
    aedit.attr('action','listaentradasalida/editarea/'+id)
    var EdNombre = $('#aedit #EdNombre');

    $.get(baseurl+"listaentradasalida/dataarea/"+id, function(data){
      var s = JSON.parse(data);  
      EdNombre.val(s.Nombre);
     
    });
  }

/*function eliminararea(id){ 
    
  swal({   title: "Seguro que quieres hacer esto?", 
     
    text: "Esta acción ya no se podrá deshacer, Así que piénsalo bien.",   
    type: "warning",   
    showCancelButton: true,   
    confirmButtonColor: "#DD6B55",   
    confirmButtonText: "Si, estoy seguro",   
    cancelButtonText: "Cancelar",   
    closeOnConfirm: false,   
    closeOnCancel: false }, 
    function(isConfirm){   
        if (isConfirm) 
    {   
        var deletearea = $('#deletearea');
        deletearea.attr('action','entidades/remove/'+id)
        swal("Account Removed!", "Your account is removed permanently!", "success");   
        } 
        else {     
            swal("Hurray", "Account is not removed!", "error");   
            } });
}
*/

function eliminararea(id) {
    
    var deletearea = $('#deletearea');
    deletearea.attr('action','listaentradasalida/removearea/'+id)
  }

function eliminartrabajador(id) {
    
    var droptrab = $('#droptrab');
    droptrab.attr('action','listaentradasalida/remove/'+id)
  }
function eliminarasistencia(id) {
    
    var deleteasis = $('#deleteasis');
    deleteasis.attr('action','listaentradasalida/removeasistencia/'+id)
  }    

/*ID Select 2*/

  //editar area
  function verempresa(id) {
    var empresaedi = $('#empresaedi');
    empresaedi.attr('action','listaentradasalida/editempresa/'+id)
    var eidentidad = $('#empresaedi #eidentidad');

    $.get(baseurl+"listaentradasalida/dataentidadasistencia/"+id, function(data){

      var s = JSON.parse(data);  
      eidentidad.val(s.identidad);
     
    });
  }