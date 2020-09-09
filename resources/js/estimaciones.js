
$('#inputcodigo').select2();

function importetotal() {
	var inputprecio = $('#inputprecio').val();
	var inputcantidad = $('#inputcantidad').val();
	var inputimporte = $('#inputimporte');
	if (inputprecio=='' || inputcantidad=='') {
		inputimporte.empty().val( '0.00' )
	}else{

		inputimporte.empty().val( parseFloat(inputprecio) * parseFloat(inputcantidad) );
	}
	
}

$('#inputcodigo').on('change',function () {
	var inputcodigo = $('#inputcodigo').val();
	var inputprecio = $('#inputprecio');
	var textconcepto = $('#textconcepto');
	$.get(baseurl+"catalogoconceptos/search/"+inputcodigo, function(data){
		var s = JSON.parse(data);
		inputprecio.val(s.preciounitario);
		textconcepto.text(s.concepto);
		importetotal();
    });
    
});

$('#inputcantidad').on('keyup', function () {
	importetotal();	
})