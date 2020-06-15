<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimoniosController extends Controller
{


    public function inicio()
    {
      $testimonios=\DB::table('testimonios')
      ->select('testimonios.*')

      ->orderBy('id','DESC')
    //  ->take(3)
      ->get();

      return view('testimonios')
       ->with('testimonios',$testimonios)
      ;
    }
    public function ver($id)
    {
      $testimonios=\DB::table('testimonios')
      ->select('testimonios.*')
      ->orderBy('id','DESC')
      ->take(3)
      ->get();

      $vertestimonios=\DB::table('testimonios')
      ->select('testimonios.*')
      ->where('testimonios.id','=',$id)
      ->orderBy('id','DESC')
      ->take(3)
      ->get();

      return view('vertestimonios')
       ->with('testimonios',$testimonios)
       ->with('vertestimonios',$vertestimonios)
      ;
    }
}
