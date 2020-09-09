//AutoFrenteDeObra
  
  /*ID Select 2*/ //AutoFrenteDeObra

    //Select2 AutoFrenteDeObra
    $('#fautfoentcontratista').select2();
    $('#fautfofirmacontratista').select2();
    $('#fautfofirmavobo').select2();

  /*Funciones VER/EDITAR*/ //AutoFrenteDeObra

    //Ver AutoFrenteDeObra
    function verfautofrentedeobra(id) {
      var fautofrenteobraedi = $('#fautofrenteobraedi');
      fautofrenteobraedi.attr('action','fautofrentedeobra/edit/'+id)
      var afolio = $('#fautofrenteobraedi #afolio');
      var acontratista = $('#fautofrenteobraedi #acontratista');
      var afecha = $('#fautofrenteobraedi #afecha');
      var apartida = $('#fautofrenteobraedi #apartida');
      var ed = tinymce.get('loadcontenido');
      var arevproyecto = $('#fautofrenteobraedi #arevproyecto');
      var arevespecificaciones = $('#fautofrenteobraedi #arevespecificaciones');
      var arevfisica = $('#fautofrenteobraedi #arevfisica');
      var apersonalinvolucrado = $('#fautofrenteobraedi #apersonalinvolucrado');
      var aandamiosescaleras = $('#fautofrenteobraedi #aandamiosescaleras');
      var arevcampo = $('#fautofrenteobraedi #arevcampo');
      var aanexocroquis = $('#fautofrenteobraedi #aanexocroquis');
      var aanexoprocedimientos = $('#fautofrenteobraedi #aanexoprocedimientos');
      var aanexocertificados = $('#fautofrenteobraedi #aanexocertificados');
      var aanexodescripcion = $('#fautofrenteobraedi #aanexodescripcion');
      var aanexomanualseguridad = $('#fautofrenteobraedi #aanexomanualseguridad');
      var afirmacontratista = $('#fautofrenteobraedi #afirmacontratista');
      var afirmavobo = $('#fautofrenteobraedi #afirmavobo');
      var afechacreacion = $('#fautofrenteobraedi #afechacreacion');
      var afechamodificacion = $('#fautofrenteobraedi #afechamodificacion');
      var ausuariocreacion = $('#fautofrenteobraedi #ausuariocreacion');
      var ausuariomodificacion = $('#fautofrenteobraedi #ausuariomodificacion');
      var aestatusformato = $('#fautofrenteobraedi #aestatusformato');

      $.get(baseurl+"fautofrentedeobra/datafautofrentedeobra/"+id, function(data){
        var s = JSON.parse(data);

        afolio.val(s.folio);
        acontratista.val(s.contratista);
        afecha.val(s.fecha);
        apartida.val(s.partida);
        arevproyecto.val(s.revproyecto);
        arevespecificaciones.val(s.revespecificaciones);
        arevfisica.val(s.revfisica);
        apersonalinvolucrado.val(s.personalinvolucrado);
        aandamiosescaleras.val(s.andamiosescaleras);
        arevcampo.val(s.revcampo);
        aanexocroquis.val(s.anexocroquis);
        aanexoprocedimientos.val(s.anexoprocedimientos);
        aanexocertificados.val(s.anexocertificados);
        aanexodescripcion.val(s.anexodescripcion);
        aanexomanualseguridad.val(s.anexomanualseguridad);
        afirmacontratista.val(s.firmacontratista);
        afirmavobo.val(s.firmavobo);
        afechacreacion.val(s.fechacreacion);
        afechamodificacion.val(s.fechamodificacion);
        ausuariocreacion.val(s.usuariocreacion);
        ausuariomodificacion.val(s.usuariomodificacion);
        aestatusformato.val(s.estatusformato);

        ed.setProgressState(1);
        window.setTimeout(function() {
          ed.setProgressState(0);
          ed.setContent(s.contenido);
        }, 3000);

      });
    }

    //Archivar AutoFrenteDeObra
    function archfautofrentedeobra(id) {
      var fautofrenteobraarch = $('#fautofrenteobraarch');
      fautofrenteobraarch.attr('action','fautofrentedeobra/archivar/'+id)
      var aestatusformato = $('#fautofrenteobraarch #aestatusformato');

      $.get(baseurl+"fautofrentedeobra/datafautofrentedeobra/"+id, function(data){
        var s = JSON.parse(data);

        aestatusformato.val(s.estatusformato);   
      });
    }

    //Desarchivar AutoFrenteDeObra
    function desarchfautofrentedeobra(id) {
      var fautofrenteobradesarch = $('#fautofrenteobradesarch');
      fautofrenteobradesarch.attr('action','fautofrentedeobra/desarchivar/'+id)
      var aestatusformato = $('#fautofrenteobradesarch #aestatusformato');

      $.get(baseurl+"fautofrentedeobra/datafautofrentedeobra/"+id, function(data){
        var s = JSON.parse(data);

        aestatusformato.val(s.estatusformato);   
      });
    }

