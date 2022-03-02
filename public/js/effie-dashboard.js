$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
    }
});

$(function() {
    var table = $('#tbl-users').DataTable({
        'pagingType': 'full_numbers',
        language: {
            'decimal': '',
            'emptyTable': 'No hay información',
            'info': 'Mostrando _START_ a _END_ de _TOTAL_ entradas',
            'infoEmpty': 'Mostrando 0 to 0 of 0 entradas',
            'infoFiltered': '(Filtrado de _MAX_ total entradas)',
            'infoPostFix': '',
            'thousands': ',',
            'lengthMenu': 'Mostrar _MENU_ entradas',
            'loadingRecords': 'Cargando...',
            'processing': 'Procesando...',
            'search': 'Buscar ',
            'zeroRecords': 'Sin resultados encontrados',
            'paginate': {
                'first': 'Primero',
                'last': 'Último',
                'next': 'Siguiente',
                'previous': 'Anterior'
            }
        },
    });

    mostrarUsuarios();

    $('#slt-anho').change(function() {
        mostrarUsuarios();
    });

    function mostrarUsuarios() {
        table.clear().draw();
        $('body').loadingModal({
            text:'Un momento, por favor...',
            animation:'wanderingCubes'
        });
        $.ajax({
            type: 'get',
            url: '../buscarUsuarios',
            data: {'anho': $('#slt-anho').val()},
            success: function(data) {
                var dataSet = [];
                $($.parseJSON(data)).each(function(index) {
                    dataSet.push([
                        '<center>' + (index + 1) + '</center>',
                        '<i class="fas fa-user"></i> ' + this.nombre,
                        '<a href="mailto: ' + this.email + '"><i class="fas fa-envelope"></i> ' + this.email + '</a>',
                        '<center>' + this.inscripcion + '</center>',
                        '<center>' + (this.nivel ? ('<i class="fa fa-check-circle"></i> ' + this.nivel) : '-') + '</center>',
                        '<a href="users/' + this.id + '"><i class="fas fa-eye"></i> Ver<i class="' + (this.is_viewed ? '' : 'new') + '"></i></a>'
                    ]);
                });
                table.rows.add(dataSet).draw();
                //Otros
                $('#msj-rqstuser').text('');
                $('#div-spanuser').css('display', 'none');
                $('body').loadingModal('destroy');
            },
            statusCode: {
                404: function() {
                    alert('Página no encontrada.');
                    $('body').loadingModal('destroy');
                }
            },
            error: function(err) {
                $('#msj-rqstuser').text(err.responseJSON['message']);
                $('#div-spanuser').css('display', 'block');
                $('body').loadingModal('destroy');
            }
        });
    }
});
