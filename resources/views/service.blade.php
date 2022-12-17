@extends('layouts.app')

@section('title', 'Servicios')

@section('content')

<!-- subheader -->
<section id="subheader" class="no-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Servicios</h1>
            </div>
        </div>
    </div>
</section>

<section id="section-main" class="no-bg no-top" aria-label="section-menu">
    <div class="container">
        <div class="row g-4">
            @foreach($servicios as $servicio)
            <div class="col-lg-4">
                <div class="de-room">
                    <div class="d-image">
                        {{-- <div class="d-label">Refrigeración industrial</div> --}}
                        <a href="{{url('servicios/'.$servicio->url)}}">
                            <img src="{{url($servicio->imagen)}}" class="img-fluid" alt="">
                            {{-- <img src="images/room/1-alt.jpg" class="d-img-hover img-fluid" alt=""> --}}
                        </a>
                    </div>

                    <div class="d-text">
                        <h3>{{$servicio->titulo}}</h3>
                        <p>{{$servicio->descripcion}}</p>
                        <a href="{{url('servicios/'.$servicio->url)}}" class="btn-line"><span>Ver más</span></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection