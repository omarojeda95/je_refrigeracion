@extends('layouts.app')

@section('title', 'Inicio')
@section('styles')
<style>
    .jarallax h1 {
        text-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;
        color: #1171ae;
    }

    @media only screen and (max-width: 600px) {
        .jarallax h1 {
            font-size: 40px;
        }
    }
</style>
@endsection
@section('content')
<section class="no-top no-bottom jarallax vertical-center"
    style="background-image: url('{{asset('images/slider/slider_005.jpg')}}');">
    <div class="de-overlay v-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Especialistas<br>en refrigeración</h1>
                    {{-- <p class="lead">Lorem ipsum enim dolor ea anim reprehenderit laboris aliquip sed dolore.</p>
                    --}}
                    {{-- <a class="btn-main" href="#"><span>Choose Room</span></a> --}}
                </div>
            </div>
        </div>
    </div>
</section>

<div class="no-top no-bottom bg-color text-light">
    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-md-4 p-3" data-bgcolor="rgba(0, 0, 0, .2)">
                <div class="info-box padding20">
                    <i class="icon_clock_alt"></i>
                    <div class="info-box_text">
                        <div class="info-box_title">Horario</div>
                        <div class="info-box_subtite">Lunes - Viernes: 08:00 - 18:00</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-3" data-bgcolor="rgba(0, 0, 0, .4)">
                <div class="info-box padding20">
                    <i class="icon_house_alt"></i>
                    <div class="info-box_text">
                        <div class="info-box_title">Local</div>
                        <div class="info-box_subtite">Av. Canto Grande 556, SJL</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-3" data-bgcolor="rgba(0, 0, 0, .6)">
                <div class="info-box padding20">
                    <i class="icon_headphones"></i>
                    <div class="info-box_text">
                        <div class="info-box_title">Contáctenos</div>
                        <div class="info-box_subtite">+51 941 822 861</div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>

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

                    <a href="{{url('nosotros')}}" class="btn-line"><span>Conócenos</span>s</a>

                </div>
            </div>

            <div class="clearfix"></div>
        </div>


        <div class="spacer-double"></div>

        <div class="row gx-4">
            <div class="col-lg-12 text-center">
                <h2 class="title center">Servicios
                    <span class="small-border"></span>
                </h2>
            </div>
        </div>

        <div class="row">


            @foreach($servicios as $servicio)
            <div class="col-md-6">
                <div class="box-icon">
                    <span class="icon bg-color">
                        <a href="{{url('servicios/'.$servicio->url)}}"><img src="images/svg/restaurant-svgrepo-com.svg" alt=""></a>
                    </span>
                    <div class="text">
                        <a href="{{url('servicios/'.$servicio->url)}}"><h3 class="style-1">{{$servicio->titulo}}</h3></a>
                        <br><br><br>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>

<section class="jarallax">
    <img src="{{asset('images/project/obra.jpg')}}" class="jarallax-img" alt="">
    <div class="container">
        <div class="row gx-4">
            <div class="col-lg-12 text-center">
                <h2 class="title center">Testimonios
                    <span class="small-border"></span>
                </h2>
            </div>

            <div class="col-md-8 offset-md-2 wow fadeInUp">

                <div id="testimonial-carousel-single" class="owl-carousel owl-theme wow fadeInUp">
                    <blockquote class="testimonial-big">
                        <span class="d-testi">The rooms were clean, very comfortable, and the staff was amazing. They
                            went over and beyond to help make our stay enjoyable. I highly recommend this hotel for
                            anyone visiting downtown</span>
                        <span class="name">Benedict Mervine, Customer</span>
                    </blockquote>

                    <blockquote class="testimonial-big">
                        <span class="d-testi">They were extremely accommodating and allowed us to check in early at like
                            10am. We got to hotel super early and I didn’t wanna wait. So this was a big plus. The
                            sevice was exceptional as well. Would definitely send a friend there.</span>
                        <span class="name">Doretta Mccourtney, Customer</span>
                    </blockquote>

                    <blockquote class="testimonial-big">
                        <span class="d-testi">I had a wonderful experience at the hotel. Every staff member I
                            encountered, from the valet to the check- in to the cleaning staff were delightful and eager
                            to help! Thank you! Will recommend to my colleagues!</span>
                        <span class="name">Carole Hunckler, Customer</span>
                    </blockquote>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection