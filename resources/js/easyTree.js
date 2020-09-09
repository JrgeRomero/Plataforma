/**
 * Easy Tree 简易的jquery树插件，将一个无序列表转化成树
 * 支持单选、新增、编辑、删除
 * @Copyright yuez.me 2014
 * @Author yuez
 * @Version 0.1
 */
viewdocs(1);
(function ($) {
    $.fn.EasyTree = function (options) {
        var defaults = {
            selectable: true,
            deletable: false,
            editable: false,
            addable: false,
            i18n: {
                deleteNull: 'Por favor, seleccione un elemento para eliminar',
                deleteConfirmation: '¿Estás seguro de que quieres realizar la operación de eliminación?',
                confirmButtonLabel: 'Confirmar',
                editNull: 'Por favor, seleccione un elemento para editar.',
                editMultiple: 'Solo se puede editar un elemento a la vez',
                addMultiple: 'Seleccione un agregar',
                collapseTip: 'Colapsar rama',
                expandTip: 'Expandir rama',
                selectTip: 'Elija',
                unselectTip: 'Deseleccionar',
                editTip: 'Editar',
                addTip: 'Agregar',
                deleteTip: 'Eliminar',
                cancelButtonLabel: 'Cancelar'
            }
        };

        //var warningAlert = $('<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong></strong><span class="alert-content"></span> </div> ');
        //var dangerAlert = $('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong></strong><span class="alert-content"></span> </div> ');

        //var createInput = $('<div class="input-group"><input type="text" class="form-control"><span class="input-group-btn"><button type="button" class="btn btn-default btn-success confirm"></button> </span><span class="input-group-btn"><button type="button" class="btn btn-default cancel"></button> </span> </div> ');

        options = $.extend(defaults, options);

        this.each(function () {
            var easyTree = $(this);
            $.each($(easyTree).find('ul > li'), function() {
                var text;
                if($(this).is('li:has(ul)')) {
                    var children = $(this).find(' > ul');
                    $(children).remove();
                    text = $(this).text();
                    idfolder = $(this).attr('id');
                    $(this).html('<span><i></i><a href="javascript: void(0);" onclick="viewdocs('+idfolder+')"></a> </span>');
                    $(this).find(' > span > i').addClass('fa fa-folder-open-o');
                    $(this).find(' > span > a').text(text);
                    $(this).append(children);
                }
                else {
                    text = $(this).text();
                    $(this).html('<span><span class="glyphicon"></span><a href="javascript: void(0);"></a> </span>');
                    $(this).find(' > span > span').addClass('fa fa-file-o');
                    $(this).find(' > span > a').text(text);
                }
            });

            $(easyTree).find('li:has(ul)').addClass('parent_li').find(' > span').attr('title', options.i18n.collapseTip);


            // collapse or expand
            $(easyTree).delegate('li.parent_li > span', 'click', function (e) {
                var children = $(this).parent('li.parent_li').find(' > ul > li');
                if (children.is(':visible')) {
                    children.hide('fast');
                    $(this).attr('title', options.i18n.expandTip)
                        .find(' > span.glyphicon')
                        .addClass('glyphicon-folder-close')
                        .removeClass('glyphicon-folder-open');
                } else {
                    children.show('fast');
                    $(this).attr('title', options.i18n.collapseTip)
                        .find(' > span.glyphicon')
                        .addClass('glyphicon-folder-open')
                        .removeClass('glyphicon-folder-close');
                }
                e.stopPropagation();
            });

            // selectable, only single select
            if (options.selectable) {
                $(easyTree).find('li > span > a').attr('title', options.i18n.selectTip);
                $(easyTree).find('li > span > a').click(function (e) {
                    var li = $(this).parent().parent();
                    if (li.hasClass('li_selected')) {
                        $(this).attr('title', options.i18n.selectTip);
                        $(li).removeClass('li_selected');
                    }
                    else {
                        $(easyTree).find('li.li_selected').removeClass('li_selected');
                        $(this).attr('title', options.i18n.unselectTip);
                        $(li).addClass('li_selected');
                    }

                    if (options.deletable || options.editable || options.addable) {
                        var selected = getSelectedItems();
                        if (options.editable) {
                            if (selected.length <= 0 || selected.length > 1)
                                $(easyTree).find('.easy-tree-toolbar .edit > button').addClass('disabled');
                            else
                                $(easyTree).find('.easy-tree-toolbar .edit > button').removeClass('disabled');
                        }

                        if (options.deletable) {
                            if (selected.length <= 0 || selected.length > 1)
                                $(easyTree).find('.easy-tree-toolbar .remove > button').addClass('disabled');
                            else
                                $(easyTree).find('.easy-tree-toolbar .remove > button').removeClass('disabled');
                        }

                    }

                    e.stopPropagation();

                });
            }

            // Get selected items
            var getSelectedItems = function () {
                return $(easyTree).find('li.li_selected');
            };
        });
    };
})(jQuery);


