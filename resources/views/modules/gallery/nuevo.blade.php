@extends('modules.layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-between d-flex align-items-center">
                            <h4 class="card-title">Textual Inputs</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Text</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="file" value="Artisanal kale" id="example-text-input">
                                        </div>
                                    </div>
                                </div><!-- end col -->
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
<script src="{{ asset('assets/libs/dropzone/min/dropzone.min.js') }}"></script>
@endsection
