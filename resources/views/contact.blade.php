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
<script src="{{asset('js/form.js')}}" async defer></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    function onSubmit(token) {
      document.getElementById("send_message").submit();
    }
</script>
@endsection

@section('content')

<!-- subheader -->
<section id="subheader" class="no-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Contacto</h1>
            </div>
        </div>
    </div>
</section>

<section id="section-main" class="no-bg no-top" aria-label="section-menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="de-content-overlay">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3>Sede Principal</h3>
                                    <address>
                                        <span><strong>Dirección:</strong>Av. Cantogrande 556, SJL</span>
                                        <span><strong>Teléfono:</strong>(+51) 333 9298</span>
                                        <span><strong>Celular:</strong>(208) 333 9296</span>
                                        <span><strong>Correo:</strong><a
                                                href="mailto:contact@example.com">contact@example.com</a></span>
                                    </address>
                                </div>
                            </div>

                            <div class="spacer-single"></div>

                            <form name="contactForm" id='contact_form' method="post">
                                <div class="row">
                                    <div class="col-md-12 mb10">
                                        <h3>Envíanos tu mensaje</h3>
                                    </div>
                                    <div class="col-md-6">
                                        @csrf
                                        <div id='name_error' class='error'>Por favor ingresar nombre.</div>
                                        <div>
                                            <input type='text' name='name' id='name' class="form-control"
                                                placeholder="Nombre" required autocomplete="off">
                                        </div>

                                        <div id='email_error' class='error'>Por favor ingresar un correo válido.</div>
                                        <div>
                                            <input type='email' name='email' id='email' class="form-control"
                                                placeholder="Correo" required>
                                        </div>

                                        <div id='phone_error' class='error'>Por favor ingresar celular.</div>
                                        <div>
                                            <input type='text' name='phone' id='phone' class="form-control"
                                                placeholder="Celular" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id='message_error' class='error'>Por favor ingresar tu mensaje.</div>
                                        <div>
                                            <textarea name='message' id='message' class="form-control"
                                                placeholder="Mensaje" required style="resize: none"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}">
                                            </div>
                                            @if ($errors->has('g-recaptcha-response'))
                                            <span class="text-danger">{{ $errors->first('g-recaptcha-response')
                                                }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p id='submit' class="mt20">
                                            <input type='submit' id='send_message' value='Enviar' class="btn btn-line">
                                        </p>
                                        <div id='mail_success' class='success'>
                                            Tu mensaje ha sido enviado exitosamente.
                                        </div>
                                        <div id='mail_fail' class='error'>
                                            Lo sentimos, esta vez ocurrió un error al enviar su mensaje.
                                        </div>

                                    </div>
                                </div>
                            </form>

                            <div id="success_message" class='success'>
                                Tu mensaje ha sido enviado exitosamente. Actualice esta página si desea enviar más mensajes.
                            </div>
                            <div id="error_message" class='error'>
                                Lo sentimos, hubo un error al enviar su formulario.
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="map-container map-fullwidth">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15609.355484463025!2d-77.0136645!3d-12.0201757!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x61d0393dc8e00146!2sJE%20Refrigeraci%C3%B3n%20S.A.C.!5e0!3m2!1ses-419!2spe!4v1670902660813!5m2!1ses-419!2spe"
                                    width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false"
                                    tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->
@endsection