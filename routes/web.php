<?php
use App\Artigo;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Request $req) {
    if(isset($req->busca) && $req->busca != "") {
      $busca = $req->busca;
      $lista = Artigo::listaArtigosSite(3, $busca);  
    } else {
      $lista = Artigo::listaArtigosSite(3);  
      $busca = "";
    }

    return view('site',compact('lista', 'busca'));
})->name('site');

Route::get('/artigo/{id}/{titulo?}', function ($id) {
    $artigo = Artigo::find($id);
    if($artigo){
      return view('artigo',compact('artigo'));
    }

    return redirect()->route('site');

})->name('artigo');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('can:isAutor');

Route::middleware(['auth'])->prefix('admin')->namespace('Admin')->group(function(){

  Route::resource('artigos', 'ArtigosController')->middleware('can:isAutor');
  Route::resource('usuarios', 'UsuariosController')->middleware('can:isAdmin');
  Route::resource('autores', 'AutoresController')->middleware('can:isAdmin');
  Route::resource('adm', 'AdminController')->middleware('can:isAdmin');

});
