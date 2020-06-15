@extends('')
@section('content')
<img src="{{asset('/img/2.jpg')}}" class="login10-form-logo">
                      <div class="login10Title">
                        <h1>{{Auth::user()->name}}  {{Auth::user()->ap}}</h1>
                      </div>
                      <div class="wrap-again2 col-sm-3">
                        <div class="form-item">
                        <div class="InfoN1">{{ __('Datos básicos')}}</div>
                        <div class="InfoN">{{ __('Teléfono:') }}</div>
                        <h6>{{Auth::user()->phone}}</h6>
                        <div class="InfoN">{{ __('Correo electrónico:')}}</div>
                        <h6>{{Auth::user()->email}}</h6>
                        <div class="InfoN">{{ __('Puesto administrativo:')}}</div>
                        <h6>Administrador :D</h6>
                        <div class="InfoN">{{ __('Desde:')}}</div>
                        <h6>Desde que empecé a desarrollar esto :'D</h6>
                        </div>
                      </div>
                      <div class="wrap-again">
                        <div class="titlec">{{ __('Bienvenido a tu perfil')}}
                        </div>
                        <br>
                        <div class="InfoN1">{{ __('No hay notificaciones por el momento')}}</div>
                      </div>
                      <div class="wrap-item col-sm-5">
                        <a href="#" class="nav-link" title="Modificar datos del perfil">
                          <img src="{{ asset('/img/mind.png')}}" height="50px" width="50px" class="zoom">
                        </a>
                        <a href="#" class="nav-link" title="Ver los demás miembros">
                          <img src="{{ asset('/img/folder.png')}}" height="50px" width="50px" class="zoom">
                        </a>
                        <a href="#"  class="nav-link" title="Registrar un nuevo usuario">
                          <img src="{{ asset('/img/registro.png')}}" height="50px" width="50px" class="zoom">
                        </a>
                        <a href="#" class="nav-link" title="Eliminar miembros u información">
                          <img src="{{ asset('/img/trash.png')}}" height="50px" width="50px" class="zoom">
                        </a>
                      </div>
                      @endsection
