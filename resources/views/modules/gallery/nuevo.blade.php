@extends('modules.layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-between d-flex align-items-center">
                            <h4 class="card-title">Ingresar sus fotos</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <form action="" id="form-guardar" enctype="multipart/form-data" autocomplete="off" accept="">
                                @csrf
                                <div class="row" data-section="imagenes">
                                    <div class="col-md-2">
                                        <input class="form-control d-none" type="file" data-action="input-imagen">
                                        <a href="#" data-action="agregar-imagen">
                                            <div style="
                                            background: url('{{asset("qrfotos/images/default/imagen-mas.jpg")}}');
                                            background-size: contain;
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            height: 150px;
                                            margin-top: 20px;
                                            "></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Guardar</button>
                                    </div>
                                </div>
                            </form>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
@endsection
@section('js')
<!-- Plugins js -->
<script src="{{ asset('qrfotos/js/gallery/gallery-view.js') }}"></script>
<script src="{{ asset('qrfotos/js/gallery/gallery-model.js') }}"></script>
<script>
    const view = new GalleryView(new GalleryModel(token));
    // view.listar(buscar);
    console.log(view);
    let imagenesJSON = [];
    view.eventos();
</script>
@endsection
