@extends('dash.layouts.main')
@section('contenido')
<div class="title text-center">
  <h1>Usuarios</h1>
</div>
  @if($errors->any())
    <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
      <h5>Error:</h5>
      <ul>
        @foreach(@$errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
  <button type="button" class="close"
  data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if ($message=Session::get('Listo'))
<div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
  <h5>Listo:</h5>
<span>{{$message}}</span>
<button type="button" class="close"
data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif
<div>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">
Agregar Usuario
</div>

</button>

<div class="modal fade" id="modal1"  tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true" >
  <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="modal1">Agregar usuario</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
<div class="col-4">

    <form enctype="multipart/form-data" method="post" action="/admin/usuarios">
      @csrf
      <div class="form-group">
        <label for="">Nombre</label>
        <br>
        <input required type="text" placeholder="Nombre" name="nombre" value="">
      </div>
      <div class="form-group">
        <label for="">Apellido Paterno</label>
        <br>
        <input required type="text" placeholder="Apellido Paterno" name="ap" value="">
      </div>
      <div class="form-group">
        <label for="">Apellido Materno</label>
        <br>
        <input required type="text" placeholder="Apellido Meterno" name="am">
      </div>
      <div class="form-group">
        <label for="">Teléfono</label>
        <br>
        <input required type="tel" placeholder="Teléfono" name="tel" value="">
      </div>
      <div class="form-group">
        <label for="">Imagen</label>
        <br>
        <input required type="file" placeholder="Imagen" name="img_profile">
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <br>
        <input required type="text" placeholder="Email" name="email" value="">
      </div>

      <div class="form-group">
        <label for="">Contraseña</label>
        <br>
        <input required type="password" placeholder="Contraseña" name="password" value="">
      </div>
      <div class="form-group">
        <label for="">Verificar contraseña</label>
        <br>
        <input required type="password" placeholder="Contraseña" name="remember_token" value="">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Registrar</button>
        <input type="reset" placeholder="reset"class="btn btn-warning">
      </div>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row container">

    <div class="col-8">
      <table class="table">
        <thead>
          <tr>
            <td>Imagen</td>
            <td>Nombre</td>
            <td>Apellido Paterno</td>
            <td>Apellido Materno</td>
            <td>Teléfono</td>
            <td>Email</td>
            </tr>
        </thead>
        <tbody>

          @foreach($usuarios as $p)
          <tr>
            <td> <img src="{{asset('/img/usuarios/'.$p->img_profile)}}" width="25px"> </td>
             <td>{{$p->nombre}}</td>
            <td>{{$p->ap}}</td>
            <td>{{$p->am}}</td>
            <td>{{$p->tel}}</td>
            <td>{{$p->email}}</td>

            <td>
              <button type="button"
              class="btn btn-outline-primary btn-sm btnEditar"
              data-toggle="modal" data-target="#exampleModal"
              data-id="{{$p->id}}"
              data-name="{{$p->nombre}}"
              data-ap="{{$p->ap}}"
              data-am="{{$p->am}}"
              data-tel="{{$p->tel}}"
              data-email="{{$p->email}}"

              >
                <i class="fas fa-edit"></i>
              </button>
              <form  action="{{url('/admin/usuarios',['id'=>$p->id])}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$p->id}}">
                <input type="hidden" name="_method" value="delete">
                <button type="submit"
                 class="btn btn-outline-danger btn-sm">
                  <i class="fas fa-trash"></i>
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>


    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      {{ Form::open(array('url' => '/admin/usuarios/update')) }}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar: <b id="titleEditar"></b> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{Form::hidden('id','',['id' =>'idEditar']) }}
        <div class="form-group">
          <label>Nombre: </label>
          {{ Form::text('nombre','', ['class'=>'form-control','id'=>'nombreEdit']) }}
        </div>
        <div class="form-group">
          <label>Apellido Paterno: </label>
          {{ Form::text('ap','', ['class'=>'form-control','id'=>'apEdit']) }}
        </div>
        <div class="form-group">
          <label>Apellido Materno: </label>
          {{ Form::text('am','', ['class'=>'form-control','id'=>'amEdit']) }}
        </div>
        <div class="form-group">
          <label>Teléfono:</label>
          {{ Form::tel('tel','', ['class'=>'form-control','id'=>'telEdit']) }}
        </div>
              <div class="form-group">
          <label>Email: </label>
          {{ Form::text('email','', ['class'=>'form-control','id'=>'emailEdit']) }}
        </div>


      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
        {{ Form::close() }}
    </div>
  </div>
</div>
@endsection
@section('scripts')
  <script>
    $(document).ready(function(){
      $(".btnEditar").on('click', function(){
        $("#titleEditar").text($(this).data('nombre'));
        var Nombre=$(this).data('name');
        $("#nombreEdit").val(Nombre);
        $("#apEdit").val($(this).data('ap'));
        $("#amEdit").val($(this).data('am'));
        $("#telEdit").val($(this).data('tel'));
        $("#emailEdit").val($(this).data('email'));
         $("#idEditar").val($(this).data('id'));

    });
  });
  </script>
@endsection
