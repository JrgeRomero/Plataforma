//Escrito
  
  /*ID Select 2*/ //Escrito

    //Select 2 Escrito
    $('#fesremitente').select2();
    $('#fesdestinatario').select2();

  /*Funciones VER/EDITAR*/ //Escrito

    //VerEscrito
    function veresc(id) {
      var escfoedi = $('#escfoedi');
      escfoedi.attr('action','fescrito/edit/'+id)
      var edestinatario = $('#escfoedi #edestinatario');
      var eremitente = $('#escfoedi #eremitente');
      var efolio = $('#escfoedi #efolio');
      var efecha = $('#escfoedi #efecha');
      var elugar = $('#escfoedi #elugar');
      var easunto = $('#escfoedi #easunto');
      var econtenido = tinymce.get('loadcontenido');
      var econcopiapara = $('#escfoedi #econcopiapara');
      var eelaboro = $('#escfoedi #eelaboro');
      var eusuariomodificacion = $('#escfoedi #eusuariomodificacion');
      var eestatusformato = $('#escfoedi #eestatusformato');

      $.get(baseurl+"fescrito/dataescrito/"+id, function(data){
        var s = JSON.parse(data);

        edestinatario.val(s.destinatario);
        eremitente.val(s.remitente);
        efolio.val(s.folio);
        efecha.val(s.fecha);
        elugar.val(s.lugar);
        easunto.val(s.asunto);
        econtenido.setProgressState(1);
        window.setTimeout(function() {
          econtenido.setProgressState(0);
          econtenido.setContent(s.contenido);
        }, 3000);
        econcopiapara.val(s.concopiapara);
        eelaboro.val(s.elaboro);
        eusuariomodificacion.val(s.usuariomodificacion);
        eestatusformato.val(s.estatusformato);
      });
    }

    //Archivar Escrito
    function archesc(id) {
      var escfoarch = $('#escfoarch');
      escfoarch.attr('action','fescrito/archivar/'+id)
      var eestatusformato = $('#escfoarch #eestatusformato');

      $.get(baseurl+"fescrito/dataescrito/"+id, function(data){
        var s = JSON.parse(data);

        eestatusformato.val(s.estatusformato);
      });
    }

    //Desarchivar Escrito
    function desarchesc(id) {
      var escfodesarch = $('#escfodesarch');
      escfodesarch.attr('action','fescrito/desarchivar/'+id)
      var eestatusformato = $('#escfodesarch #eestatusformato');

      $.get(baseurl+"fescrito/dataescrito/"+id, function(data){
        var s = JSON.parse(data);

        eestatusformato.val(s.estatusformato);
      });
    }

//Minuta Estándar
  
  /*ID Select 2*/ //Minuta Estándar

    //Select 2 Minuta Estándar
    $('#logoderfminutum').select2();

  /*Funciones VER/EDITAR*/ //Minuta Estándar

    //Ver Minuta Estándar
    function vermin(id) {
      var minfoedi = $('#minfoedi');
      minfoedi.attr('action','fminutum/edit/'+id)
      var edasunto = $('#minfoedi #edasunto');
      var edtema = $('#minfoedi #edtema');
      var edcontenido = tinyMCE.get('.edcontenido');
      var edlugar = $('#minfoedi #edlugar');
      var edtramo = $('#minfoedi #edtramo');
      var edagenda = $('#minfoedi #edagenda');
      var edfolio = $('#minfoedi #edfolio');
      var edfechainicio = $('#minfoedi #edfechainicio');
      var edhorainicio = $('#minfoedi #edhorainicio');
      var edfechaproxima = $('#minfoedi #edfechaproxima');
      var edhoraprogramada = $('#minfoedi #edhoraprogramada');
      var edhoracierre = $('#minfoedi #edhoracierre');
      var elogoder = $('#minfoedi #elogoder');
      $.get(baseurl+"fminutum/dataminuta/"+id, function(data){
            var s = JSON.parse(data);
            edasunto.val(s.asunto);
            edtema.val(s.tema);
            edcontenido.setProgressState(1);
            window.setTimeout(function() {
              edcontenido.setProgressState(0);
              edcontenido.setContent(s.contenido);
            }, 3000);
            edlugar.val(s.lugar);
            edtramo.val(s.tramo);
            edagenda.val(s.agenda);
            edfolio.val(s.folio);
            edfechainicio.val(s.fechainicio);
            edhorainicio.val(s.horainicio);
            edfechaproxima.val(s.fechaproxima);
            edhoraprogramada.val(s.horaprogramada);
            edhoracierre.val(s.horacierre);
            elogoder.val(s.logoder);
        });
    }

