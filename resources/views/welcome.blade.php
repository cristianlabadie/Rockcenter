@extends('layouts.app')

@section('body-class', 'landing-page')

@section('styles')
@endsection

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('/img/fondoverde.png') }}');">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1 class="title">Bienvenido a Vive Vivero.</h1>
                <h4>¿Quieres saber como trabajamos?</h4>
                <br />
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-success btn-raised btn-lg">
                    <i class="fa fa-play"></i> Mira acá
                </a>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center section-landing">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="title">#ViveConPlantas</h2>
                    <h5 class="description">Poblar las viviendas de nuestros clientes con nuestros mejores arreglos, botánica, plantas de interiores, maceteros con diseños únicos.</h5>
                </div>
            </div>

            <div class="features">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-primary">
                                <i class="material-icons">verified_user</i>
                            </div>
                            <h4 class="info-title">Confiabilidad</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-success">
                                <i class="material-icons">spa</i>
                            </div>
                            <h4 class="info-title">Somos plantas</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="material-icons">fingerprint</i>
                            </div>
                            <h4 class="info-title">Seguridad y cuidado</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section text-center">
            <h2 class="title">Visita nuestras categorías</h2>

            <form class="form-inline" action="{{ url('/search') }}" method="get">
                <input type="text" placeholder="¿Qué articulo buscas?" class="form-control" name="query" id="search">
                <button class="btn btn-primary btn-fab btn-fab-mini btn-round" type="submit">
                    <i class="material-icons">search</i>
                </button>
            </form>
            
        </div>


        <div class="section landing-section">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center title">Contáctanos</h2>
                    <h4 class="text-center description">Escribenos tus ideas, proyectos, consejos.</h4>

                    <form class="contact-form" action="{{ url('/messageClient') }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Tu nombre</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Tu correo</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group label-floating">
                            <label class="control-label">Tu mensaje</label>
                            <textarea class="form-control" name="message" rows="4"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center">
                                <button type="submit"class="btn btn-success btn-raised">
                                    Enviar mensaje
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection

@section('scripts')
@endsection
