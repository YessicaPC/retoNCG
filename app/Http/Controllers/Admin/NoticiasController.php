<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Validator;
use App\noticias;


class NoticiasController extends Controller
{
  public function index(){
    $noticias=\DB::table('noticias')
    ->select('noticias.*')
    //->where('stock','>',10)
    ->orderBy('nombre','DESC')
    //->take(10)
    ->get();

    return view('dash.noticias')
    ->with('noticias',$noticias);
  }
  public function store(Request $request){
    $validator=Validator::make($request->all(),[
     'nombre'=>'required|max:1000',
     'contenido'=>'required|max:3000',
     'imagen'=>'required|file|max:1024|mimes:jpeg, png, jpg, gif, svg',



   ]);
   if($validator->fails()){
     return back()
     ->withInput()
     ->withErrors($validator);
   }else{
     $imagen = $request -> file('imagen');
     $nombre = time().'.'.$imagen->getClientOriginalExtension();
     $destino = public_path('/img/noticias');
     $request -> imagen -> move($destino, $nombre);
    //Insertar
    $Noticias=noticias::create([
      'nombre'=>$request->nombre,
      'contenido'=>$request->contenido,
      'imagen'=>$nombre,
    ]);
    return back()
    ->with('Listo','Se ha insertado correctamente');
  }
  }//llave store
  public function destroy($id){
  $noticias=noticias::find($id);
  if(file_exists(public_path('/img/noticias')."/".$noticias->imagen)){
    unlink(public_path('/img/noticias')."/".$noticias->imagen);

  }
  $noticias->delete ();
      return back()
      ->with('Listo', "Se ha eliminado correctamente");
    }
  public function update(Request $request){
      $validator=Validator::make($request->all(),[
        'nombre'=>'required|max:45',
        'contenido'=>'required|max:300',

     ]);
     if($validator->fails()){
      return back()
      ->withInput()
      ->withErrors($validator);
    }else{
      $noticias=noticias::find($request->id);
      $noticias->nombre=$request->nombre;
      $noticias->contenido=$request->contenido;

       $noticias->save();
      return back();

    }
  }
}
