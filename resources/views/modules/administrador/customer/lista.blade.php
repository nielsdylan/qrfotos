@extends('modules.layouts.app')
@section('css')
<link href='{{ asset("assets/libs/datatables/css/dataTables.bootstrap5.min.css") }}' rel="stylesheet" type="text/css" />
<link href='{{ asset("assets/libs/datatables/extensions/css/buttons.bootstrap5.min.css") }}' rel="stylesheet" type="text/css" />

@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-between d-flex align-items-center">
                            <h4 class="card-title">Lista de Clientes</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="tabla-data" class="table table-nowrap table-hover mb-1">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">N° Documento</th>
                                                    <th class="text-center">Nombres y Apelidos</th>
                                                    <th class="text-center">Email</th>
                                                    {{-- <th class="text-center">Telefono</th> --}}
                                                    <th class="text-center">Estado</th>
                                                    <th class="text-center"> - </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- <tr>
                                                    <td scope="row">1</td>
                                                    <td>2</td>
                                                    <td>3</td>
                                                    <td>4</td>
                                                    <td>5</td>
                                                    <td>6</td>
                                                    <td>7</td>
                                                </tr> --}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>

    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true" id="modal-cliente">
        <div class="modal-dialog modal-dialog-scrollable " role="document" >
            <form action="" id="form-cliente">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">
                            Modal title
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">N° de documento</label>
                                    <input
                                        type="text"
                                        name="numero_documento"

                                        class="form-control form-control-sm"
                                        placeholder=""
                                        aria-describedby="helpId"
                                        required
                                    />
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">Apellidos</label>
                                    <input
                                        type="text"
                                        name="apellidos"

                                        class="form-control form-control-sm"
                                        placeholder=""
                                        aria-describedby="helpId"
                                        required
                                    />
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nombres</label>
                                    <input
                                        type="text"
                                        name="nombres"

                                        class="form-control form-control-sm"
                                        placeholder=""
                                        aria-describedby="helpId"
                                        required
                                    />
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input
                                        type="email"
                                        name="email"

                                        class="form-control form-control-sm"
                                        placeholder=""
                                        aria-describedby="helpId"
                                        required
                                    />
                                </div>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">Contraseña</label>
                                    <input
                                        type="password"
                                        name="password"

                                        class="form-control form-control-sm"
                                        placeholder=""
                                        aria-describedby="helpId"
                                        required
                                    />
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="" class="form-label">Repita su contraseña</label>
                                    <input
                                        type="password"
                                        name="rep_password"

                                        class="form-control form-control-sm"
                                        placeholder=""
                                        aria-describedby="helpId"
                                        required
                                    />
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary btn-sm"
                            data-bs-dismiss="modal"
                        >
                            Cerrar
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
@section('js')
<!-- Plugins js -->

<script src="{{ asset('assets/libs/datatables/js/dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/extensions/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/extensions/js/buttons.bootstrap5.min.js') }}"></script>


<script src="{{ asset('qrfotos/js/administrador/customer/customer-model.js') }}"></script>
<script src="{{ asset('qrfotos/js/administrador/customer/customer-view.js') }}"></script>
<script>
    // new DataTable('#tabla-data');
    const view = new CustomerView(new CustomerModel(token));
    // // view.listar(buscar);
    view.listar();
    view.eventos();
</script>
@endsection
