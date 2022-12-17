@extends('layouts.app')

@section('title', 'Page Title')
@section('styles')
<style>
    body {
        overflow-x: hidden;
    }
</style>
@endsection

@section('scripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    grecaptcha.execute();
</script>
@endsection

@section('content')

<!-- subheader -->
<section id="subheader" class="no-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Nosotros</h1>
            </div>
        </div>
    </div>
</section>

<section id="section-main" class="no-bg no-top" aria-label="section-menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-6">
                <div class="spacer-double sm-hide"></div>
                <img src="{{asset('images/project/nosotros001.jpg')}}" alt="" class="img-responsive wow fadeInUp"
                    data-wow-duration="1s">
            </div>

            <div class="col-lg-3 col-6">
                <img src="{{asset('images/project/nosotros002.jpg')}}" alt="" class="img-responsive wow fadeInUp"
                    data-wow-duration="1.5s">
            </div>

            <div class="col-lg-6 wow fadeIn">
                <div class="padding20">
                    <h2 class="title mb10">JE Refrigeración SAC
                        <span class="small-border"></span>
                    </h2>

                    <p>Somos una empresa con más de {{now()->year - 2009 }} años de experiencia en el mercado
                        agroindustrial, pesquero,
                        lácteo, textil, panadero, laboratorios farmacéuticos.
                        <br>
                        Somos una empresa especialista en diseño de ingeniería optimizando recursos y brindando sistemas
                        de ahorro energético.
                    </p>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>

    </div>
</section>

<!-- subheader close -->
@endsection