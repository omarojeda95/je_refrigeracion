@extends('admin.layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-sm-8">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="p-2">
                            <form class="form-horizontal" method="post" action="post_login">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-custom mb-4">
                                            <input type="text" class="form-control" name="username" id="username" required
                                                autocomplete="off" />
                                            <label for="username">Usuario</label>
                                        </div>

                                        <div class="form-group form-group-custom mb-4">
                                            <input type="password" class="form-control" name="userpassword" id="userpassword" required
                                                autocomplete="off" />
                                            <label for="userpassword">Contraseña</label>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success btn-block waves-effect waves-light"
                                                type="submit">
                                                Iniciar Sesion
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
@endsection