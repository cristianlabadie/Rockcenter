@extends('layouts.app')
@section('body-class','login-page')
@section('content')
<div class="page-header header-filter" style="background-image: url('{{ asset('/img/show.jpg')}}'); background-size: cover; background-position: top center;">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <div class="card card-login">
          <form class="form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card-header card-header-primary text-center">
              <h4 class="card-title">Inicio de sesión</h4>
              <div class="social-line">
                <a href="#pablo" class="btn btn-just-icon btn-link">
                  <i class="fa fa-facebook-square"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link">
                  <i class="fa fa-google-plus"></i>
                </a>
              </div> <!-- Redes sociales-->
            </div>
            <p class="description text-center">Si no..</p>

            <div class="card-body">

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">mail</i>
                  </span>
                </div>
                <input type="email" class="form-control @error('password') is-invalid @enderror"
                name="password" placeholder="Email..." required autocomplete="current-password"
                value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" placeholder="Password..."  required autocomplete="current-password" id="password">



                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="footer text-center">
                <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Ingresar</button>
              </div>
              @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      ¿Olvidaste la contraseña?
                  </a>
              @endif

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @include('includes.footer')
</div>
@endsection
