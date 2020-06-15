<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
  public function inicio()
  {
    $noticias=\DB::table('noticias')
    ->select('noticias.*')

    ->orderBy('id','DESC')
  //  ->take(3)
    ->get();

    return view('noticias')
     ->with('noticias',$noticias)
    ;
  }
  public function ver($id)
  {
    $noticias=\DB::table('noticias')
    ->select('noticias.*')
    ->orderBy('id','DESC')
    ->take(3)
    ->get();

    $vernoticias=\DB::table('noticias')
    ->select('noticias.*')
    ->where('noticias.id','=',$id)
    ->orderBy('id','DESC')
    ->take(3)
    ->get();

    return view('vernoticias')
     ->with('noticias',$noticias)
     ->with('vernoticias',$vernoticias)
    ;
  }
}
