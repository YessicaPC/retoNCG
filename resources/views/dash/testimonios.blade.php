@extends('dash.layouts.main')
@section('contenido')
<div class="title text-center">
  <h1>Testimonios</h1>
</div>  @if($errors->any())
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
Agregar testimonio
</div>

</button>
<div class="modal fade" id="modal1"  tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true" >
  <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="modal1">Agregar Testimonio</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
<div class="col-4">

    <form enctype="multipart/form-data" method="post" action="/admin/testimonios">
      @csrf
      <div class="form-group">
        <label for="">Título</label>
        <br>
        <textarea required type="text" placeholder="Titulo" name="titulo" value="" cols="50" > </textarea>
      </div>
      <div class="form-group">
        <label for="">Contenido</label>
        <br>
        <textarea required type="text" placeholder="Testimonio" name="contenido" value="" cols="50" rows="10"> </textarea>
      </div>
      <div class="form-group">
        <label for="">Imagen</label>
        <br>
        <input required type="file" placeholder="Imagen" name="imagen" value="">
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
            <td>Título</td>
            <td>Contenido</td>
            <td>Fecha</td>
            </tr>
        </thead>
        <tbody>
          @foreach($testimonios as $p)
          <tr>
            <td> <img src="{{asset('/img/testimonios/'.$p->imagen)}}" width="25px"> </td>
             <td>{{$p->titulo}}</td>
            <td>{{$p->contenido}}</td>
            <td>{{$p->created_at}}</td>
            <td>
              <button type="button"
              class="btn btn-outline-primary btn-sm btnEditar"
              data-toggle="modal" data-target="#exampleModal"
              data-id="{{$p->id}}"
              data-titulo="{{$p->titulo}}"
              data-contenido="{{$p->contenido}}"
              >
                <i class="fas fa-edit"></i>
              </button>
              <form  action="{{url('/admin/testimonios',['id'=>$p->id])}}" method="post">
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
      {{ Form::open(array('url' => '/admin/testimonios/update')) }}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar: <b id="titleEditar"></b> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{Form::hidden('id','',['id' =>'idEditar']) }}
        <div class="form-group">
          <label>Titulo: </label>
          {{ Form::text('titulo','', ['class'=>'form-control','id'=>'tituloEdit']) }}
        </div>
        <div class="form-group">
          <label>Contenido: </label>
          {{ Form::text('contenido','', ['class'=>'form-control','id'=>'contenidoEdit']) }}
        </div>


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
        $("#titleEditar").text($(this).data('titulo'));
        var Titulo=$(this).data('titulo');
        $("#tituloEdit").val(Titulo);
        $("#contenidoEdit").val($(this).data('contenido'));
         $("#idEditar").val($(this).data('id'));






    });
  });
  </script>
@endsection