//Nota Informativa
  
  /*ID Select 2*/ //Nota Informativa

    /*Nota Informativa*/
    $('#fnielaboro').select2();
    $('#fnivobo').select2();
    $('#fnipara').select2();

  /*Funciones VER/EDITAR*/ //Nota Informativa

    //Ver Nota Informativa
    function notinfe(id) {
      var fnotaedi = $('#fnotaedi');
      fnotaedi.attr('action','fnotainformativa/edit/'+id)
      var nifolio = $('#fnotaedi #nifolio');
      var ifecha = $('#fnotaedi #ifecha');
      var ilugar = $('#fnotaedi #ilugar');
      var iproyecto = $('#fnotaedi #iproyecto');
      var iasunto = $('#fnotaedi #iasunto');
      var npara = $('#fnotaedi #npara');
      var nelaboro = $('#fnotaedi #nelaboro');
      var nvistobueno = $('#fnotaedi #nvistobueno');
      var ed= tinymce.get('loadcontenido');
      $.get(baseurl+"fnotainformativa/datafnotainformativa/"+id, function(data){
            var s = JSON.parse(data);
            nifolio.val(s.folio);
            ifecha.val(s.fecha);   
            ilugar.val(s.lugar);
            iproyecto.val(s.proyecto);
            iasunto.val(s.asunto);
            npara.val(s.para);
            nelaboro.val(s.elaboro);
            nvistobueno.val(s.vistobueno);

            ed.setProgressState(1);
            window.setTimeout(function() {
              ed.setProgressState(0);
              ed.setContent(s.descripcion);
            }, 3000);
        });
    }

    //Archivar Nota Informativa
    function archnotainf(id) {
      var fnotainfarch = $('#fnotainfarch');
      fnotainfarch.attr('action','fnotainformativa/archivarfnota/'+id)
      var edestatusformato = $('#fnotainfarch #edestatusformato');

      $.get(baseurl+"fnotainformativa/datanoftainformativa/"+id, function(data){
        var s = JSON.parse(data);

        edestatusformato.val(s.estatusformato);   
      });
    }

    //Desarchivar Nota Informativa
    function desarchnotainf(id) {
      var fnotainformativadesarch = $('#fnotainformativadesarch');
      fnotainformativadesarch.attr('action','fnotainformativa/desarchivarfnota/'+id)
      var edestatusformato = $('#fnotainformativadesarch #edestatusformato');

      $.get(baseurl+"fnotainformativa/datanoftainformativa/"+id, function(data){
        var s = JSON.parse(data);

        edestatusformato.val(s.estatusformato);   
      });
    }    

/*::::::::::::::::::::::::::EXTRA:::::::::::::::::::::::::*/

//BoletínInformativo

  /*Funciones VER/EDITAR*/ //BoletínInformativo
    function verbfe(id) {
      var bolfoedi = $('#bolfoedi');

      bolfoedi.attr('action','edit/'+id)
      var iasunto = $('#bolfoedi #iasunto');
      var edescripcion = $('#bolfoedi #tdescripcion');
      var ifecha = $('#bolfoedi #ifecha');

      $.get(baseurl+"fboletin/databoletin/"+id, function(data){
            var s = JSON.parse(data);

            iasunto.val(s.asunto);
            $('#tdescripcion').text($('#tdescripcion').Editor('setText', s.descripcion));

            ifecha.val(s.fecha);
            Selectespec(s.especialidad);
            Selectelaboro(s.elaboro);
            Selectreviso(s.reviso);
            Selectaprobo(s.aprobo);
        });
    }

    function Verpdfboletin(id) {
      var pdf = $('#pdf');
      pdf.empty();
      $.get(baseurl+"fboletin/ejemplopdf/"+id, function(data){
        pdf.append(data);  
      });
    }

/*ID Select 2*/
  /*Boletín*/
  $('#sediespe').select2();
  $('#sediela').select2();
  $('#sedirev').select2();
  $('#sediapr').select2();

   /*Nota checklist*/
  $('#elaboro').select2();
  $('#recibio').select2();
  $('#enterado').select2(); 