function viewdocs(id) {
    var namefolder = $('#namefolder');
    var toolsfolder = $('#toolsfolder');
    var toolsdocs = $('#toolsdocs');
    toolsfolder.empty().append('');
    toolsdocs.empty().append('<button class="btn btn-success btn-link" data-toggle="modal" title="Crear nueva carpeta" data-target="#NuevaCarpeta" onclick="newCar('+id+')"><i class="material-icons">create_new_folder</i></button><button class="btn btn-danger btn-link" data-toggle="modal" title="Borrar carpeta" data-target="#confirmDelete" onclick="eraserCarpeta('+id+')"><i class="material-icons">delete_forever</i></button><button class="btn btn-success btn-link" data-toggle="modal" title="Subir Documento" data-target="#NuevoModal" onclick="newDoc('+id+')"><i class="material-icons">exposure_plus_1</i></button><button class="btn btn-info btn-link" data-toggle="modal" data-target="#mfilemultiple" onclick="carpetaupdate('+id+')"><i class="material-icons">filter_9_plus</i> </button>');
    $.get(baseurl+'carpeta/datacarpeta/'+id, function(dato){
        namefolder.empty().append(dato);
    });
    $.get(baseurl+'carpeta/documentos/'+id, function(data){
        $('#tarchivos tbody').empty().append(data);
    });
}

function archivos(fileval) {
    $.get(baseurl+'carpeta/vistaprevia/'+fileval, function(data, status){
        $('#vistaprevia').empty().append(data);
    });
}
function newCar(carpeta) {
    $('#carpetaid').val(carpeta);
}

function newDoc(carpeta) {
    $('#carpetadoc').val(carpeta);
}

function carpetaupdate(carpeta) {
    $('#carpetaupdate').val(carpeta);
}

$(".jsUpload").on('submit',(function(e) {
    e.preventDefault();
    var id = $('#carpetaupdate').val();
    $.ajax({
        url:baseurl+"documento/upload",
        type: "POST",
        data:  new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        success: function(data){
            $('#mfilemultiple').modal('hide');
        },
   });
   
   $.get(baseurl+'carpeta/documentos/'+id, function(dato, status){
        $('#tarchivos tbody').empty().append(dato);
    });
}));

$('#buscararchivos').on('keyup change', (function (e) {
    e.preventDefault();
    var namefolder = $('#namefolder');
    var toolsfolder = $('#toolsfolder');
    var toolsdocs = $('#toolsdocs');
    toolsfolder.empty().append('');
    toolsdocs.empty().append('');
    namefolder.empty().append(' Busqueda general');
    var dato = $('#buscararchivos').val();
    $.get(baseurl+'carpeta/buscar/'+dato, function(data, status){
        $('#tarchivos tbody').empty().append(data);
    });
}));

function eraserDoc(iddoc) {
    $.get(baseurl+'documento/eraserDoc/'+iddoc, function(data){
        
    });
}