//Minuta Junta
  
  /*ID Select 2*/ //Minuta Junta

    //Select 2 Minuta Junta
    $('#fminutajuntaelabora').select2();
    $('#fminutajuntaasistente1').select2();
    $('#fminutajuntaasistente2').select2();
    $('#fminutajuntaasistente3').select2();

  /*Funciones VER/EDITAR*/  //Minuta Junta
    
    //Ver Minuta Junta
    function verfminutajunta(id){
      var fminutajuntaedi = $('#fminutajuntaedi');
      fminutajuntaedi.attr('action','fminutajunta/edit/'+id)
      var mfolio = $('#fminutajuntaedi #mfolio');
      var mfechahorainicio = $('#fminutajuntaedi #mfechahorainicio');
      var mfechahorafin = $('#fminutajuntaedi #mfechahorafin');
      var msemana = $('#fminutajuntaedi #msemana');
      var mlugar = $('#fminutajuntaedi #mlugar');
      var melabora = $('#fminutajuntaedi #melabora');
      var mobjetivo = $('#fminutajuntaedi #mobjetivo');
      var mnotas = $('#fminutajuntaedi #mnotas');
      var masistente1 = $('#fminutajuntaedi #masistente1');
      var masistente2 = $('#fminutajuntaedi #masistente2');
      var masistente3 = $('#fminutajuntaedi #masistente3');
      var fminutajuntacontenido = tinymce.get('loadcontenido');
      var mfechacreacion = $('#fminutajuntaedi #mfechacreacion');
      var mfechamodificacion = $('#fminutajuntaedi #mfechamodificacion');
      var musuariocreacion = $('#fminutajuntaedi #musuariocreacion');
      var musuariomodificacion = $('#fminutajuntaedi #musuariomodificacion');
      var mestatusformato = $('#fminutajuntaedi #mestatusformato');

      $.get(baseurl+"fminutajunta/datafminutajunta/"+id, function(data){
        var s = JSON.parse(data);

        mfolio.val(s.folio);
        mfechahorainicio.val(s.fechahorainicio);
        mfechahorafin.val(s.fechahorafin);
        msemana.val(s.semana);
        mlugar.val(s.lugar);
        melabora.val(s.elabora);
        mobjetivo.val(s.objetivo);
        mnotas.val(s.notas);
        masistente1.val(s.asistente1);
        masistente2.val(s.asistente2);
        masistente3.val(s.asistente3);
        fminutajuntacontenido.setProgressState(1);
          window.setTimeout(function() {
          fminutajuntacontenido.setProgressState(0);
          fminutajuntacontenido.setContent(s.contenido);
          }, 3000);
        mfechacreacion.val(s.fechacreacion);
        mfechamodificacion.val(s.fechamodificacion);
        musuariocreacion.val(s.usuariocreacion);
        musuariomodificacion.val(s.usuariomodificacion);
        mestatusformato.val(s.estatusformato);
      });
    }

    //Archivar Minuta Junta
    function archfminutajunta(id){
      var fminutajuntaarch = $('#fminutajuntaarch');
      fminutajuntaarch.attr('action','fminutajunta/archivar/'+id)
      var mestatusformato = $('#fminutajuntaarch #mestatusformato');

      $.get(baseurl+"fminutajunta/datafminutajunta/"+id, function(data){
        var s = JSON.parse(data);

        mestatusformato.val(s.estatusformato);
      });
    }

    //Archivar Minuta Junta
    function desarchfminutajunta(id){
      var fminutajuntadesarch = $('#fminutajuntadesarch');
      fminutajuntadesarch.attr('action','fminutajunta/desarchivar/'+id)
      var mestatusformato = $('#fminutajuntadesarch #mestatusformato');

      $.get(baseurl+"fminutajunta/datafminutajunta/"+id, function(data){
        var s = JSON.parse(data);

        mestatusformato.val(s.estatusformato);
      });
    }

