@extends('dash.layouts.main')

@section('contenido')
<div class="title text-center">
  <h1>Bienvenido al panel administrativo</h1>
  <h2>{{Auth::user()->name}}  {{Auth::user()->nombre}}</h2>
</div>
<div class="wrap-again2 col-sm-3">
  <div class="form-item">
    <h3> Administrador</h3>
  <div class="InfoN">{{ __('Teléfono:') }}</div>
  <h6>{{Auth::user()->tel}}</h6>
  <div class="InfoN">{{ __('Correo electrónico:')}}</div>
  <h6>{{Auth::user()->email}}</h6>

</div>
@endsection
