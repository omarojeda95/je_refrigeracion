@extends('layouts.app')

@section('title', $servicio->titulo)
@section('styles')
<style>
    @media only screen and (max-width: 600px) {
        #subheader h1 {
            font-size: 32px;
        }
    }
</style>
@endsection
@section('content')

<!-- subheader -->
<section id="subheader" class="no-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>{{$servicio->titulo}}</h1>
            </div>
        </div>
    </div>
</section>

<section id="section-main" class="no-bg no-top" aria-label="section-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-content-overlay">
                    <div class="d-carousel wow fadeInRight" data-wow-delay="2s">
                        <div id="carousel-rooms" class="owl-carousel owl-theme">
                            @foreach($imagenes as $imagen)
                            <div class="item">
                                <div class="picframe">
                                    <img src="{{asset($imagen->url)}}" alt="" height="100vh">
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="d-arrow-left mod-a"><i class="fa fa-angle-left"></i></div>
                        <div class="d-arrow-right mod-a"><i class="fa fa-angle-right"></i></div>

                    </div>
                    <div class="row pt-5">
                        <div class="col-md-8">
                            <h3>Descripción</h3>
                            <p>{{$servicio->descripcion}}</p>
                        </div>
                        <div class="col-md-4">
                            <h3>Realizamos</h3>
                            <ul class="ul-style-2">
                                @foreach($tipo_servicios as $tipo_servicio)
                                <li>{{$tipo_servicio->titulo}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

@endsection