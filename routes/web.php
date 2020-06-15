   <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| php artisan make:migration Noticias
*/

Route::get('/','HomeController@inicio');
Route::get('/testimonios','TestimoniosController@inicio');
Route::get('/testimonios/{id}','TestimoniosController@ver');


Route::get('/noticias','NoticiasController@inicio');
Route::get('/noticias/{id}','NoticiasController@ver');




Route::get('/galeria',function(){
return view('galeria');
});
Route::get('/conocenos',function(){
return view('conocenos');
});
Route::get('/programas',function(){
return view('programas');
});
Route::get('/explorate',function(){
return view('explorate');
});


Route::get('/contactanos',function(){
return view('contactanos');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'as'=> 'admin'], function (){
  Route::get('/', 'Admin\AdminController@index');
  Route::get('/inicio','Admin\admin@index');

  Route::get('/pacientes','Admin\PacientesController@index');
  Route::post('/pacientes/update','Admin\PacientesController@update');
  Route::resource('pacientes','Admin\PacientesController');

  Route::get('/usuarios','Admin\UsuariosController@index');
  Route::post('/usuarios/update','Admin\UsuariosController@update');
  Route::resource('usuarios','Admin\UsuariosController');


  Route::get('/testimonios','Admin\TestimoniosController@index');
  Route::post('/testimonios/update','Admin\TestimoniosController@update');
  Route::resource('testimonios','Admin\TestimoniosController');

  Route::get('/noticias','Admin\NoticiasController@index');
  Route::post('/noticias/update','Admin\NoticiasController@update');
  Route::resource('noticias','Admin\NoticiasController');

  Route::get('logout', 'TokenAuthController@logout');
});
