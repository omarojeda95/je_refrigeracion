@extends('layouts.app')

@section('title', 'Inicio')
@section('styles')
<style>
    .jarallax h1 {
        color: black;
    }
</style>
@endsection
@section('content')
<section class="no-top no-bottom jarallax vertical-center"
    style="background-image: url('{{asset('images/slider/slider002.jpg')}}');">
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
                        <div class="info-box_subtite">+208 333 9296</div>
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
                <img src="images/misc/1.jpg" alt="" class="img-responsive wow fadeInUp" data-wow-duration="1s">
            </div>

            <div class="col-lg-3 col-6">
                <img src="images/misc/2.jpg" alt="" class="img-responsive wow fadeInUp" data-wow-duration="1.5s">
            </div>

            <div class="col-lg-6 wow fadeIn">
                <div class="padding20">
                    <h2 class="title mb10">The Luxury Experience<br>You'll Remember
                        <span class="small-border"></span>
                    </h2>

                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                        quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
                        quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                        voluptatem.</p>

                    <a href="02-room-2-cols.html" class="btn-line"><span>Choose Room</span>s</a>

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

            <div class="col-md-6">
                <div class="box-icon">
                    <span class="icon bg-color"><img src="images/svg/restaurant-svgrepo-com.svg" alt=""></span>
                    <div class="text">
                        <h3 class="style-1">Refrigeración industrial</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box-icon">
                    <span class="icon bg-color"><img src="images/svg/swimming-pool-svgrepo-com.svg" alt=""></span>
                    <div class="text">
                        <h3 class="style-1">Ventilación mecánica</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box-icon">
                    <span class="icon bg-color"><img src="images/svg/fitness-gym-svgrepo-com.svg" alt=""></span>
                    <div class="text">
                        <h3 class="style-1">Aire acondicionado</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box-icon">
                    <span class="icon bg-color"><img src="images/svg/coffee-table-svgrepo-com.svg" alt=""></span>
                    <div class="text">
                        <h3 class="style-1">Estructuras metálicas</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box-icon">
                    <span class="icon bg-color"><img src="images/svg/meeting-explain-svgrepo-com.svg" alt=""></span>
                    <div class="text">
                        <h3 class="style-1">Racks industriales</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box-icon">
                    <span class="icon bg-color"><img src="images/svg/laundry-machine-svgrepo-com.svg" alt=""></span>
                    <div class="text">
                        <h3 class="style-1">Obras civiles</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box-icon">
                    <span class="icon bg-color"><img src="images/svg/screen-tv-svgrepo-com.svg" alt=""></span>
                    <div class="text">
                        <h3 class="style-1">Mantenimiento</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box-icon">
                    <span class="icon bg-color"><img src="images/svg/safebox-svgrepo-com.svg" alt=""></span>
                    <div class="text">
                        <h3 class="style-1">Repuestos y accesorios frigoríficos e eléctricos</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>  

<section id="section-intro" class="pt60" data-bgcolor="#79552A">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-6">
                <div class="spacer-double sm-hide"></div>
                <img src="images/misc/1.jpg" alt="" class="img-responsive wow fadeInUp" data-wow-duration="1s">
            </div>

            <div class="col-lg-3 col-6">
                <img src="images/misc/2.jpg" alt="" class="img-responsive wow fadeInUp" data-wow-duration="1.5s">
            </div>

            <div class="col-lg-6 wow fadeIn">
                <div class="padding20">
                    <h2 class="title mb10">The Luxury Experience<br>You'll Remember
                        <span class="small-border"></span>
                    </h2>

                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                        magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                        ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                        incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

                    <a href="#" class="btn-line"><span>Book Now</span>s</a>

                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</section>

<section class="jarallax">
    <img src="images/background/4.jpg" class="jarallax-img" alt="">
    <div class="container">
        <div class="row gx-4">
            <div class="col-lg-12 text-center">
                <h2 class="title center">Testimonials
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