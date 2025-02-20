class CustomerView {

    constructor(model) {
        this.model = model;
    }

    listar = () => {
        const $tabla = $('#tabla-data').DataTable({
            destroy: true,
            dom: 'Bfrtip',
            autoWidth: false,
            responsive: true,
            pageLength: 50,
            language: {
                url: "https://cdn.datatables.net/plug-ins/2.2.2/i18n/es-ES.json"
            },
            serverSide: true,
            processing: true,
            buttons: [
                {
                    text: '<i class="fa fa-plus"></i> Nuevo',
                    attr: {
                        id: 'btn-cliente',
                    },
                    action: () => {
                        // vistaCrear();
                        $('#modal-cliente').modal('show');
                        $("#form-cliente")[0].reset();
                        $("#form-cliente").find('h5.modal-title').text('Nuevo Cliente');
                    },
                    init: function(api, node, config) {

                        $(node).removeClass('btn-secondary')
                    },
                    className: 'btn-light btn-sm'
                }
            ],
            // pagingType: 'full_numbers',
            // scrollCollapse: true,
            // scrollY: '60vh',
            // scrollX: '100vh',
            initComplete: function (settings, json) {
                const $filter = $('#tabla-data_filter');
                const $input = $filter.find('input');
                $filter.append('<button id="btnBuscar" class="btn btn-default btn-sm" type="button" style="border-bottom-left-radius: 0px;border-top-left-radius: 0px;"><i class="fa fa-search"></i></button>');
                $input.addClass('form-control-sm');
                $input.attr('style','border-bottom-right-radius: 0px;border-top-right-radius: 0px;padding-top: 3px;');

                $input.off();
                $input.on('keyup', (e) => {
                    if (e.key == 'Enter') {
                        $('#btnBuscar').trigger('click');
                    }
                });
                $('#btnBuscar').on('click', (e) => {
                    $tabla.search($input.val()).draw();
                });
                // $('#tabla-data_length label').addClass('select2-sm');
                // //______Select2
                // $('[name="tabla-data_length"]').select2({
                //     minimumResultsForSearch: Infinity
                // });
                // const $paginate = $('#tabla-data_paginate');
                // $paginate.find('ul.pagination').addClass('pagination-sm');

            },
            drawCallback: function (settings) {
                $('#tabla-data_filter input').prop('disabled', false);
                $('#btnBuscar').html('<i class="fa fa-search"></i>').prop('disabled', false);
                $('#tabla-data_filter input').trigger('focus');
                const $paginate = $('#tabla-data_paginate');
                $paginate.find('ul.pagination').addClass('pagination-sm');

            },
            order: [[0, 'desc']],
            ajax: {
                url: route('administrador.clientes.listar'),
                method: 'POST',
                // headers: {'X-CSRF-TOKEN': token},
                dataType: "JSON",
                // data: buscar,
                data: {_token : token},
            },
            columns: [
                {data: 'id', className: 'text-center'},
                {data: 'nombres', className: 'text-center'},
                {data: 'apellidos', className: 'text-center'},
                {data: 'email', className: 'text-center'},
                // {data: 'telefono', className: 'text-center'},
                {data: 'estado', className: 'text-center'},
                {data: 'accion', className: 'text-center'},
            ]
        });
        $tabla.on('search.dt', function() {
            $('#tabla-data_filter input').attr('disabled', true);
            $('#btnBuscar').html('<i class="fa fa-clock-o" aria-hidden="true"></i>').prop('disabled', true);
        });
        $tabla.on('init.dt', function(e, settings, processing) {
            // $('#tabla-data_length label').addClass('select2-sm');
            // $(e.currentTarget).LoadingOverlay('show', { imageAutoResize: true, progress: true, imageColor: '#3c8dbc' });
        });
        $tabla.on('processing.dt', function(e, settings, processing) {
            if (processing) {
                // $(e.currentTarget).LoadingOverlay('show', { imageAutoResize: true, progress: true, imageColor: '#3c8dbc' });
            } else {
                // $(e.currentTarget).LoadingOverlay("hide", true);
            }
        });
        // $tabla.buttons().container().appendTo('#tabla-data_wrapper .col-md-6:eq(0)');
    }

    eventos = () => {
        $('#form-cliente').submit((e) => {
            e.preventDefault();
            let data = $(e.currentTarget).serialize();
            let password = $('[name="password"]').val();
            let re_password = $('[name="rep_password"]').val();
            if(password == re_password){
                this.model.guardar(data).then((respuesta) => {
                    console.log(respuesta);

                }).always(() => {

                }).fail(() => {

                });

            }else{
                console.log('fals');
            }
        });
        $('.editar').click((e) => {
            e.preventDefault();
            let id = $(e.currentTarget).attr('data-id');
            this.model.editar(id).then((respuesta) => {
                console.log(respuesta);

            }).always(() => {

            }).fail(() => {

            });
        });
    }
}
