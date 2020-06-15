<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\testimonios;


class TestimoniosController extends Controller
{
  public function index(){
    $testimonios=\DB::table('testimonios')
    ->select('testimonios.*')
    //->where('stock','>',10)
    ->orderBy('titulo','DESC')
    //->take(10)
    ->get();

    return view('dash.testimonios')
    ->with('testimonios',$testimonios);
  }
  public function store(Request $request){
    $validator=Validator::make($request->all(),[
     'titulo'=>'required|max:45',
     'contenido'=>'required|max:2000',
     'imagen'=>'required|file|max:1024|mimes:jpeg, png, jpg, gif, svg'


   ]);
   if($validator->fails()){
     return back()
     ->withInput()
     ->withErrors($validator);
   }else{
     $imagen = $request -> file('imagen');
     $nombre = time().'.'.$imagen->getClientOriginalExtension();
     $destino = public_path('/img/testimonios');
     $request -> imagen -> move($destino, $nombre);
     //Insertar

    $testimonios=testimonios::create([
      'titulo'=>$request->titulo,
      'contenido'=>$request->contenido,
      'imagen'=>$nombre,

    ]);
    return back()
    ->with('Listo','Se ha insertado correctamente');
  }
  }//llave store
  public function destroy($id){
  $testimonios=testimonios::find($id);
  if(file_exists(public_path('/img/testimonios')."/".$testimonios->imagen)){
    unlink(public_path('/img/testimonios')."/".$testimonios->imagen);

  }
  $testimonios->delete ();
      return back()
      ->with('Listo', "Se ha eliminado correctamente");
    }
  public function update(Request $request){
      $validator=Validator::make($request->all(),[
        'titulo'=>'required|max:45',
        'contenido'=>'required|max:10000',

     ]);
     if($validator->fails()){
      return back()
      ->withInput()
      ->withErrors($validator);
    }else{
      $testimonios=testimonios::find($request->id);
      $testimonios->titulo=$request->titulo;
      $testimonios->contenido=$request->contenido;


      $testimonios->save();
      return back();
    }
  }
}
