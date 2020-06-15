<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    public function inicio()
    {
      $noticias=\DB::table('noticias')
      ->select('noticias.*')

      ->orderBy('id','DESC')
      ->take(3)
      ->get();
      $testimonios=\DB::table('testimonios')
      ->select('testimonios.*')

      ->orderBy('id','DESC')
      ->take(3)
      ->get();

      return view('index')
      ->with('noticias',$noticias)
      ->with('testimonios',$testimonios)
      ;
    }
}
