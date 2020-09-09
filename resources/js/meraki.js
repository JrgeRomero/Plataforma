// Funcion para Editar cliente
function upcliente(id){
    var updatecliente = $('#updatecliente');
    updatecliente.attr('action','cliente/edit/'+id)
    var editnombre = $('#updatecliente #editnombre');
    var editap = $('#updatecliente #editap');
    var editam = $('#updatecliente #editam');
    var editfn = $('#updatecliente #editfn');
    var editemp = $('#updatecliente #editemp');
    var editfi = $('#updatecliente #editfi');
    var edittel = $('#updatecliente #edittel');
    var editcorr = $('#updatecliente #editcorr');
    var editrfc = $('#updatecliente #editrfc');
    var editpago = $('#updatecliente #editpago');
    var editdirec = $('#updatecliente #editdirec');
    $.get(baseurl+"cliente/datafcliente/"+id, function(data){
    var s = JSON.parse(data);
    editnombre.val(s.nombre);
    editap.val(s.apaterno);
    editam.val(s.amaterno);
    editfn.val(s.fnacimiento);
    editemp.val(s.empresa);
    editfi.val(s.finicio);
    edittel.val(s.telefono);
    editcorr.val(s.correo);
    editrfc.val(s.rfc);
    editpago.val(s.tipopago);
    editdirec.val(s.direccion);
    });
}

//funcion eliminar cliente
function eliminarcliente(id) {
    
    var dropcliente = $('#dropcliente');
    dropcliente.attr('action','cliente/remove/'+id)
  }
//////////////********** Funciones para el modulo de computadoras
function updatecompu(id){
  var updatecomputadora = $('#updatecomputadora');
  updatecomputadora.attr('action','computadora/edit/'+id)

  var edittipoc = $('#updatecomputadora #edittipoc');
  var edithd = $('#updatecomputadora #edithd');
  var editram = $('#updatecomputadora #editram');
  var editproce = $('#updatecomputadora #editproce');
  var editsoac = $('#updatecomputadora #editsoac');
  var editsonu = $('#updatecomputadora #editsonu');
  var editsoftware = $('#updatecomputadora #editsoftware');
  var editdesc = $('#updatecomputadora #editdesc');


  $.get(baseurl+"computadora/datafcomputadora/"+id, function(data){
      var v = JSON.parse(data);
      edittipoc.val(v.tipoc);
      edithd.val(v.hd);
      editram.val(v.ram);
      editproce.val(v.procesador);
      editsoac.val(v.soac);
      editsonu.val(v.sonu);
      editsoftware.val(v.software);
      editdesc.val(v.desc);

  });

}
//funcion eliminar computadora
function eliminarcomputadora(id) {
    
  var dropcomputadora = $('#dropcomputadora');
  dropcomputadora.attr('action','computadora/remove/'+id)
}