//ActaRecepcion
  
  /*ID Select 2*/ //ActaRecepcion

    /*Acta de Recepción*/
    $('#factarecepcionelaboro').select2();
    $('#factarecepcionreviso').select2();

  /*Funciones VER/EDITAR*/ //ActaRecepcion

    //Ver ActaRecepcion
    function verfactarecepcion(id) {
      var factarecepcionedi = $('#factarecepcionedi');
      factarecepcionedi.attr('action','factarecepcion/edit/'+id)
      var afolio = $('#factarecepcionedi #afolio');
      var anombrearchivo = $('#factarecepcionedi #anombrearchivo');
      var factreccontenido = tinymce.get('loadcontenido');
      var aelaboro = $('#factarecepcionedi #aelaboro');
      var areviso = $('#factarecepcionedi #areviso');
      var afechacreacion = $('#factarecepcionedi #afechacreacion');
      var afechamodificacion = $('#factarecepcionedi #afechamodificacion');
      var ausuariocreacion = $('#factarecepcionedi #ausuariocreacion');
      var ausuariomodificacion = $('#factarecepcionedi #ausuariomodificacion');
      var aestatusformato = $('#factarecepcionedi #aestatusformato');

      $.get(baseurl+"factarecepcion/datafactarecepcion/"+id, function(data){
        var s = JSON.parse(data);

        afolio.val(s.folio);
        anombrearchivo.val(s.nombrearchivo);
        factreccontenido.setProgressState(1);
        window.setTimeout(function() {
          factreccontenido.setProgressState(0);
          factreccontenido.setContent(s.contenido);
        }, 3000);
        aelaboro.val(s.elaboro);
        areviso.val(s.reviso);
        afechacreacion.val(s.fechacreacion);
        afechamodificacion.val(s.fechamodificacion);
        ausuariocreacion.val(s.usuariocreacion);
        ausuariomodificacion.val(s.usuariomodificacion);
        aestatusformato.val(s.estatusformato);
      });
    }

    //Archivar ActaRecepcion
    function archfactarecepcion(id) {
      var factarecepcionarch = $('#factarecepcionarch');
      factarecepcionarch.attr('action','factarecepcion/archivar/'+id)
      var aestatusformato = $('#factarecepcionarch #aestatusformato');

      $.get(baseurl+"factarecepcion/datafactarecepcion/"+id, function(data){
        var s = JSON.parse(data);

        aestatusformato.val(s.estatusformato);   
      });
    }

    //Desarchivar ActaRecepcion
    function desarchfactarecepcion(id) {
      var factarecepciondesarch = $('#factarecepciondesarch');
      factarecepciondesarch.attr('action','factarecepcion/desarchivar/'+id)
      var aestatusformato = $('#factarecepciondesarch #aestatusformato');

      $.get(baseurl+"factarecepcion/datafactarecepcion/"+id, function(data){
        var s = JSON.parse(data);

        aestatusformato.val(s.estatusformato);   
      });
    }

