@extends('layouts.auth')
@section('title')
<title>Polla Deportiva | Login</title>
@endsection
@section('content')
<div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
                <img src="assets/img/logo.png" alt="" width="150">
            </div><!-- End Logo -->

            <div class="card mb-3">

              <div class="card-body">

                <div class="pt-2 pb-2">
                  <h5 class="card-title pb-0 fs-4">Ingresa a tu cuenta</h5>
                  <p class="small">Coloca tu correo electrónico y contraseña para continuar</p>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="email" class="mb-2">Correo Electrónico</label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password" class="mb-2">Contraseña</label>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    Recuerda mis datos
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary w-100">
                                Inicia Sesión
                            </button>
                        </div>
                        <div class="col-md-12 mt-3">
                            <p class="small mb-0">Aún tienes una cuenta? <a href="{{ url('register') }}">Regístrate</a></p>
                        </div>
                    </div>
                </form>

              </div>
            </div>


          </div>
        </div>
      </div>

    </section>

</div>
@endsection
