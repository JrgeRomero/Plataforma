//TinyMCE
  tinymce.init({
    selector: "#savecontenido",theme: "modern",width: 960,height: 300,
    relative_urls: false,
    remove_script_host: false,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
   ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
   image_advtab: true ,
   
   external_filemanager_path: baseurl+"resources/filemanager/filemanager/",
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : baseurl+"resources/filemanager/filemanager/plugin.min.js"}
 });

  tinymce.init({

    selector: "#loadcontenido",theme: "modern",width: 960,height: 300,
    relative_urls: false,
    remove_script_host: false,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
   ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
   image_advtab: true ,
   
   external_filemanager_path: baseurl+"resources/filemanager/filemanager/",
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : baseurl+"resources/filemanager/filemanager/plugin.min.js"}
 });

//DataTables
$(document).ready(function() {
	$('#datatable').DataTable( {
		dom : 'frtip',
		/* Enable:
		    B - Buttons
		    l - length changing input control
		    f - filtering input
		    t - The table!
		    i - Table information summary
		    p - pagination control
		    r - processing display element
    		S - Select
		*/
		fixedHeader:   true,
		fixedColumns:  false,
		lengthChange:  false,
		responsive :   true,
		paging:        true,
		/*fixedColumns:   {
            leftColumns: 2
        },
        */
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Detalles: '+data[0];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
	    },
	    lengthMenu: [
	        [ -1, 2, 10, 25, 50, 100,],
	        [ 'todos los','2','10', '25', '50', '100',]
	    ],
	    buttons: ['colvis', 'pageLength', 'copy', 'excel', 'print'],
	    language: {
	        processing:     "Procesando...",
	        search:         "Buscar:",
	        lengthMenu:    "Mostrar _MENU_ registros",
	        info:           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
	        infoEmpty:      "Mostrando registros del 0 al 0 de un total de 0 registros",
	        infoFiltered:   "(filtrado de un total de _MAX_ registros)",
	        infoPostFix:    "",
	        loadingRecords: "Cargando...",
	        zeroRecords:    "No se encontraron resultados",
	        emptyTable:     "Ningún dato disponible en esta tabla",
	        paginate: {
	            first:      "Primero",
	            previous:   "Anterior",
	            next:       "Siguiente",
	            last:       "Último"
	        },
	        aria: {
	            sortAscending:  ": Activar para ordenar la columna de manera ascendente",
	            sortDescending: ": Activar para ordenar la columna de manera descendente"
	        },

	        buttons: {
	            colvis: 'Mostrar Columnas',
	            pageLength: 'Mostrar # registros',
	            copy: 'Copiar',
	            excel: 'Excel',
	            print: 'Imprimir',
	           copySuccess: {
	                1: "Copiada una fila al portapapeles",
	                _: "Copiadas %d filas al portapapeles"
	             },
	            copyTitle: 'Copiado al portapapeles',
	            copyKeys: 'Presione <i>ctrl</i> o <i>\u2318</i> + <i>C</i> para copiar la tabla<br>al portapapeles.<br><br>Para cancelar, de click en este mesaje o prsione la tecla Esc.'
	        }
	    },
	} );
} );	

//EasyTree
$('.easy-tree').EasyTree({
    addable: true,
    editable: true,
    deletable: true
});

//Tooltip
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

//FullCalendar
$('#calendar').fullCalendar({
  weekends: false // will hide Saturdays and Sundays
});

//DateTimePicker
$('.datetimepicker1').datetimepicker({
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
    }
});

//Material Bootstrap
$(document).ready(function(){
    if($('.card-header.card-chart').length != 0){
    md.initDashboardPageCharts();
    }

    if($('#websiteViewsChart').length != 0){
    md.initDocumentationCharts();
    }

    
      if($('.datetimepicker').length != 0){
      md.initFormExtendedDatetimepickers();
      }
      if($('#fullCalendar').length != 0){
      md.initFullCalendar();
      }

      if($('.slider').length != 0){
        md.initSliders();
      }

      //  Activate the tooltips
      $('[data-toggle="tooltip"]').tooltip();

      // Activate Popovers
      $('[data-toggle="popover"]').popover();

      // Vector map
      if($('#worldMap').length != 0){
      md.initVectorMap();
      }

      setFormValidation('#RegisterValidation');
      function setFormValidation(id) {
          $(id).validate({
              highlight: function(element) {
                  $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
                  $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
              },
              success: function(element) {
                  $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
                  $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
              },
              errorPlacement : function(error, element) {
                  $(element).append(error);
              },
          });
      }
});
