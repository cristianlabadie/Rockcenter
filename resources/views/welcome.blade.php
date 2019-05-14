@extends('layouts.app')

@section('body-class', 'landing-page')

@section('styles')
<style>
    .team .row .col-md-4{
        margin-bottom: 5em;
    }
    .row {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display:         flex;
      flex-wrap: wrap;
    }
    .row > [class*='col-'] {
      display: flex;
      flex-direction: column;
    }
    .tt-query {
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
         -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
              box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    }

    .tt-hint {
      color: #999
    }

    .tt-menu {    /* used to be tt-dropdown-menu in older versions */
      width: 222px;
      margin-top: 4px;
      padding: 4px 0;
      background-color: #fff;
      border: 1px solid #ccc;
      border: 1px solid rgba(0, 0, 0, 0.2);
      -webkit-border-radius: 4px;
         -moz-border-radius: 4px;
              border-radius: 4px;
      -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
         -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
              box-shadow: 0 5px 10px rgba(0,0,0,.2);
    }

    .tt-suggestion {
      padding: 3px 20px;
      line-height: 24px;
    }

    .tt-suggestion.tt-cursor,.tt-suggestion:hover {
      color: #fff;
      background-color: #55C90B;

    }

    .tt-suggestion p {
      margin: 0;
    }
</style>
@endsection

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('/img/fondo.jpg') }}');">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h1 class="title">RockCenter la red para los músicos.</h1>
        <h4>Como red de oportunidades de crecimiento para las bandas que recién comienzan su rumbo, profesionales o solistas.</h4>
        <br>
        <a href="{{ url('/') }}" target="_self" class="btn btn-success btn-raised btn-lg">
          <i class="fa fa-archive"></i> Crea un evento
        </a>
        <a href="{{ url('/') }}" target="_self" class="btn btn-primary btn-raised btn-lg">
          <i class="fa fa-search"></i> Busca eventos para postular
        </a>
      </div>
    </div>
  </div>
</div>

<div class="main main-raised">
  <div class="conteiner">
    <div class="section text-center section-landing">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header card-header-text card-header-primary">
            <div class="card-text">
              <h4 class="card-title">Proximos eventos</h4>
            </div>
          </div>
          <div class="card-body">
            
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>



@include('includes.footer')
@endsection

@section('javascript')
@endsection
