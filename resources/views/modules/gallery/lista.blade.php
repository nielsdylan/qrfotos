@extends('modules.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/libs/glightbox/css/glightbox.min.css') }}">
<style>
    .opc-0{
        opacity: 0;
    },
    .position-relative:hover {
        height: 120px;
    }
    div.position-relative:hover .opc-0 {
        /* background-color: yellow; */
        opacity: 1;
    }
</style>
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-between d-flex align-items-center">
                            <h4 class="card-title">Lista de tus fotos fotos</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="row" data-section="list-images">
                                @foreach ($images as $key=>$vavlue)
                                    <div class="col-md-2" data-key="{{$vavlue->id}}">
                                        <div class="position-relative">
                                            <a
                                                href="{{ asset('images').'/'.Auth::user()->id.'/'.$vavlue->name_image }}"
                                                class="thumb preview-thumb image-popup-desc"
                                                {{-- data-title="Project 01" --}}
                                                data-description="{{ $vavlue->description }}">

                                                <img src="{{ asset('images/1').'/'.$vavlue->name_image }}" class="img-fluid" alt="work-thumbnail">
                                            </a>
                                            <i class="fa fa-trash position-absolute opc-0 text-danger" data-key="{{$vavlue->id}}" id="eliminar-imagen"></i>
                                        </div>
                                    </div><!-- end col -->
                                @endforeach
                            </div><!-- end row -->
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

<script src="{{ asset('assets/libs/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/lightbox.init.js') }}"></script>

<script src="{{ asset('qrfotos/js/gallery/galleryList-view.js') }}"></script>
<script src="{{ asset('qrfotos/js/gallery/gallery-model.js') }}"></script>
<script>
    const view = new GalleryListView(new GalleryModel(token));
    // view.listar(buscar);
    //console.log(view);
    //let imagenesJSON = [];
    view.eventos();
</script>
@endsection
