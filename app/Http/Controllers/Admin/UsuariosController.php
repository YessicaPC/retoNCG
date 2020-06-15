<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Validator;
use App\User;


class UsuariosController extends Controller
{
  public function index(){
    $usuarios=\DB::table('users')
    ->select('users.*')
    //->where('stock','>',10)
    ->orderBy('nombre','DESC')
    //->take(10)
    ->get();

    return view('dash.usuarios')
    ->with('usuarios',$usuarios);
  }
  public function store(Request $request){
    $validator=Validator::make($request->all(),[
     'nombre'=>'required|max:45',
     'ap'=>'required|max:25',
     'am'=>'required|max:25',
     'tel'=>'required|max:10',
     'img_profile'=>'required|file|max:1024|mimes:jpeg, png, jpg, gif, svg',
     'email'=>'required|max:255',
      'password'=>'required|max:255',
     'remember_token'=>'required|max:255'


   ]);
   if($validator->fails()){
     return back()
     ->withInput()
     ->withErrors($validator);
   }else{
     $imagen = $request -> file('img_profile');
     $nombre = time().'.'.$imagen->getClientOriginalExtension();
     $destino = public_path('/img/usuarios');
     $request -> img_profile -> move($destino, $nombre);
    //Insertar
    $Usuarios=User::create([
      'nombre'=>$request->nombre,
      'ap'=>$request->ap,
      'am'=>$request->am,
      'tel'=>$request->tel,
      'img_profile'=>$nombre,
      'email'=>$request->email,
      'password'=>Hash::make($request->password),
      'remember_token'=>Hash::make($request->remember_token)



    ]);
    return back()
    ->with('Listo','Se ha insertado correctamente');
  }
  }//llave store
  public function destroy($id){
  $usuarios=User::find($id);
  if(file_exists(public_path('/img/usuarios')."/".$usuarios->img_profile)){
    unlink(public_path('/img/usuarios')."/".$usuarios->img_profile);

  }
  $usuarios->delete ();
      return back()
      ->with('Listo', "Se ha eliminado correctamente");
    }
  public function update(Request $request){
      $validator=Validator::make($request->all(),[
        'nombre'=>'required|max:45',
        'ap'=>'required|max:25',
        'am'=>'required|max:25',
        'tel'=>'required|max:10',
        'email'=>'required|max:255',




     ]);
     if($validator->fails()){
      return back()
      ->withInput()
      ->withErrors($validator);
    }else{
      $usuario=User::find($request->id);
      $usuario->nombre=$request->nombre;
      $usuario->ap=$request->ap;
      $usuario->am=$request->am;
      $usuario->tel=$request->tel;
      $usuario->email=$request->email;
       $usuario->save();
      return back();
    }
  }
}