//Tracker
  
  /*Funciones VER/EDITAR*/  //Tracker
    
    //Ver Tracker
    function verftracker(id){
      var ftrackeredi = $('#ftrackeredi');
      ftrackeredi.attr('action','ftracker/edit/'+id)
      var tnumero = $('#ftrackeredi #tnumero');
      var tfecharegistro = $('#ftrackeredi #tfecharegistro');
      var trackerdescripcion = $('#ftrackeredi #trackerdescripcion');
      var tareasolicitante = $('#ftrackeredi #tareasolicitante');
      var tsolicitante = $('#ftrackeredi #tsolicitante');
      var tpartida = $('#ftrackeredi #tpartida');
      var tnumerodeplano = $('#ftrackeredi #tnumerodeplano');
      var tfechaprogramada = $('#ftrackeredi #tfechaprogramada');
      var tfechaentrega = $('#ftrackeredi #tfechaentrega');
      var tdiasdesfase = $('#ftrackeredi #tdiasdesfase');
      var tobservaciones = $('#ftrackeredi #tobservaciones');
      var tadjuntosanexos = $('#ftrackeredi #tadjuntosanexos');
      var tfechacreacion = $('#ftrackeredi #tfechacreacion');
      var tfechamodificacion = $('#ftrackeredi #tfechamodificacion');
      var tusuariocreacion = $('#ftrackeredi #tusuariocreacion');
      var tusuariomodificacion = $('#ftrackeredi #tusuariomodificacion');
      var testatusformato = $('#ftrackeredi #testatusformato');

      $.get(baseurl+"ftracker/dataftracker/"+id, function(data){
        var s = JSON.parse(data);

        tnumero.val(s.numero);
        tfecharegistro.val(s.fecharegistro);
        trackerdescripcion.val(s.descripcion);
        tareasolicitante.val(s.areasolicitante);
        tsolicitante.val(s.solicitante);
        tpartida.val(s.partida);
        tnumerodeplano.val(s.numerodeplano);
        tfechaprogramada.val(s.fechaprogramada);
        tfechaentrega.val(s.fechaentrega);
        tdiasdesfase.val(s.diasdesfase);
        tobservaciones.val(s.observaciones);
        tadjuntosanexos.val(s.adjuntosanexos);
        tfechacreacion.val(s.fechacreacion);
        tfechamodificacion.val(s.fechamodificacion);
        tusuariocreacion.val(s.usuariocreacion);
        tusuariomodificacion.val(s.usuariomodificacion);
        testatusformato.val(s.estatusformato);
      });
    }

    //Archivar Tracker
    function archftracker(id){
      var ftrackerarch = $('#ftrackerarch');
      ftrackerarch.attr('action','ftracker/archivar/'+id)
      var testatusformato = $('#ftrackerarch #testatusformato');

      $.get(baseurl+"ftracker/dataftracker/"+id, function(data){
        var s = JSON.parse(data);

        testatusformato.val(s.estatusformato);
      });
    }

    //Archivar Tracker
    function desarchftracker(id){
      var ftrackerdesarch = $('#ftrackerdesarch');
      ftrackerdesarch.attr('action','ftracker/desarchivar/'+id)
      var testatusformato = $('#ftrackerdesarch #testatusformato');

      $.get(baseurl+"ftracker/dataftracker/"+id, function(data){
        var s = JSON.parse(data);

        testatusformato.val(s.estatusformato);
      });
    }

    //Agregar Anexo
    function agregaranexo(id) {
    var anexoagregar = $ ('#anexoagregar');
    anexoagregar.attr('action','ftracker/do_upload')
    
    document.getElementById('idtrackeranexo').value=id;  
    }

    //Editar Anexo
    function veranexo(id){
      var anexoedi = $('#anexoedi');
      //anexoedi.attr('action','ftracker/editanexo/'+id)
      var anexodescripcion = $('#anexoedi #anexodescripcion');
      var idtracker = $('#anexoedi #idtracker');
      
      idtracker.val(id);
      
      $.get(baseurl+"ftracker/dataftrackeranexo/"+id, function(data){
        var s = JSON.parse(data);

        anexodescripcion.val(s.descripcion);
        
      });
    }
    //Eliminar Anexo
    function eliminaranexo(id) {
    
    var anexelim = $('#anexelim');
    var idtracker = $('#anexelim #idtrackereliminar');
    idtracker.val(id);
    //anexelim.attr('action','ftracker/removeanexo/'+id)


  }
