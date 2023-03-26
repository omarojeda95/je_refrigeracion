@extends('admin.layouts.dashboard')

@section('title', 'Inicio')

@section('content')
<!-- Page-Title -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h3 class="page-title mb-1">Servicios</h3>
            </div>
        </div>

    </div>
</div>
<!-- end page title end breadcrumb -->

<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <select class="form-control" id="combo_servicio">
                                    <option selected disabled>Seleccionar servicio</option>
                                    @foreach($servicios as $servicio)
                                    <option value="{{$servicio->id}}">{{$servicio->titulo}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mt-4">
                                    <h5 class="font-size-14 mb-3">Imágenes
                                        <button class="btn btn-sm btn-success"
                                            onclick="editar_imagenes()">Agregar</button>
                                    </h5>
                                    <div id="imagen_servicios"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- container-fluid -->
</div>
<!-- end page-content-wrapper -->

<!-- Modal -->
<div class="modal fade" id="modal_edit_imagen" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Imagenes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">

                    <form action="#" class="dropzone" id="form_imagen" enctype="multipart/form-data">
                        <div class="fallback">
                            <input name="file" type="file" multiple="multiple">
                        </div>
                        <div class="dz-message needsclick">
                            <div class="mb-3">
                                <i class="display-4 text-muted mdi mdi-cloud-upload-outline"></i>
                            </div>
                            <h4>Arrastra los archivos aquí para subirlos</h4>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="save_imagenes()">Cargar</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('admin/js/dashboard.js')}}" async defer></script>
@endsection