@extends('dash.layouts.main')
@section('contenido')
<div class="title text-center">
  <h1>Pacientes</h1>
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

<div class="row container">

    <div class="col-8">
      <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">
      Agregar Paciente
      </div>
      <table class="table">
        <thead>
          <tr>
            <td>Nombre</td>
            <td>Apellido Paterno</td>
            <td>Apellido Materno</td>
            <td>Calle</td>
            <td>Colonia</td>
            <td>Ciudad</td>
            <td>Teléfono</td>
            <td>Género</td>
            <td>Edad</td>
            <td>Tipo de Cáncer</td>
            <td>Fecha</td>

          </tr>
        </thead>
        <tbody>
          @foreach($pacientes as $p)
          <tr>

             <td>{{$p->nombre}}</td>
            <td>{{$p->Ap}}</td>
            <td>{{$p->Am}}</td>
            <td>{{$p->calle}}</td>
            <td>{{$p->colonia}}</td>
            <td>{{$p->ciudad}}</td>
            <td>{{$p->tel}}</td>
            <td>{{$p->genero}}</td>
            <td>{{$p->edad}}</td>
            <td>{{$p->tipo_cancer}}</td>
            <td>{{$p->created_at}}</td>

            <td>
              <button type="button"
              class="btn btn-outline-primary btn-sm btnEditar"
              data-toggle="modal" data-target="#exampleModal"
              data-id="{{$p->id}}"
              data-name="{{$p->nombre}}"
              data-ap="{{$p->Ap}}"
              data-am="{{$p->Am}}"
              data-calle="{{$p->calle}}"
              data-colonia="{{$p->colonia}}"
              data-ciudad="{{$p->ciudad}}"
              data-tel="{{$p->tel}}"
              data-genero="{{$p->genero}}"
              data-edad="{{$p->edad}}"
              data-tipo_cancer="{{$p->tipo_cancer}}"

              >
                <i class="fas fa-edit"></i>
              </button>
              <form  action="{{url('/admin/pacientes',['id'=>$p->id])}}" method="post">
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



</button>
    <div class="modal fade" id="modal1"  tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true" >
      <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="modal1">Agregar Paciente</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
    <div class="col-4">
        <form enctype="multipart/form-data" method="post" action="/admin/pacientes">
          @csrf
          <div class="form-group">
            <label for="">Nombre</label>
            <br>
            <input required type="text" placeholder="Nombre" name="nombre" value="">
          </div>
          <div class="form-group">
            <label for="">Apellido Paterno</label>
            <br>
            <input required type="text" placeholder="Apellido Paterno" name="Ap" value="">
          </div>
          <div class="form-group">
            <label for="">Apellido Materno</label>
            <br>
            <input required type="text" placeholder="Apellido Meterno" name="Am">
          </div>
          <div class="form-group">
            <label for="">Calle</label>
            <br>
            <input required type="text" placeholder="Calle" name="calle" value="">
          </div>
          <div class="form-group">
            <label for="">Colonia</label>
            <br>
            <input required type="text" placeholder="colonia" name="colonia" value="">
          </div>
          <div class="form-group">
            <label for="">Ciudad</label>
            <br>
            <input required type="text" placeholder="Ciudad" name="ciudad" value="">
          </div>
          <div class="form-group">
            <label for="">Telefono</label>
            <br>
            <input required type="int" placeholder="Telefono" name="tel" value="">
          </div>
          <div class="form-group">
            <label for="">Genero</label>
          </div>
          <div class="wrapIn" data-validate="Escoja un sexo">
            <select id="genero" type="text" name="genero" class="input100{{$errors->has('genero') ? 'is-invalid' : ''}}" required placeholder="Genero" for="genero">
              <option value="Femenino">Femenino</option>
              <option value="Masculino">Masculino</option>
            </select>
            <div class="form-group">
              <label for="">Edad</label>
              <br>
              <input required type="text" placeholder="Edad" name="edad" value="">
            </div>
            <div class="form-group">
              <label for="">Tipo de Cáncer</label>
            </div>
            <div class="wrapIn" data-validate="Tipo de cáncer">
              <select id="tipo_cancer" type="text" name="tipo_cancer" class="input100{{$errors->has('tipo_cancer') ? 'is-invalid' : ''}}" required placeholder="Tipo de Cáncer" for="tipo_cancer">
                <option value="Femenino">Mama</option>
                <option value="Masculino">Cervicouterino</option>
              </select>
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
</div>

    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      {{ Form::open(array('url' => '/admin/pacientes/update')) }}
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
          {{ Form::text('Ap','', ['class'=>'form-control','id'=>'apEdit']) }}
        </div>
        <div class="form-group">
          <label>Apellido Materno: </label>
          {{ Form::text('Am','', ['class'=>'form-control','id'=>'AmEdit']) }}
        </div>
        <div class="form-group">
          <label>Calle: </label>
          {{ Form::text('calle','', ['class'=>'form-control','id'=>'calleEdit']) }}
        </div>
        <div class="form-group">
          <label>Colonia: </label>
          {{ Form::text('colonia','', ['class'=>'form-control','id'=>'coloniaEdit']) }}
        </div>
        <div class="form-group">
          <label>Ciudad: </label>
          {{ Form::text('ciudad','', ['class'=>'form-control','id'=>'ciudadEdit']) }}
        </div>
        <div class="form-group">
          <label>Telefono: </label>
          {{ Form::text('tel','', ['class'=>'form-control','id'=>'telEdit']) }}
        </div>
        <div class="form-group">

          <label>Genero:</label>
          <select id="generoEdit" name="genero" class="form-control" required placeholder="Genero" for="genero">
            <option value="Femenino">Femenino</option>
            <option value="Masculino">Masculino</option>
          </select>        </div>
        <div class="form-group">
          <label>Edad: </label>
          {{ Form::number('edad','', ['class'=>'form-control','id'=>'edadEdit']) }}
        </div>
        <div class="form-group">

          <label>Tipo de Cáncer:</label>
          <select id="generoEdit" name="tipo_cancer" class="form-control" required placeholder="Cáncer" for="tipo_cancer">
            <option value="Mama">Mama</option>
            <option value="Cervicouterino">Carvicouterino</option>
          </select>        </div>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
        $("#AmEdit").val($(this).data('am'));
        $("#calleEdit").val($(this).data('calle'));
        $("#coloniaEdit").val($(this).data('colonia'));
        $("#ciudadEdit").val($(this).data('ciudad'));
        $("#telEdit").val($(this).data('tel'));
        $("#generoEdit").val($(this).data('genero'));
        $("#edadEdit").val($(this).data('edad'));
        $("#tipo_cancerEdit").val($(this).data('tipo_cancer'));

        $("#idEditar").val($(this).data('id'));






    });
  });
  </script>
@endsection
