<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Pacientes;


class PacientesController extends Controller
{
  public function index(){
    $productos=\DB::table('pacientes')
    ->select('pacientes.*')
    //->where('stock','>',10)
    ->orderBy('nombre','DESC')
    //->take(10)
    ->get();

    return view('dash.pacientes')
    ->with('pacientes',$productos);
  }
  public function store(Request $request){
    $validator=Validator::make($request->all(),[
     'nombre'=>'required|max:45',
     'Ap'=>'required|max:25',
     'Am'=>'required|max:25',
     'calle'=>'required|max:25',
     'colonia'=>'required|max:255',
     'ciudad'=>'required|max:30',
     'tel'=>'required|max:11',
     'genero'=>'required|max:25',
     'edad'=>'required|max:2',
     'tipo_cancer'=>'required|max:30'


   ]);
  if($validator->fails()){
   return back()
    ->withInput()
    ->withErrors($validator);
  }else{
    //Insertar
    $pacientes=Pacientes::create([
      'nombre'=>$request->nombre,
      'Ap'=>$request->Ap,
      'Am'=>$request->Am,
      'calle'=>$request->calle,
      'colonia'=>$request->colonia,
      'ciudad'=>$request->ciudad,
      'tel'=>$request->tel,
      'genero'=>$request->genero,
      'edad'=>$request->edad,
      'tipo_cancer'=>$request->tipo_cancer



    ]);
    return back()
    ->with('Listo','Se ha insertado correctamente');
  }
  }//llave store
  public function destroy($id){
      $pacientes=Pacientes::find($id);
      $pacientes->delete();
      return back()
      ->with('Listo', "Se ha eliminado correctamente");
    }
  public function update(Request $request){
      $validator=Validator::make($request->all(),[
        'nombre'=>'required|max:45',
        'Ap'=>'required|max:25',
        'Am'=>'required|max:25',
        'calle'=>'required|max:25',
        'colonia'=>'required|max:255',
        'ciudad'=>'required|max:30',
        'tel'=>'required|max:11',
        'genero'=>'required|max:25',
        'edad'=>'required|max:2',
        'tipo_cancer'=>'required|max:30'

     ]);
     if($validator->fails()){
      return back()
      ->withInput()
      ->withErrors($validator);
    }else{
      $paciente=Pacientes::find($request->id);
      $paciente->nombre=$request->nombre;
      $paciente->Ap=$request->Ap;
      $paciente->Am=$request->Am;
      $paciente->calle=$request->calle;
      $paciente->colonia=$request->colonia;
      $paciente->ciudad=$request->ciudad;
      $paciente->tel=$request->tel;
      $paciente->genero=$request->genero;
      $paciente->edad=$request->edad;
      $paciente->tipo_cancer=$request->tipo_cancer;


      $paciente->save();
      return back();
    }
  }
}
